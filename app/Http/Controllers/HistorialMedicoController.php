<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Cita;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class HistorialMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('historial_medico.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        /* 
        Se obtienen todos los pacientes del modelo por el nombre e id 
        con el método pluck
        */
        $pacientes = DB::table('pacientes')->orderBy('nombre','asc')->get();
        return view('historial_medico.create', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = $request->all();
        $cita['hora_cita'] = Carbon::now()->isoFormat('LLLL');

        Cita::create($cita);

        return redirect()->route('historial_medico.index')->with('success', 'Cita creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{

            $cita = Cita::findOrFail($id);

            return view('historial_medico.show', compact('cita'));
        
        } catch (Throwable $e){
        
            report($e);

            return response()->view('errors.404', [], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita_seleccionada = Cita::find($id);

        try{
            $cita_seleccionada->delete();
            return redirect()->route('historial_medico.index')->with('success', 'Cita eliminada correctamente');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect()->route('historial_medico.index')->with('error',$e->getMessage());
        }
    }

    public function datatableHistorial()
    {
        //$citas = Cita::select('id','paciente_id','padecimiento')->get();
        //$citas = Cita::with('paciente')->select('id','paciente_id','padecimiento')->get();

        /*
        De la tabla citas, se hace un join (vaya, se obtienen los valores de ambas tablas por id)
        Voy a leer la consulta...
        De tabla citas y la tabla pacientes, en donde el id de pacientes es el mismo que el de paciente_id EN citas
        dame TODOS los valores de citas, AL IGUAL que el nombre del paciente y celular
        */
        $citas = DB::table('citas')
                ->join('pacientes', 'pacientes.id', '=', 'citas.paciente_id')
                ->select('citas.*', 'pacientes.nombre as pacienteNombre',
                        'pacientes.telefono_celular as pacienteCelular',)
                ->get();

        /*
        Retorno con el helper datatablers mi query de "$citas" que a su vez, me va a agregar en la tabla de la vista
        una columna llamada btn que tiene un PARTIALS a la ruta de una vista donde están mis botones
        y todo eso se envía en jSON.
        */
        return datatables()
                ->of($citas)
                ->addColumn('btn', 'historial_medico.actions.actions')
                ->rawColumns(['btn'])
                ->toJson();
    }

}
