<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactoController extends Controller
{
    public function index()
    {
        $mensajes = Contacto::orderBy('id', 'desc')->paginate(5);

        return view('mensajes.index', compact('mensajes'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255',],
            'number' => ['required', 'digits:10'],
            'message' => ['required', 'string']
        ]);

        if ($validation->fails()) {
            return response()->json(['code' => 400, 'msg' => 'Hubo un error, vuelve a intentarlo']);
        }

        $name = $request->name;
        $email = $request->email;
        $number = $request->number;
        $msg = $request->message;

        $datos_formulario = new Contacto;
        $datos_formulario->nombre_completo = $name;
        $datos_formulario->email = $email;
        $datos_formulario->numero = $number;
        $datos_formulario->mensaje = $msg;
        $datos_formulario['hora_cita'] = Carbon::now()->isoFormat('LLLL');
        $datos_formulario->save();

        return response()->json(['code' => 200, 'msg' => 'Gracias por tu mensaje, pronto te contactaremos.']);
    }

    public function edit($id)
    {
        $mensaje = Contacto::find($id);
        
        return view('mensajes.edit', compact('mensaje'));
    }

    public function revisado(Request $request, Contacto $contacto, $id)
    {
        $datos = request()->except('_token','_method');
        
        $datos['concesionado'] = 1;

        Contacto::where('id','=',$id)->update($datos);

        return redirect()->route('contacto.index')->with('success', 'Estado de mensaje editado correctamente');
    }

    public function cancelado(Request $request, Contacto $contacto, $id)
    {
        $datos = request()->except('_token','_method');
        
        $datos['concesionado'] = 0;

        Contacto::where('id','=',$id)->update($datos);

        return redirect()->route('contacto.index')->with('success', 'Estado de mensaje editado correctamente');
    }

    public function destroy($id){
        $mensaje_seleccionado = Contacto::find($id);

        try{
            $mensaje_seleccionado->delete();
            return redirect()->route('contacto.index')->with('success', 'Mensaje eliminado correctamente');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('contacto.index')->with('error',$e->getMessage());
        }
    }
}
