<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BuscadorPacienteController extends Controller
{

    /* función para obtener a los pacientes por medio de un buscador */
    public function buscar(Request $request){
        //Se obtiene el "valor" que se escribió en el input
        $cadena = $request->input('cadena');
        //Hace la consulta
        //De la tabla productos donde el nombre
        //del paciente sea como "la cadena introducida"
        //y obtenga el id, nombre, edad, etc..
        $pacientes = DB::table('pacientes')
        ->where('nombre', 'like', "%$cadena%")
        ->select(['id','nombre','edad','domicilio','telefono_celular'])
        ->get();

        //Contador para obtener solamente cuantos pacientes hay
        $numero_pacientes_encontrados = DB::table('pacientes')
        ->where('nombre', 'like', "%$cadena%")
        ->count();

        $mensaje ="Pacientes encontrados: ".$numero_pacientes_encontrados;

        return view('buscar_paciente.lista_pacientes_encontrados', compact('mensaje','pacientes','cadena'));
    }

    /* Función para podedr obtener el listado de todos el historial médico de un paciente buscado por input  */
    public function historialPacienteBuscador($id){

        //Obtengo el nombre del paciente con limite de 1 (o sea solo un nombre de toda la busqueda)
        $obtener_paciente_nombre = DB::table('pacientes')
        ->join('citas', 'pacientes.id', '=', 'citas.paciente_id')
        ->select('pacientes.nombre as pacienteNombre')
        ->where('paciente_id','=', $id)
        ->limit(1)
        ->get();

        //Obtengo una colección y la almaceno la consulta del nombre en una nueva variable
        $colleccion_paciente_nombre = $obtener_paciente_nombre;

        //retorno un json de esa collección y le paso como segundo parámetro que acepte tildes y caracteres raros
        $nombre_json = json_encode($colleccion_paciente_nombre, JSON_UNESCAPED_UNICODE);

        //El json que obtuve lo conviero a string con el Helper Str 
        //y con el método between obtengo solamente el nombre del json
        $nombre_paciente = Str::between($nombre_json, '[{"pacienteNombre":"', '"}]');

        /* OBtengo el listado de todos los historiales médicos de un paciente por id */
        $historiales_medicos = DB::table('pacientes')
        ->join('citas', 'pacientes.id', '=', 'citas.paciente_id')
        ->select('citas.*', 'pacientes.nombre as pacienteNombre')
        ->where('paciente_id','=', $id)
        ->get();

        return view('buscar_paciente.lista_historial_medico_paciente', compact('historiales_medicos', 'nombre_paciente'));
    }
}
