@extends('layouts.general')

@section('nombre_de_la_pagina')
Crear nueva cita médica
@endsection

@section('contenido_de_la_pagina')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nueva cita</h4>
                        <p class="card-category">Alta de una nueva cita médica</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('historial_medico.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre</label>
                                        <select class="form-control" name="paciente_id" >
                                            <option value="paciente_id" selected>Seleccionar...</option>
                                            @foreach ($pacientes as $paciente)
                                                <option value="{{$paciente->id}}">{{$paciente->nombre}} {{$paciente->a_paterno}} {{$paciente->a_materno}}</option>
                                            @endforeach
                                          </select>  
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Padecimiento</label>
                                        <input type="text" class="form-control" name="padecimiento"
                                            value="{{ old('padecimiento') }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Medicamento</label>
                                        <input type="text" class="form-control" name="medicamento"
                                            value="{{ old('medicamento') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Terapia</label>
                                        <input type="text" class="form-control" name="terapia"
                                            value="{{ old('terapia') }}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Otra terapia realizada ó similar (externa a la empresa)</label>
                                        <input type="text" class="form-control" name="terapia_otro"
                                            value="{{ old('terapia_otro') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Ozono</label>
                                        <select class="form-control" name="ozono">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('ozono') == 'si' ? 'selected' : '' }} value="si">Si</option>
                                            <option {{ old('ozono') == 'no' ? 'selected' : '' }} value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Acupuntura</label>
                                        <select class="form-control" name="acupuntura">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('acupuntura') == 'si' ? 'selected' : '' }} value="si">Si
                                            </option>
                                            <option {{ old('acupuntura') == 'no' ? 'selected' : '' }} value="no">No
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Limpieza en oídos</label>
                                        <select class="form-control" name="limpieza_oido">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('limpieza_oido') == 'si' ? 'selected' : '' }} value="si">Si
                                            </option>
                                            <option {{ old('limpieza_oido') == 'no' ? 'selected' : '' }} value="no">No
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">¿Existen mejorías con la información
                                            anterior?</label>
                                        <select class="form-control" name="mejoria">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('mejoria') == 'si' ? 'selected' : '' }} value="si">Si
                                            </option>
                                            <option {{ old('mejoria') == 'no' ? 'selected' : '' }} value="no">No
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Descripción de la mejoría</label>
                                            <textarea class="form-control" rows="5"
                                                name="mejoria_descripcion"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Información extra</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Síntoma ó inquietud</label>
                                            <textarea class="form-control" rows="5"
                                                name="sintoma_inquietud"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Guardar cita</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
