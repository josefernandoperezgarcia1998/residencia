<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    public function index()
    {
        /* Cuando sea el usuario autenticado rol administrador devuelve todos los usuarios con cualquier rol*/
        if(Auth::user()->rol=="Administrador") $usuarios = User::paginate(15);
        /* Cuando sea  el usuario autenticado rol personal solo le mostrará */
        elseif(Auth::user()->rol=="Personal"){
            //Si el usuario autenticado tiene rol de "personal" no puede ver a los administradores
            $usuarios =  User::where('rol','<>','Administrador')
                            ->paginate(15);
        }
        return view('usuario.index', compact('usuarios'));
    }
    
    public function create()
    {
        return view('usuario.create');
    }

    public function store(Request $request)
    {
        if(Auth::user()->rol = 'Adminsitrador'){
                /* OBteniendo todos los request de la vista */
                $valores = $request->all();

                /* Reglas de validación del request */
                $validation = Validator::make($request->all(), [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'min:8'],
                    'password2' => ['required', 'min:8'],
                    'activo' => ['required'],
                ]);
        
                /* Fallo en caso de que las reglas de validación fallen */
                if ($validation->fails()) {
                    return redirect()->back()->with('error','Por favor complete bien los campos');
                }
        
                /* Msj de error si el usuario es sonso y no hace caso al ajax :v que ya está en uso el correo */
                if (User::where('email', $valores['email'])->exists()) {
                    return redirect()->back()->with('error','Correo electrónico ya existente, escoja otro');
                }
        
                /* Mensaje de error si la contraseña no está bien confirmada */
                if ($valores['password']!=$valores['password2'])
                    return redirect()->back()->with('error','Contraseñas no coinciden');
                
                /*Se hashea la contraseña */
                $valores['password'] = Hash::make( $valores['password'] );
        
                /* Se llena el modelo con los datos en caso de que todo esté correcto */
                $registro = new User();
                $registro->fill($valores);
                $registro->save();
        
                return redirect()->route('usuarios.index')->with('mensaje','Usuario creado correctamente');
        }
        
        if(Auth::user()->rol = 'Personal'){
                /* OBteniendo todos los request de la vista */
                $valores = $request->all();

                /* Reglas de validación del request */
                $validation = Validator::make($request->all(), [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'min:8'],
                    'password2' => ['required', 'min:8'],
                    'activo' => ['required'],
                ]);
        
                /* Fallo en caso de que las reglas de validación fallen */
                if ($validation->fails()) {
                    return redirect()->back()->with('error','Por favor complete bien los campos');
                }
        
                /* Msj de error si el usuario es sonso y no hace caso al ajax :v que ya está en uso el correo */
                if (User::where('email', $valores['email'])->exists()) {
                    return redirect()->back()->with('error','Correo electrónico ya existente, escoja otro');
                }
        
                /* Mensaje de error si la contraseña no está bien confirmada */
                if ($valores['password']!=$valores['password2'])
                    return redirect()->back()->with('error','Contraseñas no coinciden');
                
                /*Se hashea la contraseña */
                $valores['password'] = Hash::make( $valores['password'] );
                $valores['rol'] = 'Personal';
                dd($valores);
        
                /* Se llena el modelo con los datos en caso de que todo esté correcto */
                $registro = new User();
                $registro->fill($valores);
                $registro->save();
        
                return redirect()->route('usuarios.index')->with('mensaje','Usuario creado correctamente');
        }
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        $usuario_pass = $usuario['password'];
        return view('usuario.edit', compact('usuario'));
    }

    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuario.show', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $valores = $request->all();

        /* 
        Verificación si el input password2 está definida y es NULL
        En otras palabras, que el password2 tenga un valor y el input de password también
        Si llega con datos entra al if y verifica si la pass1 diferente al pass 2
        Si son diferentes tira error ( aL NO SER IGUALES)
        Si son iguales, continua el proceso
        */
        if(isset($valores['password2'])){
            $validation_pasword2 = Validator::make($request->all(), [
                'password' => ['required', 'min:8'],
                'password2' => ['required', 'min:8'],
            ]);

            /* Error en el caso que el usuario no haga bien el input de password2 */
            if ($validation_pasword2->fails()) {
                return redirect()->back()->with('error','Error en el campo confirmar contraseña, vuelve a intentarlo ');
            }

            if ($valores['password']!=$valores['password2']){
                return redirect()->back()->with('error','Contraseñas no coinciden');
            }
        }

        /* 
        Verificación si el input password está vacío
        */
        if(!isset($valores['password'])){
            
            //si el password esta en blanco no lo actualizaremos
            if( is_null($valores['password']))
            {
                unset($valores['password']);
            }
        }
        else{
            $validation_paswords = Validator::make($request->all(), [
                'password' => ['required', 'min:8'],
                'password2' => ['required', 'min:8'],
            ]);

            /* Error en el caso de que el usuario solamente escriba en el campo password y no en el password2*/
            if ($validation_paswords->fails()) {
                return redirect()->back()->with('error','Error al cambiar la contraseña, vuelve a intentarlo');
            }

            $valores['password'] = Hash::make( $valores['password'] );
        }




        $registro = User::find($id);
        $registro->fill($valores);
        $registro->save();

        return redirect()->route('usuarios.index')->with('mensaje','Usuario editado correctamente');
    }

    public function destroy($id)
    {
        $usuario_seleccionado = User::find($id);

        try{
            $usuario_seleccionado->delete();
            return redirect()->route('usuarios.index')->with('mensaje', 'Usuario eliminado correctamente');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('usuarios.index')->with('error',$e->getMessage());
        }
    }

    /*
        Función para autenticar estando en el login 
        Primero obtiene el correo 
        Después, busca en el modelo User al usuario con ese email
        Luego, en un if pregunta si es NULO ( o sea no existe ese usuario)
        arroja los errores de validación(los mensajes en rojo)
        En caso contrario, obtiene obtiene el valor de la contraseña del input
        y en una variable llamada password_bd almacena el input del usuario que se encontró en el modelo
        Después, en un if compara si el HASH de la contraseña obtenida el input es el mismo que la contraseña de la Base de datos
        si es cierto loguea al usuario, caso contrario arroja error de validación por credenciales fallidas (contraseña).
    */
    public function autenticar(Request $request)
    {
        $email   = $request->input('email');
        $usuario = User::where('email',$email)->first();
        
        if(is_null($usuario))
            throw ValidationException::withMessages([
                $this->username() => [trans('auth.failed')],
            ]);
        else{
            $password = $request->input('password');
            $password_bd = $usuario->password;
            $estado_activo = $usuario->activo;
            if (Hash::check($password, $password_bd)) {
                if( $estado_activo=='Si'){
                    Auth::login($usuario);
                    return redirect()->route('home');
                }
                else{
                    throw ValidationException::withMessages([
                        $this->username() => [trans('auth.mensaje_error_activo')],
                    ]);
                }
            }
            else{
                throw ValidationException::withMessages([
                    $this->username() => [trans('auth.failed')],
                ]);
            }
        }
    }
    /* Funcion que obtiene los valores del login (email y password) */
    /* Esta funcion se instancia la función autenticar */
    public function username()
    {
        return 'email';
    }

    /* 
    Función que permite usar AJAX para validar si un correo está ó no
    en el sistema
    */
    function check(Request $request)
    {
        if($request->get('email'))
        {
            $email = $request->get('email');

            $data = DB::table("users")
                    ->where('email', $email)
                    ->count();

            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }
    }
}
