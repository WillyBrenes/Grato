<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sistema GratoCR" />
    <meta name="theme-color" content="#E23636">
    <meta name="description" content="Plataforma oficial para la pyme GratoCR" />
    <meta property="og:description" content="Plataforma oficial para la pyme GratoCR" />
    <meta name="keywords" content="PYME, gratocr, pastas, sistema, artesanales" />
    <meta property="og:url" content="sistema.gratocr.com" />
    <meta name="robots" content="noindex" />
    <meta name="robots" content="nofollow" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta property="og:image" content="/Grato/resources/media/Logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/Grato/resources/media/Logo.png" />
    <title> @yield('titulo') - GratoCR </title>
    {!! htmlScriptTagJsApi([
        'action' => 'homepage',
        'callback_then' => 'callbackThen',
        'callback_catch' => 'callbackCatch'
    ]) !!}
    {{-- Micromodal / Jquery / Bootstrap.JS / iScroll / drawer--}}
    <script src="/Grato/resources/js/jquery.js"></script>
    <script src="/Grato/resources/js/micromodal.js"></script>
    <script src="/Grato/resources/js/ajax.js"></script>
    <script src="/Grato/resources/js/bootstrap.bundle.min.js"></script>
    <script src="/Grato/resources/js/chartist.min.js"></script>
    <script src="/Grato/resources/js/iscroll.min.js"></script>
    <script src="/Grato/resources/js/drawer.min.js"></script>
    {{-- Fuente de iconos --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <!-- Libreria Menú -->
    <link href="{{ asset('css/drawer.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chartist.min.css') }}" rel="stylesheet">

</head>

<body class="drawer drawer--left drawer--sidebar" style="background-color:#E6E6E6 ;">
    @extends('layouts/menu')
    <main role="main" class="drawer-contents" style="background-color:#E6E6E6 ;">
        <nav class="navbar navbar-dark bg-white nav">
            <div class="col-12 text-center">
                <img src="/Grato/resources/media/Logo.png" alt="" class="img-fluid justify-content-center"
                    style="width: 6rem;">
                <div style="right: 0;top: 1.3rem;" class="d-flex btn position-absolute shadow-">

                </div>
            </div>
        </nav>
        <div class="row mr-2 ml-2 mt-3">
            <div class="col-md-8 mb-2">

                <div class="" style="border-radius: 0.5rem;">
                    <div class="">
                        @yield('contenido')
                    </div>
                </div>

                <div class="" style="border-radius: 0.5rem;">
                    <div class="">
                        @yield('contenido-2')
                    </div>

                </div>

                <div class="mt-3" style="border-radius: 0.5rem;">
                    <div class="">
                        @yield('contenido-3')
                    </div>

                </div>

                <div class="mt-3" style="border-radius: 0.5rem;">
                    <div class="">
                        @yield('contenido-4')
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow" style="border-radius: 0.5rem;">
                    <div class="card-body text-center">

                        <h4>{{date('h:i a')}}</h4>

                        <p class="text-gray">{{date('d')}} de {{date('M')}} del {{date('Y')}}</p>

                        <h5 class="text-center mb-3 text-oscuro">Acciones Rápidas</h5>
                        <div class=" mt-2">
                            <a class="shadow-sm btn btn-block btn-outline-dark border-0" href="Pedidos.html">
                                <div class="row ">
                                    <p class="m-0 col-8 text-left"><i class="fa fa-plus mr-2"></i> Alistar pedido</p>

                                </div>
                            </a>
                        </div>
                        <div class=" mt-2">
                            <a class="shadow-sm btn btn-block btn-outline-dark border-0" href="Reportes.html">
                                <div class="row ">
                                    <p class="m-0 col-8 text-left"><i class="fa fa-eye mr-2"></i>Ver los pedidos hechos
                                    </p>

                                </div>
                            </a>
                        </div>
                        <div class=" mt-2">
                            <a class="shadow-sm btn btn-block btn-outline-dark border-0" href="MateriaPrima.html">
                                <div class="row">
                                    <p class="m-0 col-8 text-left"><i class="fa fa-clipboard-list mr-2"></i>Ingresar
                                        materia prima
                                    </p>

                                </div>
                            </a>
                        </div>
                        <div class=" mt-2">
                            <a class="shadow-sm btn btn-block btn-outline-dark border-0" href="Equipo.html">
                                <div class="row ">
                                    <p class="m-0 col-8 text-left"><i class="fa fa-cog mr-2"></i>Ingresar nuevo equipo
                                    </p>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-2 mb-3">
                <div class="card shadow" style="border-radius: 0.5rem;">
                    <div class="card-body text-center text-oscuro">
                        Copyright © {{ date('Y') }} Grato Pastas Artesanales
                    </div>
                </div>
            </div>

        </div>

    </main>

    <script type="text/javascript">
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
    
        $("#EnviarDatos").click(function(e){
          e.preventDefault(); //Evitar recargar la pagina
          var dataString = $('#Crear').serialize();
          $.ajax({
            type:'POST',
            url:'Total',
            data: dataString,
            cache: false,
          processData: false,
            success:function(response){
      
              if(response){
                $("#Lista").load(" #Lista");
    
                }
              }
            });
        });
      
    </script>
</body>

</html>