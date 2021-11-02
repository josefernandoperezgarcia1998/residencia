@extends('layouts.general')

@section('nombre_de_la_pagina')
Editar mensaje
@endsection

@section('contenido_de_la_pagina')
{{-- <style>
    
     /* telefono */
    @media (max-width: 850px) {
        .botones-form1{
            right: 5px;
        }

        .boton-form2{
            bottom: 2px;
            right: 54px;
        }
    }

    /* tablet */
    @media (min-width: 850px) {
        .botones-form1{
            right: 20px;
        }

        .boton-form2{
            bottom: 2px;
            right: 70px;
        }
    
    }

    /* compu */
    @media (min-width: 999px) {
        .botones-form1{
        position: relative; 
        right: 130px;
    }

    .boton-form2{
        position: relative;
        bottom: 50px;
    }
    }
</style> --}}
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Editar mensaje</h4>
                        <p class="card-category">Cambia el estado del mensaje</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contacto.revisado', $mensaje->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre</label>
                                        <input type="text" class="form-control" name="nombre_completo"
                                            value="{{ old('nombre_completo', $mensaje->nombre_completo) }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Correo electrónico</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ old('email', $mensaje->email) }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Numero</label>
                                        <input type="text" class="form-control" name="numero"
                                            value="{{ old('numero', $mensaje->numero) }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estado del mensaje</label>
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
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mensaje</label>
                                        <textarea class="form-control" rows="3" name="mensaje"
                                            disabled>{{$mensaje->mensaje}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fecha del mensaje</label>
                                        <textarea class="form-control" rows="3" name="mensaje"
                                            disabled>{{$mensaje->hora_cita}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="botones-form1">
                                    <a href="{{ route('contacto.index') }}" type="submit"
                                    class="btn btn-primary pull-right">Regresar</a>
                                {{-- If que contiene el gate para que se muestre o no el boton de revisar --}}
                                @if ($mensaje->concesionado==0)
                                    @cannot('revisar', $mensaje)
                                    <button type="submit" class="btn btn-success pull-right">Revisado</button>
                                    @endcannot
                                @else

                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <form action="{{ route('contacto.cancelado', $mensaje->id) }}" method="POST"
                            enctype="multipart/form-data" style="" class="boton-form2">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger pull-right">Cancelado</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
