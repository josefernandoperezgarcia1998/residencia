@extends('layouts.general')

@section('nombre_de_la_pagina')
Editar paciente
@endsection

@section('contenido_de_la_pagina')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Editar paciente</h4>
                        <p class="card-category">Modifica los datos generales del paciente</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre</label>
                                        <input type="text" class="form-control" name="nombre"
                                            value="{{ old('nombre', $paciente->nombre) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sexo</label>
                                        <select class="form-control" name="sexo">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('sexo') == 'Hombre' ? 'selected' : ($paciente->sexo == 'Hombre' ? 'selected' : '') }} value="Hombre">Hombre</option>
                                            <option {{ old('sexo') == 'Mujer' ? 'selected' : ($paciente->sexo == 'Mujer' ? 'selected' : '') }} value="Mujer">Mujer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alergia</label>
                                        <input type="text" class="form-control" name="alergia"
                                            value="{{ old('alergia', $paciente->alergia) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fecha de nacimiento (Año-Mes-Dia)</label>
                                        <input type="text" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $paciente->fecha_nacimiento) }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Peso</label>
                                        <input type="number" class="form-control" name="peso"
                                            value="{{ old('peso', $paciente->peso) }}" required min="1">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estatura</label>
                                        <input type="text" class="form-control" name="estatura"
                                            value="{{ old('estatura', $paciente->estatura) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Talla</label>
                                        <select class="form-control" name="talla">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('talla') == 'XS' ? 'selected' : ($paciente->talla == 'XS' ? 'selected' : '') }} value="XS">XS</option>
                                            <option {{ old('talla') == 'S' ? 'selected' : ($paciente->talla == 'S' ? 'selected' : '') }} value="S">S</option>
                                            <option {{ old('talla') == 'M' ? 'selected' : ($paciente->talla == 'M' ? 'selected' : '') }} value="M">M</option>
                                            <option {{ old('talla') == 'L' ? 'selected' : ($paciente->talla == 'L' ? 'selected' : '') }} value="L">L</option>
                                            <option {{ old('talla') == 'XL' ? 'selected' : ($paciente->talla == 'XL' ? 'selected' : '') }} value="XL">XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estado civil</label>
                                        <select class="form-control" name="estado_civil">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('estado_civil') == 'Casado/a' ? 'selected' : ($paciente->estado_civil == 'Casado/a' ? 'selected' : '') }} value="Casado/a">Casado/a</option>
                                            <option {{ old('estado_civil') == 'Divorciado/a' ? 'selected' : ($paciente->estado_civil == 'Divorciado/a' ? 'selected' : '') }} value="Divorciado/a">Divorciado/a</option>
                                            <option {{ old('estado_civil') == 'Viudo/a' ? 'selected' : ($paciente->estado_civil == 'Viudo/a' ? 'selected' : '') }} value="Viudo/a">Viudo/a</option>
                                            <option {{ old('estado_civil') == 'Soltero/a' ? 'selected' : ($paciente->estado_civil == 'Soltero/a' ? 'selected' : '') }} value="Soltero/a">Soltero/a</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Domicilio</label>
                                        <input type="text" class="form-control" name="domicilio"
                                            value="{{ old('domicilio', $paciente->domicilio) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Teléfono de casa</label>
                                        <input type="text" class="form-control" name="telefono_casa"
                                            value="{{ old('telefono_casa', $paciente->telefono_casa) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Teléfono celular</label>
                                        <input type="text" class="form-control" name="telefono_celular"
                                            value="{{ old('telefono_celular', $paciente->telefono_celular) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Correo electrónico</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email', $paciente->email) }}" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info pull-right">Actualizar</button>
                            <a href="{{ route('pacientes.index') }}" type="submit"
                                class="btn btn-primary pull-right">Cancelar</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
