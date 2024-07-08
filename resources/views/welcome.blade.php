<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} " >

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HCD</title>

    
   
    
    <link href="{{ asset('jquery-confirm-v3.3.4/css/jquery-confirm.css') }}"  />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- datatable -->
    <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTables.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('css/buttons.dataTables.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/searchbuilder/1.7.1/css/searchBuilder.dataTables.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fancybox/fancybox.css')}}" />
    <link href="{{ asset('fontawesome/css/all.css') }}"/>

    <!-- AOS animacion-->
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />

    <!-- Styles -->
    <style>
      body {
        font-family: 'Montserrat';
      }

      #fondo_encabezado {
        background-color: #2BACB1;
        font-family: 'Montserrat';
      }
      #fondo_cuerpo{
        background-color: #72CEC9;
        font-family: 'Montserrat';
        
      }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
 

        .dropdown-toggle:not(:focus) {
            outline: 0;
        }

        .bd-placeholder-img-head {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-image: url("{{ asset('img/frente.png') }}");
            /*background-repeat: no-repeat;*/
            background-repeat: no-repeat;
            font-family: 'Montserrat';
            background-position: center;
            background-size: cover;
           
        }
        .bd-placeholder-img-head-1 {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-image: url("{{ asset('img/frente.png') }}");
            background-repeat: no-repeat;
            font-family: 'Montserrat';
            background-position: center;
            background-size: cover;
           
        }

        .bd-placeholder-img-head-2 {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-image: url("{{ asset('img/frente.png') }}");
            background-repeat: no-repeat;
            font-family: 'Montserrat';
            background-position: center;
            background-size: cover;
           
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            font-family: 'Montserrat';
            /*background-image: url('http://localhost:8000/img/logo.png');*/
        }

      

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
          
           
        }
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #2ce1f9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #2ce1f9;
            --bs-btn-hover-border-color: #2ce1f9;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #2ce1f9;
            --bs-btn-active-border-color: #2ce1f9;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

 



    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{asset('js/jquery-3.6.4.min.js')}}"></script>

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >



    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}">
     
</head>

<body id="fondo_encabezado">
    <!-- botones del tema -->
  
    <main id="fondo_encabezado">
        @if(Auth::check())
        <nav class="navbar navbar-expand-lg bg-body-secondary"  >
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" style="color: purple;"  width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
              </svg> Tools</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Opción Activa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Opción desactivada</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Desplegable
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Acción 1</a></li>
                      <li><a class="dropdown-item" href="#">Acción 2</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Acción 3 </a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Desactivado</a>
                  </li>
                </ul>
                <form class="d-flex">
                    @if(Auth::check())
                    <b> 
                        <button type="button" class="btn btn-light position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg"  style="color: green;"  width="16" height="16" fill="currentColor" class="bi bi-envelope-check" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
                                
                            </svg>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              15
                              <span class="visually-hidden">unread messages</span>
                            </span>
                          </button>
                        
                       
                      Bienvenido, {{ Auth::user()->name}}  ({{session('perfil')}})
                      </b>
                    <br>
                   
                 @endif
                       
                </form>
              </div>
            </div>
          </nav>
          @endif
        <!-- Menu principal-->
        <header class="p-3 mb-3 "  >
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/"
                        class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                        <div class="mx-auto p-2" style="width: 200px;">
                          <img src="{{ asset('img/logo.png') }}" class="responsive" alt="" width="120px">
                        </div>
                        
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 " >
                        <li><a href="{{ route('inicio') }}" class="nav-link px-2 text-light"  >INICIO</a></li>
                        <li><a href="{{ route('firmantes') }}" class="nav-link px-2 link-body-emphasis text-light">INSTITUCIONAL</a></li>
                        <li><a href="{{ route('proyectos') }}" class="nav-link px-2 link-body-emphasis text-light">TRANSPARENCIA</a></li>
                    </ul>
                    <!-- REDES SOCIALES --->
                    <form class="col-sm-auto col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          
                            <button type="button" class="btn text-light" onclick="alert('Construccion');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                  </svg>
                            </button>
                            <button type="button" class="btn text-light" onclick="alert('Construccion');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                  </svg>
                            </button>
                            <button type="button" class="btn text-light" onclick="alert('Construccion');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                  </svg>
                            </button>
                            <button type="button" class="btn text-light" onclick="alert('Construccion');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                  </svg>
                            </button>
                          </div>
                      <!--  <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">-->
                    </form>

                    <div class="dropdown text-end">
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            @if(Auth::check())
                            <li>
                                <a class="nav-item nav-link link-body-emphasis" href="{{route('perfil',['id'=>Auth::user()->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                      <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                                      <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
                                    </svg>
                                  Perfil</a>
                            </li>
                            <li>
                                <a  class="nav-item nav-link link-body-danger"  style="color: red" href="{{ route('logout') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                    </svg>
                                    Cerrar</a>
                            </li>
                            @else
                            <li>
                                  <img src="{{ asset('/img/transmitiendo.png')}}" class="responsive">
                              <!--  <a  class="btn btn-secondary"   style="color: rgb(246, 247, 246)" href="{{ route('acceso_login') }}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                                      </svg>
                                    Ingresar</a>-->
                            </li>
                            @endif
                            
                        </ul>
                      
                    </div>
                </div>
        </header>

        <div style="width: 100%;" id="fondo_cuerpo">
        @yield('content')
        </div>
        

        <!-- FOOTER -->
      <!-- data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500"-->
        <div style="background-color: #E0E0E0; width: 100%;" >
        <div class="container">
            <footer class="py-5" >
                <div class="row" >

                <div class="col-md-3 col-lg-3" style=" border-right: 4px solid #19537E;">
                    <img src="{{asset('img/logo_footer.png')}}">
                </div>
                
                <div class="col-md-3 col-lg-3" style=" border-right: 4px solid #19537E;">
                  
                    <h5 style="color: #19537E;">ACCESOS DIRECTOS</h5>
                    <ul class=" flex-column"  style="color: #19537E;">  
                        <li class="nav-item mb-2" ><a href="#"
                                class="nav-link p-0 " style="color: #19537E;">Institucional</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 " style="color: #19537E;">Proyectos</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 "  style="color: #19537E;">Comisiones</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 " style="color: #19537E;">Sesiones</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 " style="color: #19537E;">Noticias</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 " style="color: #19537E;">En vivo</a></li>
                    </ul>
                
                </div>
                
                <div class="col-md-3 col-lg-3" style=" border-right: 4px solid #19537E;">
                
                    <h5 style="color: #19537E;">SITIOS DE INTERÉS</h5>
                    <ul class=" flex-column"  style="color: #19537E; font-size: 11px;">  
                      <li class="nav-item mb-2" ><a href="#"
                              class="nav-link p-0 " style="color: #19537E;">AR - Firma Digital</a></li>
                      <li class="nav-item mb-2"><a href="#"
                              class="nav-link p-0 " style="color: #19537E;">Sistemas internos</a></li>
                      <li class="nav-item mb-2"><a href="#"
                              class="nav-link p-0 "  style="color: #19537E;">Parlamento Patagónico</a></li>
                      <li class="nav-item mb-2"><a href="#"
                              class="nav-link p-0 " style="color: #19537E;">Sindicato del Personal y Empleados Legislativos</a></li>
                      <li class="nav-item mb-2"><a href="#"
                              class="nav-link p-0 " style="color: #19537E;">(A.P.E.L)</a></li>
                      <li class="nav-item mb-2"><a href="#"
                              class="nav-link p-0 " style="color: #19537E;">Parlamento del Mercosur</a></li>
                      <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 " style="color: #19537E;">Boletín Oﬁcial de la República Argentina</a></li>
                      <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 " style="color: #19537E;">Boletín Oﬁcial de la Provincia</a></li>                    
                      <li class="nav-item mb-2"><a href="#"
                                  class="nav-link p-0 " style="color: #19537E;">Sistema Argentino de Información Jurídica (SAIJ)</a></li> 
                      <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 " style="color: #19537E;">Biblioteca del Congreso</a></li> 
                  </ul>
               

                </div>
                
                <div class="col-md-3 col-lg-3">
                  
                  
                        <h5 style="color: #19537E;">NUESTRA REDES</h5>
                        <!-- REDES SOCIALES --->
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      
                        <button type="button" class="btn" onclick="alert('Construccion');">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #19537E;" width="26" height="26" fill="#19537E" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                              </svg>
                        </button>
                        <button type="button" class="btn" onclick="alert('Construccion');">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #19537E;" width="26" height="26" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                              </svg>
                        </button>
                        <button type="button" class="btn" onclick="alert('Construccion');">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #19537E;" width="26" height="26" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                              </svg>
                        </button>
                        <button type="button" class="btn" onclick="alert('Construccion');">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: #19537E;" width="26" height="26" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                              </svg>
                        </button>
                      </div>
                  <!--  <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">-->
                </form><BR>
                <h5 style="color: #19537E;">CONTACTO</h5>
                  <p style="color: #19537E;">NANCHO169@GMAIL.COM</p>
                </div>





                   

                  
                    

                   
                </div>

               
            </footer>
        </div>
      </div>
    </main>


    <!-- Bootstrap JS y Popper.js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}">
    </script>

    <!-- Fancybox -->
    <script src="{{ asset('fancybox/fancybox.js') }}"></script>

    
    
   

    <script src="{{asset('js/chart.js')}}"></script>
    <script src="{{ asset('jquery-confirm-v3.3.4/js/jquery-confirm.js') }}"></script>
    
    <!-- datatable-->
    <script src="{{asset('js/jszip.js')}}"></script>
    <script src="{{asset('js/pdfmake.js')}}"></script>
    <script src="{{asset('js/vfs_fonts.js')}}"></script>
    <script src="{{asset('js/dataTables.js')}}"></script>
    <script src="{{asset('js/dataTables.buttons.js')}}"></script>
    <script src="{{asset('js/buttons.colVis.js')}}"></script>
    <script src="{{asset('js/buttons.html5.js')}}"></script>
    <script src="{{asset('js/buttons.print.js')}}"></script>
    <script src="https://cdn.datatables.net/searchbuilder/1.7.1/js/dataTables.searchBuilder.js"></script>
    <!-- fontawesome -->
    <script src="{{ asset('fontawesome/js/all.js') }}"></script>
    
    <!-- AOS animacion-->
    <script src="{{asset('js/aos.js')}}"></script>
    
    <script>
      AOS.init();
    </script>

@stack('js')
</body>

</html>
