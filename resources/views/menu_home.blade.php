<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/style-page.css') }}">
        @yield('estilos')
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="style-page.css" />-->
    </head>
    <body>
        <div class="container">
            <nav class="menu-bar">
                <div class="logo">
                    <img src="{{ asset('logo/LOGO-SEM.jpg') }}" alt="" width="80px">
                </div>
                <div class="menu-options">
                    <li class="menu-sub">
                        <a href="#" role="button">OS Liquidadas</a>
                        <ul class="menu-list">
                            <li><a href="">Registrar</a></li>
                            <li><a href="">Consultar</a></li>
                            <li><a href="">Quejas</a></li>
                        </ul>
                    </li>

                    <li class="menu-sub-two">
                        <a href="#" role="button">Obras</a>
                        <ul class="menu-list">
                            <li><a href="">Registrar</a></li>
                            <li><a href="">Consultar</a></li>
                        </ul>
                    </li>
                    <!-- <a href="#">OS Liquidadas</a> -->
                    <a href="#">Cuadrillas</a>
                    <a href="#">Administradores</a>
                    <a href="#">Alfredo</a>
                    <!--<a href="#">Cerrar sesion</a> -->
                </div>
            </nav>
        </div>

@yield('contenido')

@yield('scripts')
</body>
</html>
