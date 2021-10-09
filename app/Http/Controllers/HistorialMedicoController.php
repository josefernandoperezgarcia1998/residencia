<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Cita;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class HistorialMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::all();
        return view('historial_medico.index', compact('citas'));
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
        //
    }

}
