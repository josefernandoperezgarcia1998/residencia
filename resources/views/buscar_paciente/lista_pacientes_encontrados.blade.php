@extends('layouts.general')

@section('nombre_de_la_pagina')
Listado de pacientes
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
                        <h4 class="card-title ">Pacientes</h4>
                        <p class="card-category">Búsqueda de pacientes con "{{ $cadena }}"</p>
                    </div>
                    <div class="card-body ">
                        <h4 class="title">{{ $mensaje }}</h4>
                        @forelse ($pacientes as $paciente)
                        <div class="card test">
                            <div class="card-body">
                                <h7 class="card-title"><strong style="font-weight: bold;">Paciente:</strong>
                                    {{ $paciente->nombre}}</h7>
                                <br>
                                <h9 class="card-subtitle mb-2 text-muted"><strong
                                        style="font-weight: bold;">Domicilio:</strong> {{ $paciente->domicilio}}
                                </h9>
                                <hr>
                                <p class="card-text"><strong style="font-weight: bold;">Tel. Celular:</strong>
                                    {{ $paciente->telefono_celular}}</p>
                                    <a href="{{ route('historial_buscador', $paciente->id) }}" class="card-link pull-right">Ver historial médico</a>
                            </div>
                        </div>
                        @empty
                        <strong style="font-weight:bold;">
                            <p class="card-text text-danger">El paciente "{{ $cadena }}" no existe.</p>
                            <a href="{{ route('home') }}" class="card-link">Ir al tablero</a>
                        </strong>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection