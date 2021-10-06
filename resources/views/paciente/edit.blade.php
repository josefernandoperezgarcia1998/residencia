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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Apellido Paterno</label>
                                        <input type="text" class="form-control" name="a_paterno"
                                            value="{{ old('a_paterno', $paciente->a_paterno) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Apellido Materno</label>
                                        <input type="text" class="form-control" name="a_materno"
                                            value="{{ old('a_materno', $paciente->a_materno) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Edad</label>
                                        <input type="number" class="form-control" name="edad"
                                            value="{{ old('edad', $paciente->edad) }}" required min="1" max="100">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Peso</label>
                                        <input type="number" class="form-control" name="peso"
                                            value="{{ old('peso', $paciente->peso) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estado civil</label>
                                        <select class="form-control" name="estado_civil">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('estado_civil') == 'Casado/a' ? 'selected' : ($paciente->estado_civil == 'Casado/a' ? 'selected' : '') }} value="Casado/a">Casado/a</option>
                                            <option {{ old('estado_civil') == 'Divorciado/a' ? 'selected' : ($paciente->estado_civil == 'Divorciado/a' ? 'selected' : '') }} value="Divorciado/a">Divorciado/a</option>
                                            <option {{ old('estado_civil') == 'Viudo/a' ? 'selected' : ($paciente->estado_civil == 'Viudo/a' ? 'selected' : '') }} value="Viudo/a">Viudo/a</option>
                                            <option {{ old('estado_civil') == 'Union_libre' ? 'selected' : ($paciente->estado_civil == 'Union_libre' ? 'selected' : '') }} value="Union_libre">Union_libre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Teléfono de casa</label>
                                        <input type="text" class="form-control" name="telefono_casa"
                                            value="{{ old('telefono_casa', $paciente->telefono_casa) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                            <br>
                            <label for=""><strong>Presión Arterial</strong></label>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sistólica</label>
                                        <input type="text" class="form-control" name="sistolica"
                                            value="{{ old('sistolica', $paciente->sistolica) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Diastólica</label>
                                        <input type="text" class="form-control" name="diastolica"
                                            value="{{ old('diastolica', $paciente->diastolica) }}" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
                            <a href="{{ route('pacientes.index') }}" type="submit"
                                class="btn btn-info pull-right">Cancelar</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
