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
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Nunito+Sans:wght@300;400;600&family=Open+Sans:wght@400;500&family=Roboto:ital,wght@0,300;1,300;1,400&display=swap" rel="stylesheet">


        <!-- <link rel="stylesheet" href="style-page.css" />-->
<style>

/*.dropdown a:hover {background-color: #ddd;}*/

.show {display: block;}
</style>
    </head>
    <body>
        <div class="container">
            <div class="logo-user">
                <div><img src="{{ asset('logo/LOGO-SEM.jpg') }}" alt="" width="80px"></div>
                <div class="user-auth">
                        <li class="dropdown"><a href="#" onclick="myFunction2()" class="user-name" role="button">Alfredo</a>
                        <div id="myDropdown2" class="dropdown-content2">
                            <a href="#home">Profile</a>
    <a href="#about">Logout</a>
                          </div>
                        </li>
                </div>
            </div>
            <nav class="menu-bar">
                <div class="logo">
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> </a>
                </div>
                <div class="menu-options">
                    <ul class="ul-list">
                        <!--<li><a href="{{ route('home') }}">Home</a></li> -->
                        <!-- Obras-->
                        <li class="dropdown"><a href="#" onclick="myFunction4()" class="dropbtn4" role="button">Obras</a>
                        <div id="myDropdown4" class="dropdown-content4">
                            <a href="#home">Registrar</a>
                            <a href="{{ route('home') }}">Consultar</a>
                            <!--<a href="#contact">Contact</a> -->
                          </div>
                        </li>
                        <!-- Materiales-->
                        <li class="dropdown"><a href="#" onclick="myFunction6()" class="dropbtn6" role="button">Materiales</a>
                        <div id="myDropdown6" class="dropdown-content6">
                            <a href="#home">Registrar</a>
                            <a href="{{ route('materiales') }}">Consultar</a>
                            <!--<a href="#contact">Contact</a> -->
                          </div>
                        </li>
                        <!-- OS Liquidadas-->
                        <li class="dropdown"><a href="#" onclick="myFunction7()" class="dropbtn7" role="button">OS Liquidadas</a>
                        <div id="myDropdown7" class="dropdown-content7">
                            <a href="#home">Registrar</a>
                            <a href="{{ route('tecnicos.todo') }}">Consultar</a>
                            <!--<a href="#contact">Contact</a> -->
                          </div>
                        </li>
                        <!-- Quejas-->
                        <li class="dropdown"><a href="#" onclick="myFunction8()" class="dropbtn8" role="button">Quejas</a>
                        <div id="myDropdown8" class="dropdown-content8">
                            <a href="#home">Registrar</a>
                            <a href="{{ route('tecnicos.todo') }}">Consultar</a>
                            <!--<a href="#contact">Contact</a> -->
                          </div>
                        </li>
                        <!--Apartado de Tecnicos -->
                        <li class="dropdown"><a href="#" onclick="myFunction()" class="dropbtn" role="button">Tecnicos</a>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#home">Registrar</a>
                            <a href="{{ route('tecnicos.todo') }}">Consultar</a>
                            <!--<a href="#contact">Contact</a> -->
                          </div>
                        </li>
                        <!-- Apartado de Cuadrillas -->
                        <li class="dropdown"><a href="#" onclick="myFunction3()" class="dropbtn3" role="button">Cuadrillas</a>
                        <div id="myDropdown3" class="dropdown-content3">
                            <a href="#home">Registrar</a>
                            <a href="{{ route('tecnicos.todo') }}">Consultar</a>
                            <!--<a href="#contact">Contact</a> -->
                          </div>
                        </li>
                        <!-- Apartado de administradores-->
                        <li class="dropdown"><a href="#" onclick="myFunction5()" class="dropbtn5" role="button">Adminsitradores</a>
                        <div id="myDropdown5" class="dropdown-content5">
                            <a href="#home">Registrar</a>
                            <a href="{{ route('tecnicos.todo') }}">Consultar</a>Consultar
                            <!--<a href="#contact">Contact</a> -->
                          </div>
                        </li>                        
                        <!-- usuario autenticado -->
                        
                    </ul>
                </div>
            </nav>
        </div>

@yield('contenido')

@yield('scripts')
<script type="text/javascript" src="{{ asset('scripts/font-icons.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/modal.js') }}"></script>

</body>

</html>
