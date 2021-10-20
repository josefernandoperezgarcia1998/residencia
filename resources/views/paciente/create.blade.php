@extends('layouts.general')

@section('nombre_de_la_pagina')
Crear paciente
@endsection

@section('contenido_de_la_pagina')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nuevo paciente</h4>
                        <p class="card-category">Datos generales del paciente</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pacientes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre completo</label>
                                        <input type="text" class="form-control" name="nombre"
                                            value="{{ old('nombre') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sexo</label>
                                        <select class="form-control" name="sexo">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('sexo') == 'Hombre' ? 'selected' : '' }} value="Hombre">
                                                Hombre</option>
                                            <option {{ old('sexo') == 'Mujer' ? 'selected' : '' }} value="Mujer">Mujer
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alergia</label>
                                        <input type="text" class="form-control" name="alergia"
                                            value="{{ old('alergia') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fecha de nacimiento (Año-Mes-Dia)</label>
                                        <input type="text" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Peso</label>
                                        <input type="number" class="form-control" name="peso" value="{{ old('peso') }}"
                                            required min="1">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estatura</label>
                                        <input type="text" class="form-control" name="estatura"
                                            value="{{ old('estatura') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Talla</label>
                                        <select class="form-control" name="talla">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('talla') == 'XS' ? 'selected' : '' }} value="XS">XS</option>
                                            <option {{ old('talla') == 'S' ? 'selected' : '' }} value="S">S</option>
                                            <option {{ old('talla') == 'M' ? 'selected' : '' }} value="M">M</option>
                                            <option {{ old('talla') == 'L' ? 'selected' : '' }} value="L">L</option>
                                            <option {{ old('talla') == 'XL' ? 'selected' : '' }} value="XL">XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estado civil</label>
                                        <select class="form-control" name="estado_civil">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('estado_civil') == 'Casado/a' ? 'selected' : '' }}
                                                value="Casado/a">Casado/a</option>
                                            <option {{ old('estado_civil') == 'Divorciado/a' ? 'selected' : '' }}
                                                value="Divorciado/a">Divorciado/a</option>
                                            <option {{ old('estado_civil') == 'Viudo/a' ? 'selected' : '' }}
                                                value="Viudo/a">Viudo/a</option>
                                            <option {{ old('estado_civil') == 'Soltero/a' ? 'selected' : '' }}
                                                value="Soltero/a">Soltero/a</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Domicilio</label>
                                        <input type="text" class="form-control" name="domicilio"
                                            value="{{ old('domicilio') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Teléfono de casa</label>
                                        <input type="text" class="form-control" name="telefono_casa"
                                            value="{{ old('telefono_casa') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Teléfono celular</label>
                                        <input type="text" class="form-control" name="telefono_celular"
                                            value="{{ old('telefono_celular') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Correo electrónico</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info pull-right">Crear</button>
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
