@extends('layouts.general')

@section('nombre_de_la_pagina')
Mostrar cita médica
@endsection

@section('contenido_de_la_pagina')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Mostrar cita</h4>
                        <p class="card-category">Datos generales de la cita</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombreccompleto</label>
                                        <input type="text" class="form-control" name="paciente_id" value="{{ $cita->paciente->nombre }} {{ $cita->paciente->a_paterno }} {{ $cita->paciente->a_materno }}" disabled> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Padecimiento</label>
                                        <input type="text" class="form-control" name="padecimiento" value="{{ $cita->padecimiento }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Medicamento</label>
                                        <input type="text" class="form-control" name="medicamento" value="{{ $cita->medicamento }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Terapia</label>
                                        <input type="text" class="form-control" name="terapia" value="{{ $cita->terapia }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Otra terapia realizada ó similar (externa a la empresa)</label>
                                        <input type="text" class="form-control" name="terapia_otro" value="{{ $cita->terapia_otro }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Ozono</label>
                                        <input type="text" class="form-control" name="ozono" value="{{ $cita->ozono }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Acupuntura</label>
                                        <input type="text" class="form-control" name="acupuntura" value="{{ $cita->acupuntura }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Limpieza en oídos</label>
                                        <input type="text" class="form-control" name="limpieza_oido" value="{{ $cita->limpieza_oido }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">¿Existen mejorías con la información
                                            anterior?</label>
                                            <input type="text" class="form-control" name="mejoria" value="{{ $cita->mejoria }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Descripción de la mejoría</label>
                                            <textarea class="form-control" rows="5"
                                                name="mejoria_descripcion" disabled>{{$cita->mejoria_descripcion}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Información extra</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Síntoma ó inquietud</label>
                                            <textarea class="form-control" rows="5"
                                                name="sintoma_inquietud" disabled>{{$cita->sintoma_inquietud}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary pull-right" href="{{ route('historial_medico.index') }}">Volver</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
