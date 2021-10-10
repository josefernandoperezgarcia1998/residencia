@extends('layouts.general')

@section('nombre_de_la_pagina')
Listado de pacientes
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
                <a href="{{ route('pacientes.create') }}" class="btn btn-info btn-sm">Nuevo paciente</a>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Pacientes</h4>
                        <p class="card-category">Listado de pacientes registrados en el sistema</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Teléfono celular</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($pacientes as $paciente)
                                    <tr>
                                        <td>{{ $paciente->nombre }}</td>
                                        <td>{{ $paciente->edad }}</td>
                                        <td>{{ $paciente->telefono_celular }}</td>
                                        <td class="text-primary">
                                            <a href="{{ route('pacientes.show', $paciente->id) }}"
                                                class="btn btn-info btn-sm"><i
                                                    class="material-icons">person</i></a>
                                            <a href="{{ route('pacientes.edit', $paciente->id) }}"
                                                class="btn btn-warning btn-sm"><i
                                                    class="material-icons">edit</i></a>
                                            <form action="{{ route('pacientes.destroy', $paciente->id) }}"
                                                method="POST" style="display: inline-block;"
                                                onsubmit="return confirm('¿Estas seguro de eliminar este paciente?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit" rel="tooltip">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-primary">No hay registros</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $pacientes->links() }}
                        </div>
                    </div>
                </div>
            </div>
            @endsection
