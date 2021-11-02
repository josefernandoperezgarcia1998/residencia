<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centro Alternativo Homeopático</title>
    <link rel="shortcut icon" href="{{ asset('fotos_estaticas/logo_oficial_sin_fondo_en_orillas.png') }}"
        type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{ asset('assets_landing_page/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_landing_page/fonts/icon-font/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_landing_page/fonts/typography-font/typo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_landing_page/fonts/fontawesome-5/css/all.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets_landing_page/plugins/aos/aos.min.css') }}">

    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets_landing_page/css/main.css') }}">
    <!-- Custom stylesheet -->

    {{-- Link de bootstrap para AJAX --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />

    <style>
        html {
            scroll-behavior: smooth !important;
        }

        .img_acupuntura {
            position: relative;
            bottom: 109px;
            box-shadow: 18px -10px 24px -2px rgba(143, 30, 118, 0.8);
            -webkit-box-shadow: 18px -10px 24px -2px rgba(143, 30, 118, 0.8);
            -moz-box-shadow: 18px -10px 24px -2px rgba(143, 30, 118, 0.8);
        }

        .img_masaje {
            position: relative;
            bottom: 109px;
            box-shadow: -23px -10px 24px -2px rgba(143, 30, 118, 0.8);
            -webkit-box-shadow: -23px -10px 24px -2px rgba(143, 30, 118, 0.8);
            -moz-box-shadow: -23px -10px 24px -2px rgba(143, 30, 118, 0.8);
        }

        .img_homeopatia {
            position: relative;
            bottom: 120px;
            box-shadow: 18px -10px 24px -2px rgba(0, 146, 63, 0.8);
            -webkit-box-shadow: 18px -10px 24px -2px rgba(0, 146, 63, 0.8);
            -moz-box-shadow: 18px -10px 24px -2px rgba(0, 146, 63, 0.8);
        }

        .img_auriculoterapia {
            position: relative;
            bottom: 120px;
            box-shadow: -23px -10px 24px -2px rgba(0, 146, 63, 0.8);
            -webkit-box-shadow: -23px -10px 24px -2px rgba(0, 146, 63, 0.8);
            -moz-box-shadow: -23px -10px 24px -2px rgba(0, 146, 63, 0.8);
        }

        .img_conoterapia {
            position: relative;
            bottom: 109px;
            box-shadow: 18px -10px 24px -2px rgba(143, 30, 118, 0.8);
            -webkit-box-shadow: 18px -10px 24px -2px rgba(143, 30, 118, 0.8);
            -moz-box-shadow: 18px -10px 24px -2px rgba(143, 30, 118, 0.8);
        }

        /* Tablet */
        @media (max-width: 850px) {
            .img_acupuntura {
                bottom: 0px;
            }

            .img_masaje {
                bottom: 20px;
            }

            .img_homeopatia {
                bottom: 0px;
            }

            .img_auriculoterapia {
                bottom: 0px;
            }

            .img_conoterapia {
                bottom: 0px;
            }
            .contacto1{
                font-size: 50px;
            }
        }


        /* Inicia css del contacto */


        .contacto1 {
            font-family: 'Poppins', sans-serif, 'arial';
            font-weight: 600;
            font-size: 72px;
            color: rgb(0, 0, 0);
            text-align: center;
        }

        .contacto4 {
            font-family: 'Roboto', sans-serif, 'arial';
            font-weight: 400;
            font-size: 20px;
            color: #9b9b9b;
            line-height: 1.5;
        }

        /* ///// inputs /////*/

        input:focus~label,
        textarea:focus~label,
        input:valid~label,
        textarea:valid~label {
            font-size: 0.75em;
            color: rgb(255, 255, 255);
            top: -5px;
            -webkit-transition: all 0.225s ease;
            transition: all 0.225s ease;
        }

        .styled-input {
            float: left;
            width: 293px;
            margin: 1rem 0;
            position: relative;
            border-radius: 4px;
        }

        @media only screen and (max-width: 768px) {
            .styled-input {
                width: 100%;
            }
        }

        .styled-input label {
            color: rgb(255, 255, 255);
            padding: 1.3rem 30px 1rem 30px;
            position: absolute;
            top: 10px;
            left: 0;
            -webkit-transition: all 0.25s ease;
            transition: all 0.25s ease;
            pointer-events: none;
        }

        .styled-input.wide {
            width: 650px;
            max-width: 100%;
        }

        input,
        textarea {
            padding: 30px;
            border: 0;
            width: 100%;
            font-size: 1rem;
            background-color: rgba(0, 146, 63, 0.8);
            color: white;
            border-radius: 4px;
        }

        input:focus,
        textarea:focus {
            outline: 0;
        }

        input:focus~span,
        textarea:focus~span {
            width: 100%;
            -webkit-transition: all 0.075s ease;
            transition: all 0.075s ease;
        }

        textarea {
            width: 100%;
            min-height: 15em;
        }

        .input-container {
            width: 650px;
            max-width: 100%;
            margin: 20px auto 25px auto;
        }

        .submit-btn {
            float: right;
            padding: 7px 35px;
            border-radius: 60px;
            display: inline-block;
            background-color: rgba(143, 30, 118, 0.8);
            color: white;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06),
                0 2px 10px 0 rgba(0, 0, 0, 0.07);
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .submit-btn:hover {
            transform: translateY(1px);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.10),
                0 1px 1px 0 rgba(0, 0, 0, 0.09);
        }

        @media (max-width: 768px) {
            .submit-btn {
                width: 100%;
                float: none;
                text-align: center;
            }
        }

        input[type=checkbox]+label {
            color: #ccc;
            font-style: italic;
        }

        input[type=checkbox]:checked+label {
            color: #f00;
            font-style: normal;
        }

        /* Termina css del contacto */

    </style>
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
    <div class="site-wrapper overflow-hidden position-relative">
        <!-- Site Header -->
        <!-- Preloader -->
        <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
        <!--Site Header Area -->
        <header class="site-header site-header--menu-right landing-13-menu site-header--absolute site-header--sticky">
            <div class="container">
                <nav class="navbar site-navbar">
                    <!-- Brand Logo-->
                    <div class="brand-logo">
                        <a href="{{ route('welcome') }}">
                            <!-- light version logo (logo must be black)-->
                            <img src="{{ asset('fotos_estaticas/logo_oficial_sin_fondo_en_orillas.png') }}" alt=""
                                class="light-version-logo" width="70" height="70">
                            <!-- Dark version logo (logo must be White)-->
                            <img src="{{ asset('fotos_estaticas/logo_oficial_sin_fondo_en_orillas.png') }}" alt=""
                                class="dark-version-logo" width="70" height="70">
                        </a>
                    </div>
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item nav-item-has-children">
                                    {{-- <a href="#" class="nav-link-item drop-trigger">Dropdowns <i
                                            class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-9">
                                        <li class="sub-menu--item">
                                            <a href="#">Dropdown 01</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="#">Dropdown 02</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="#">Dropdown 03</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="#">Dropdown 04</a>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="#inicio" class="nav-link-item">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servicios" class="nav-link-item">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contacto" class="nav-link-item">Contacto</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                    <!--/.Mobile Menu Hamburger Ends-->
                </nav>
            </div>
        </header>
        <!-- navbar- -->
        <!-- Hero Area -->
        <div class="hero-area-l-13 position-relative overflow-hidden" id="inicio">
            <div class="container">
                <div class="row position-relative justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-sm-9" data-aos="fade-right" data-aos-duration="800"
                        data-aos-once="true">
                        <div class="banner-image-l-13">
                            <img src="{{ asset('assets_landing_page/image/temas/doc_sin_fondo.png') }}" alt=""
                                class="w-100">
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-8 col-sm-9" data-aos="fade-left"
                        data-aos-duration="800" data-aos-once="true">
                        <div class="content">
                            <h1>Centro Alternativo Homeopático</h1>
                            <p>Restableciendo tu Salud... 🌿🍃</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-shape-13"></div>
        </div>
        <!-- content-1 section start -->
        <div class="content-area-l-13-1 position-relative overflow-hidden" id="servicios">
            <div class="container">
                <div class="section-heading-7 text-center">
                    <h2>Servicios</h2>
                </div>
                <br>
                <br><br><br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="border-bottom">
                            <div class="row justify-content-center">
                                <div class="col-xl-11">
                                    <div class="row align-items-center justify-content-center justify-content-lg-start">
                                        <div class="offset-lg-1 col-lg-5  col-md-8 col-sm-10 order-lg-1 order-1"
                                            data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                                            <div class="content section-heading-7">
                                                <h2>Acupuntura</h2>
                                                <p>La acupuntura forma de medicina alternativa y un componente clave de
                                                    la medicina
                                                    tradicional china que implica la inserción de agujas finas en el
                                                    cuerpo.</p>
                                            </div>
                                        </div>
                                        <div class="offset-lg-1 col-lg-5 col-md-8 col-sm-10 position-relative order-lg-1 order-0"
                                            data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="app-image-position-l-13">
                                                <img src="{{ asset('assets_landing_page/image/temas/acupuntura.jpg') }}"
                                                    alt="" class="w-100 img_acupuntura">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-2 section start -->
        <div class="content-area-l-13-2 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="border-bottom">
                            <div class="row justify-content-center">
                                <div class="col-xl-11">
                                    <div class="row align-items-center justify-content-center justify-content-lg-start">
                                        <div class="col-lg-6  col-md-8 col-sm-10" data-aos="fade-right"
                                            data-aos-duration="800" data-aos-once="true">
                                            <div class="app-image-position-l-13">
                                                <img src="{{ asset('assets_landing_page/image/temas/masaje.jpg') }}"
                                                    alt="" class="w-100 img_masaje">
                                            </div>
                                        </div>
                                        <div class="offset-lg-1 col-lg-5 col-md-8 col-sm-10 position-relative"
                                            data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content section-heading-7">
                                                <h2>Masajes</h2>
                                                <p>El masaje es una forma de manipulación de las capas superficiales y
                                                    profundas de los músculos del cuerpo utilizando varias técnicas,
                                                    para mejorar sus funciones, ayudar en procesos de curación,
                                                    disminuir la actividad refleja de los músculos, inhibir la
                                                    excitabilidad motoneuronal, promover la relajación y el bienestar y
                                                    como actividad recreativa.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-3 section start -->
        <div class="content-area-l-13-3 position-relative overflow-hidden">
            <br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="border-bottom">
                            <div class="row justify-content-center">
                                <div class="col-xl-11">
                                    <div class="row align-items-center justify-content-center justify-content-lg-start">
                                        <div class="offset-lg-1 col-lg-5  col-md-8 col-sm-10 order-lg-1 order-1"
                                            data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                                            <div class="content section-heading-7">
                                                <h2>Homeopatía</h2>
                                                <p>Es un método terapéutico de base científica que persigue la curación
                                                    de las personas a través de determinadas sustancias de origen
                                                    natural.</p>
                                            </div>
                                        </div>
                                        <div class="offset-lg-1 col-lg-5 col-md-8 col-sm-10 position-relative order-lg-1 order-0"
                                            data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="app-image-position-l-13">
                                                <img src="{{ asset('assets_landing_page/image/temas/homeopatia.jpg') }}"
                                                    alt="" class="w-100 img_homeopatia">
                                            </div>
                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-4 section start -->
        <div class="content-area-l-13-2 position-relative overflow-hidden">
            <br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="border-bottom">
                            <div class="row justify-content-center">
                                <div class="col-xl-11">
                                    <div class="row align-items-center justify-content-center justify-content-lg-start">
                                        <div class="col-lg-6  col-md-8 col-sm-10" data-aos="fade-right"
                                            data-aos-duration="800" data-aos-once="true">
                                            <div class="app-image-position-l-13">
                                                <img src="{{ asset('assets_landing_page/image/temas/auriculoterapia.jpg') }}"
                                                    alt="" class="w-100 img_auriculoterapia">
                                            </div>
                                        </div>
                                        <div class="offset-lg-1 col-lg-5 col-md-8 col-sm-10 position-relative"
                                            data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="content section-heading-7">
                                                <h2>Auriculoterapia</h2>
                                                <p>La auriculoterapia es la terapia que estimula diferentes puntos
                                                    reflejos en el pabellón auricular para tratar y curar diversas
                                                    enfermedades.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-5 section start -->
        <div class="content-area-l-13-1 position-relative overflow-hidden">
            <br>
            <br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="border-bottom">
                            <div class="row justify-content-center">
                                <div class="col-xl-11">
                                    <div class="row align-items-center justify-content-center justify-content-lg-start">
                                        <div class="offset-lg-1 col-lg-5  col-md-8 col-sm-10 order-lg-1 order-1"
                                            data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                                            <div class="content section-heading-7">
                                                <h2>Conoterapia</h2>
                                                <p>La conoterapia es una técnica para la desintoxicación y limpieza de
                                                    oídos, nariz, garganta y senos paranasales.</p>
                                            </div>
                                        </div>
                                        <div class="offset-lg-1 col-lg-5 col-md-8 col-sm-10 position-relative order-lg-1 order-0"
                                            data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <div class="app-image-position-l-13">
                                                <img src="{{ asset('assets_landing_page/image/temas/conoterapia.jpg') }}"
                                                    alt="" class="w-100 img_conoterapia">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial section start -->
        <div class="testimonial-area-l-13 position-relative overflow-hidden z-index-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading-7 text-center">
                                    <h2>Utilizamos terapias y prácticas alternativas y complementarias a la medicina
                                        tradicional coadyuvando al organismo en su óptimo funcionamiento.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-shape-3"></div>
        </div>
        <!-- CTA-area start CONTACTO -->
        <div class="cta-area-l-13" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="container" id="contacto">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="row justify-content-center">
                            <div class="col-xxl-7 col-xl-8 text-center">
                                <div class="content">
                                    <span class="tagline">¿Tienes duda? ó ¿Quieres algún servicio?</span>
                                    <div class="section-heading-7 text-center">
                                        <h2>Contáctanos</h2>
                                    </div>
                                    <form id="contact-frm" action="{{ route('contacto.store') }}" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" id="token" value="{{ @csrf_token() }}">
                                        <div class="container">
                                            <div class="row">
                                            </div>
                                            <div class="row">
                                                <div id="res" ></div>
                                                <br>
                                                <h4 style="text-align:center contacto4">Completa los siguientes campos
                                                </h4>
                                            </div>
                                            <div class="row input-container">
                                                <div class="col-xs-12">
                                                    <div class="styled-input wide">
                                                        <input type="text" required name="nombre_completo" id="name"/>
                                                        <label>Nombre completo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="styled-input">
                                                        <input type="text" required name="email" id="email"/>
                                                        <label>Correo electrónico</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="styled-input" style="float:right;">
                                                        <input type="text" required name="numero" id="number" />
                                                        <label>Número de teléfono</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="styled-input wide">
                                                        <textarea required name="mensaje" id="msg"></textarea>
                                                        <label>Mensaje</label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="btn-lrg submit-btn">
                                                            <button id="btn" style="background: none; border: none; color: white;">Enviar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area -->
        <footer class="footer-l-13 text-center text-md-start">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-border-l-13"></div>
                    </div>
                </div>
                <div class="row footer-l-13-items">
                    <div class="col-md-3">
                        <div class="footer-logo-l-13">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('fotos_estaticas/logo_oficial_sin_fondo_en_orillas.png') }}"
                                    alt="logo" width="70" height="70"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-widget-l-13">
                            <ul class="pl-0 list-unstyled d-flex flex-wrap justify-content-center align-items-end ">
                                <li class="d-flex"><a href="#inicio">Inicio</a></li>
                                <li class="d-flex"><a href="#servicios">Servicio</a></li>
                                <li class="d-flex"><a href="#contacto">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="copyright-area-l-13 text-center text-md-right">
                            <p>&copy;
                                <script>
                                    document.write(new Date().getFullYear())
    
                                </script>, 
                                <a href="{{ route('home') }}">Centro Alternativo Homeopático</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Vendor Scripts -->
    <script src="{{ asset('assets_landing_page/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets_landing_page/plugins/aos/aos.min.js') }}"></script>
    <script src="{{ asset('assets_landing_page/plugins/menu/menu.js') }}"></script>
    <!-- Activation Script -->
    <script src="{{ asset('assets_landing_page/js/custom.js') }}"></script>

    {{-- Scripts para ajax --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#contact-frm").submit(function(e){
                e.preventDefault();
                let url = $(this).attr('action');
                $("#btn").attr('disabled', true);
                $.post(url, 
                {
                    '_token': $("#token").val(),
                    email: $("#email").val(),
                    number: $("#number").val(),
                    name: $("#name").val(),
                    message: $("#msg").val()
                }, 
                function (response) {
                    if(response.code == 400){
                        $("#btn").attr('disabled', false);
                        let error = '<div class="alert alert-danger">'+response.msg+'</div>';
                        $("#res").html(error);
                    }else if(response.code == 200){
                        $("#btn").attr('disabled', false);
                        let success = '<div class="alert alert-success">'+response.msg+'</div>';
                        $("#res").html(success);
                        setTimeout(function() {
                            $("#res").fadeOut(1500);
                        },10000);
                        document.getElementById("contact-frm").reset();
                    }
                });
                
                
            })
        })
    </script>
    {{-- Scripts para ajax --}}
</body>

</html>
