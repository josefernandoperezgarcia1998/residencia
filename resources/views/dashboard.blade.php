<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="shortcut icon" href="{{ asset('fotos_estaticas/logo_oficial_sin_fondo_en_orillas.png') }}"
        type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Centro Alternativo Homeopático
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
    <style>
        .logo_centrado {
            position: relative;
            left: 55px;
        }

        .card-buscador{
            display: none;
        }

        @media (max-width: 991px){
    
        .card-buscador{
            display: inline;
        }
}


    </style>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
        -->
            <div class="logo" style="background-color: white !important;">
                <a href="{{ route('home') }}"> <img class="logo_centrado" src="{{ asset('fotos_estaticas/logo_oficial.jpg') }}" alt="logo" width="150" height="150"></a>
                <a href="{{ route('home') }}" class="simple-text logo-normal">Centro Alternativo<br>Homeopático</a>
            </div>
            <div class="sidebar-wrapper">
                @include('layouts.sidebar-menu')
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Tablero principal</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <form class="form-inline ml-auto" action="{{ route('buscador') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group no-border">
                                        <input type="text" class="form-control" name="cadena" placeholder="Ej. Pablo Pérez García"
                                    </div>
                                    <button type="submit" class="btn btn-just-icon btn-round">
                                        <i class="material-icons">search</i>
                                    </button>
                                </form>
                            </li>
                            <div style="width: 50px;"></div>
                            {{ Auth::user()->name }}
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    {{-- <a class="dropdown-item" href="{{ route('ver.perfil') }}">Perfil</a> --}}
                                    {{-- <div class="dropdown-divider"></div> --}}

                                    {{-- Cerrar sesión del usuario --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    {{-- Fin cerrar sesión del usuario --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            {{-- Contenido general de la pagina --}}
            <div class="content">
                <!-- Contenido de la pagina -->
                <div class="container-fluid">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Bienvenido {{ Auth::user()->name }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="card-buscador">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                                <h4 class="card-title">Buscar historial médico</h4>
                                <form action="{{ route('buscador') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="" class="card-text">Introduce el nombre del paciente</label>
                                    <input type="search" class="form-control" name="cadena" placeholder="Ej. Pablo Pérez García"  autocomplete="off" spellcheck="false" role="combobox">    
                                    <button type="submit" class="btn btn-dark" style="background-image: linear-gradient(
                                        195deg,#4076ec,#1b73d8) !important;">Buscar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <p class="card-category">Pacientes</p>
                                    <h3 class="card-title">{{ $pacientes }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <span class="material-icons">
                                            people_outline
                                        </span>
                                        <a href="{{ route('pacientes.index') }}">Ver lista de pacientes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-primary card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">content_paste</i>
                                    </div>
                                    <p class="card-category">Historial Médico</p>
                                    <h3 class="card-title">{{ $citas }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <span class="material-icons">
                                            description
                                        </span>
                                        <a href="{{ route('historial_medico.index') }}">Ver lista de historiales médicos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">group</i>
                                    </div>
                                    <p class="card-category">Personal</p>
                                    <h3 class="card-title">{{ $personal }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <span class="material-icons">
                                            group
                                        </span>
                                        <a href="{{ route('usuarios.index') }}">Ver lista de personal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            {{-- Poner aqui card de preguntas --}}
                            <div class="col-md-10">
                                <div class="card card-stats">
                                    <div class="card-header card-header-info card-header-icon">
                                        <div class="card-icon" style="background-image: linear-gradient(
                                            195deg,#ec407a,#d81b60);">
                                            <i class="material-icons">question_answer</i>
                                        </div>
                                        <p class="card-category">Mensajes del formulario de contacto</p>
                                        <h3 class="card-title">{{ $contacto_contador }}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <th>Nombre</th>
                                                    <th>Mensaje</th>
                                                    <th>Estado</th>
                                                    <th>Fecha del mensaje</th>
                                                </thead>
                                                <tbody>
                                                    @forelse ($contactos as $contacto)
                                                    <tr>
                                                        <td>{{ $contacto->nombre_completo }}</td>
                                                        <td>{{ $contacto->mensaje }}</td>
                                                        <td>
                                                            @if (is_null($contacto->concesionado))
                                                                {{--Si el estado de concesionado es NULL sale pendiente  --}}
                                                                <span class="badge badge-warning"><strong>Pendiente</strong></span>
                                                            @else
                                                                @if ($contacto->concesionado==0)
                                                                    {{--Si el estado de concesionado es 0 sale cancelado  --}}
                                                                    <span class="badge badge-danger"><strong>Cancelado</strong></span>
                                                                @else
                                                                    {{-- Si el estado de concesionado es 1 sale que ya fue revisado --}}
                                                                    <span class="badge badge-success"><strong>Revisado</strong></span>
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td>{{ $contacto->hora_cita }}</td>
                                                    </tr>
                                                    @empty
                                                        <tr>
                                                            <td class="text-primary">No hay registros</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <span class="material-icons">
                                                question_answer
                                            </span>
                                            <a href="{{ route('contacto.index') }}">Ver lista de mensajes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contenido de la pagina -->
                </div>
                {{-- Fin Contenido general de la pagina --}}

                {{-- Contenido pie de pagina --}}
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="copyright float-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())

                            </script>, 
                            <a href="{{ route('home') }}">Centro Alternativo Homeopático.</a>
                        </div>
                    </div>
                </footer>
                {{-- Fin Contenido pie de pagina --}}
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('assets/js/plugins/jquery-jvectormap.js') }}"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') }}"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('assets/js/plugins/arrive.min.js') }}"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets/js/material-dashboard.js?v=2.1.2') }}" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('assets/demo/demo.js') }}"></script>
        <script>
            $(document).ready(function () {
                $().ready(function () {
                    $sidebar = $('.sidebar');

                    $sidebar_img_container = $sidebar.find('.sidebar-background');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                            $('.fixed-plugin .dropdown').addClass('open');
                        }

                    }

                    $('.fixed-plugin a').click(function (event) {
                        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $('.fixed-plugin .active-color span').click(function () {
                        $full_page_background = $('.full-page-background');

                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-color', new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data-color', new_color);
                        }
                    });

                    $('.fixed-plugin .background-color .badge').click(function () {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('background-color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-background-color', new_color);
                        }
                    });

                    $('.fixed-plugin .img-holder').click(function () {
                        $full_page_background = $('.full-page-background');

                        $(this).parent('li').siblings().removeClass('active');
                        $(this).parent('li').addClass('active');


                        var new_image = $(this).find("img").attr('src');

                        if ($sidebar_img_container.length != 0 && $(
                                '.switch-sidebar-image input:checked').length != 0) {
                            $sidebar_img_container.fadeOut('fast', function () {
                                $sidebar_img_container.css('background-image', 'url("' +
                                    new_image + '")');
                                $sidebar_img_container.fadeIn('fast');
                            });
                        }

                        if ($full_page_background.length != 0 && $(
                                '.switch-sidebar-image input:checked').length != 0) {
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder')
                                .find(
                                    'img').data('src');

                            $full_page_background.fadeOut('fast', function () {
                                $full_page_background.css('background-image', 'url("' +
                                    new_image_full_page + '")');
                                $full_page_background.fadeIn('fast');
                            });
                        }

                        if ($('.switch-sidebar-image input:checked').length == 0) {
                            var new_image = $('.fixed-plugin li.active .img-holder').find("img")
                                .attr('src');
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder')
                                .find(
                                    'img').data('src');

                            $sidebar_img_container.css('background-image', 'url("' + new_image +
                                '")');
                            $full_page_background.css('background-image', 'url("' +
                                new_image_full_page + '")');
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.css('background-image', 'url("' + new_image +
                                '")');
                        }
                    });

                    $('.switch-sidebar-image input').change(function () {
                        $full_page_background = $('.full-page-background');

                        $input = $(this);

                        if ($input.is(':checked')) {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar_img_container.fadeIn('fast');
                                $sidebar.attr('data-image', '#');
                            }

                            if ($full_page_background.length != 0) {
                                $full_page_background.fadeIn('fast');
                                $full_page.attr('data-image', '#');
                            }

                            background_image = true;
                        } else {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar.removeAttr('data-image');
                                $sidebar_img_container.fadeOut('fast');
                            }

                            if ($full_page_background.length != 0) {
                                $full_page.removeAttr('data-image', '#');
                                $full_page_background.fadeOut('fast');
                            }

                            background_image = false;
                        }
                    });

                    $('.switch-sidebar-mini input').change(function () {
                        $body = $('body');

                        $input = $(this);

                        if (md.misc.sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            md.misc.sidebar_mini_active = false;

                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                        } else {

                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar(
                                'destroy');

                            setTimeout(function () {
                                $('body').addClass('sidebar-mini');

                                md.misc.sidebar_mini_active = true;
                            }, 300);
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function () {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function () {
                            clearInterval(simulateWindowResize);
                        }, 1000);

                    });
                });
            });

        </script>
        <script>
            $(document).ready(function () {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();

            });

        </script>

        <script>
            $('#myModal').modal(options)
        </script>
</body>

</html>
