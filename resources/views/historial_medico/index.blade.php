@extends('layouts.general')

@section('nombre_de_la_pagina')
Historial Médico
@endsection

@section('contenido_de_la_pagina')
<div class="content">
    @if (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>{{ session('success')}}</span>
    </div>

    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('historial_medico.create') }}" class="btn btn-info btn-sm">Nueva cita</a>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Historial Médico General</h4>
                        <p class="card-category">Listado de citas médicas registradas en el sistema</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Nombre del paciente</th>
                                    <th>Fecha de la cita</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($citas as $cita)
                                        <tr>
                                            <td>{{$cita->id}}</td>
                                            <td>{{$cita->paciente->nombre}}</td>
                                            <td>{{$cita->hora_cita}}</td>
                                            <td>
                                                <a href="{{ route('historial_medico.show', $cita->id) }}"
                                                    class="btn btn-info btn-sm"><i
                                                        class="material-icons">visibility</i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No se encuentra ningun registro de citas en el sistema...</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
