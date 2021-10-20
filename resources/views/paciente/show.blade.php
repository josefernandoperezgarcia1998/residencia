@extends('layouts.general')

@section('nombre_de_la_pagina')
Mostrar paciente
@endsection

@section('contenido_de_la_pagina')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Mostrar paciente</h4>
                        <p class="card-category">Datos generales del paciente</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre completo</label>
                                        <input type="text" class="form-control" name="nombre"
                                            value="{{ $paciente->nombre }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sexo</label>
                                        <input type="text" class="form-control" name="sexo"
                                            value="{{ $paciente->sexo }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alergia</label>
                                        <input type="text" class="form-control" name="alergia"
                                            value="{{ $paciente->alergia }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Edad</label>
                                        <input type="number" class="form-control" name="edad"
                                            value="{{ $paciente->edad }}" disabled required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Peso</label>
                                        <input type="number" class="form-control" name="peso"
                                            value="{{ $paciente->peso }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estatura</label>
                                        <input type="number" class="form-control" name="estatura"
                                            value="{{ $paciente->estatura }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Talla</label>
                                        <input type="text" class="form-control" name="talla"
                                            value="{{ $paciente->talla }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estado civil</label>
                                        <input type="text" class="form-control" name="estado_civil"
                                            value="{{ $paciente->estado_civil }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Domicilio</label>
                                        <input type="text" class="form-control" name="domicilio"
                                            value="{{ $paciente->domicilio }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Teléfono de casa</label>
                                        <input type="text" class="form-control" name="telefono_casa"
                                            value="{{ $paciente->telefono_casa }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Teléfono celular</label>
                                        <input type="text" class="form-control" name="telefono_celular"
                                            value="{{ $paciente->telefono_celular }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Correo electrónico</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $paciente->email }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('pacientes.edit', $paciente->id) }}"
                                class="btn btn-info pull-right">Editar</a>
                            <a href="{{ route('pacientes.index') }}" class="btn btn-primary pull-right">Volver</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
