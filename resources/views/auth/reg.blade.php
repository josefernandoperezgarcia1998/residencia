<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('assets_login/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets_login/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/css/main.css') }}">
    <!--===============================================================================================-->
    <style>
        .menu {
            position: absolute;
            top: 20px;
            right: 75px;
        }

    </style>
</head>

<body style="background-color: rgb(238,238,238);">

    <div class="limiter">
        <div class="container-login100">
            @if (Route::has('login'))
            <div class="menu">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar
                    Sesión</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar</a>
                @endif
                @endauth
            </div>
            @endif
            <div class="wrap-login100">

                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <span class="login100-form-title p-b-43">
                        Registrar
                        <br>
                        <br>
                        <h6>Completa los siguientes campos</h6>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Correo válido: ejemplo@abc.xyz">
                        <input type="text" class="input100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Correo Electrónico</span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Nombre válido: Juan Pérez Herrera">
                        <input type="text" class="input100" name="name" value="" required
                            autocomplete="name" autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Nombre completo</span>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
                        <input type="password" class="input100 @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Contraseña</span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
                        <input type="password" class="input100 @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Confirmar contraseña</span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    {{-- Mensaje de error para la validación del login --}}
                    @error('name') <span style="color: red">{{ $message }}</span> @enderror
                    <br>
                    @error('password') <span style="color: red">{{ $message }}</span> @enderror
                    <br>
                    @error('email') <span style="color: red">{{ $message }}</span> @enderror
                    {{-- Mensaje de error para la validación del login --}}
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Registrar
                        </button>
                    </div>

                </form>

                <div class="login100-more" style="background-image: url('assets_login/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="{{ asset('assets_login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_login/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets_login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_login/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets_login/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_login/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets_login/js/main.js') }}"></script>

</body>

</html>
