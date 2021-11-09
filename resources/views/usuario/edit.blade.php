@extends('layouts.general')

@section('nombre_de_la_pagina')
Editar usuario
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
    @if (session('error'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>{{ session('error')}}</span>
    </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Editar usuario</h4>
                        <p class="card-category">Datos generales del usuario</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre completo</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name', $usuario->name) }}" required>
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
                                                <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $usuario->email) }}">
                                            </div>
                                            <span id="error_email"></span>
                                            @if ($errors->has('email'))
                                                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Activo</label>
                                        <select class="form-control" name="activo">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('activo') == 'Si' ? 'selected' : ($usuario->activo == 'Si' ? 'selected' : '') }} value="Si">Si</option>
                                            <option {{ old('activo') == 'No' ? 'selected' : ($usuario->activo == 'No' ? 'selected' : '') }} value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @if (Auth::user()->rol == 'Administrador')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Rol</label>
                                        <select class="form-control" name="rol">
                                            <option value=" " selected>Seleccionar...</option>
                                            <option {{ old('rol') == 'Administrador' ? 'selected' : ($usuario->rol == 'Administrador' ? 'selected' : '') }} value="Administrador">Administrador</option>
                                            <option {{ old('rol') == 'Personal' ? 'selected' : ($usuario->rol == 'Personal' ? 'selected' : '') }} value="Personal">Personal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-10">
                                    <hr>
                                    <label class="bmd-label-floating">En caso de no querer modificar la contraseña...</label>
                                    <label class="bmd-label-floating">Mantener campos en blanco.</label>
                                    <hr>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Contraseña (min 8 caracteres)</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="password2">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info pull-right">Actualizar datos</button>
                            <a href="{{ route('usuarios.index') }}" class="btn btn-primary pull-right">Volver</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AJAX script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
    
    $('#email').blur(function(){
        var error_email = '';
        var email = $('#email').val();
        var _token = $('input[name="_token"]').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if($.trim(email).length > 0)
        {
            if(!filter.test(email))
            {				
                $('#error_email').html('<label  class="badge badge-warning text-dark">Correo Inválido</label>');
                $('#email').addClass('has-error');
                $('#register').attr('disabled', 'disabled');
            }
            else
            {
                $.ajax({
                    url:"{{ route('register.check') }}",
                    method:"POST",
                    data:{email:email, _token:_token},
                    success:function(result)
                    {
                        if(result == 'unique')
                        {
                            $('#error_email').html('<label class="badge badge-success text-white">Correo disponible </label>');
                            $('#email').removeClass('has-error');
                            $('#register').attr('disabled', false);
                        }
                        else
                        {
                            $('#error_email').html('<label class="badge badge-danger text-white">Correo NO Disponible</label>');
                            $('#email').addClass('has-error');
                            $('#register').attr('disabled', 'disabled');
                        }
                    }
                })
            }
        }
        else
        {
            $('#error_email').html('<label class="badge badge-info text-dark">Correo Requerido</label>');
            $('#email').addClass('has-error');
            $('#register').attr('disabled', 'disabled');
        }
    });
    
    });
</script>
<!-- AJAX script -->
@endsection
