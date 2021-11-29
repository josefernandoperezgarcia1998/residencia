@extends('layouts.general')

@section('nombre_de_la_pagina')
Listado de historial médico
@endsection

@section('contenido_de_la_pagina')
<style>
    .test {
        display: inline-block;
        width: 15rem;
    }

    @media (max-width: 991px) {

        .test {
            display: flex;
        }
    }

</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Historial Médico</h4>
                        <p class="card-category">Listado de historial médico</p>
                    </div>
                    <div class="card-body">
                        @forelse ($historiales_medicos as $historial_medico)
                        <div class="card test">
                            <div class="card-body">
                                <h7 class="card-title"><strong style="font-weight: bold;">Paciente:</strong>
                                    {{ $nombre_paciente }}</h7>
                                <br>
                                <h9 class="card-subtitle mb-2 text-muted"><strong
                                        style="font-weight: bold;">Fecha:</strong> {{ $historial_medico->hora_cita}}
                                </h9>
                                <hr>
                                <p class="card-text"><strong style="font-weight: bold;">Info:</strong>
                                    {{ $historial_medico->padecimiento}}</p>
                                <a href="{{ route('historial_paciente', $historial_medico->id) }}"
                                    class="card-link pull-right">Ver más...</a>
                            </div>
                        </div>
                        @empty
                        <strong style="font-weight:bold;">
                            <p class="card-text text-danger">No existe un historial médico de este paciente.</p>
                        </strong>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection