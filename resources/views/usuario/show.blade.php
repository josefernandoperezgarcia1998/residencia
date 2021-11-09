@extends('layouts.general')

@section('nombre_de_la_pagina')
Mostrar usuario
@endsection

@section('contenido_de_la_pagina')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Mostrar usuario</h4>
                        <p class="card-category">Datos generales del usuario</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre completo</label>
                                        <input type="text" class="form-control" name="telefono_casa"
                                        value="{{ $usuario->name }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                {{-- 
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Correo electrónico</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                            required>
                                    </div>
                                </div> 
                                --}}
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} md-10">
                                            <div class="input-group">
                                                <label class="bmd-label-floating">Correo electrónico</label>
                                                <input type="text" class="form-control" name="telefono_casa"
                                                value="{{ $usuario->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Activo</label>
                                        <input type="text" class="form-control" name="telefono_casa"
                                        value="{{ $usuario->activo }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Rol</label>
                                        <input type="text" class="form-control" name="telefono_casa"
                                        value="{{ $usuario->rol }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-info pull-right">Editar</a>
                            <a href="{{ route('usuarios.index') }}" class="btn btn-primary pull-right">Volver</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
