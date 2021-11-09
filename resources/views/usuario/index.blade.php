@extends('layouts.general')

@section('nombre_de_la_pagina')
Listado de personal del sistema
@endsection

@section('contenido_de_la_pagina')
<div class="content">
    @if (session('mensaje'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>{{ session('mensaje')}}</span>
    </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('usuarios.create') }}" class="btn btn-info btn-sm">Nuevo usuario</a>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Usuarios</h4>
                        <p class="card-category">Listado de personal registrados en el sistema</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Activo</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ $usuario->rol }}</td>
                                        <td>{{ $usuario->activo }}</td>
                                        <td class="text-primary">
                                            <a href="{{ route('usuarios.show', $usuario->id) }}"
                                                class="btn btn-info btn-sm"><i
                                                    class="material-icons">person</i></a>
                                            <a href="{{ route('usuarios.edit', $usuario->id) }}"
                                                class="btn btn-warning btn-sm"><i
                                                    class="material-icons">edit</i></a>
                                            <form action="{{ route('usuarios.destroy', $usuario->id) }}"
                                                method="POST" style="display: inline-block;"
                                                onsubmit="return confirm('¿Estas seguro de eliminar este usuario?')">
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
                            {{ $usuarios->links() }}
                        </div>
                    </div>
                </div>
            </div>
            @endsection
