@extends('layouts.general')

@section('nombre_de_la_pagina')
Listado de mensajes
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
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Mensajes</h4>
                        <p class="card-category">Listado de mensajes registrados en el sistema</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>Nombre</th>
                                    <th>Mensaje</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($mensajes as $mensaje)
                                    <tr>
                                        <td>{{ $mensaje->nombre_completo }}</td>
                                        <td>{{ $mensaje->mensaje }}</td>
                                        <td>
                                            @if (is_null($mensaje->concesionado))
                                                {{--Si el estado de concesionado es NULL sale pendiente  --}}
                                                <span class="badge badge-warning"><strong>Pendiente</strong></span>
                                            @else
                                                @if ($mensaje->concesionado==0)
                                                    {{--Si el estado de concesionado es 0 sale cancelado  --}}
                                                    <span class="badge badge-danger"><strong>Cancelado</strong></span>
                                                @else
                                                    {{-- Si el estado de concesionado es 1 sale que ya fue revisado --}}
                                                    <span class="badge badge-success"><strong>Revisado</strong></span>
                                                @endif
                                            @endif
                                        </td>
                                        <td class="text-primary">
                                            <a href="{{ route('contacto.edit', $mensaje->id) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <form action="{{ route('contacto.destroy', $mensaje->id) }}" method="POST"
                                                style="display: inline-block;"
                                                onsubmit="return confirm('¿Estas seguro de eliminar este mensaje?')">
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
                            {{ $mensajes->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
