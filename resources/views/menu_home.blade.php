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
<style>

/*.dropdown a:hover {background-color: #ddd;}*/

.show {display: block;}
</style>
    </head>
    <body>
        <div class="container">
            <nav class="menu-bar">
                <div class="logo">
                    <img src="{{ asset('logo/LOGO-SEM.jpg') }}" alt="" width="80px">
                </div>
                <div class="menu-options">
                    <ul class="ul-list">
                        <li><a href="{{ route('home') }}">Home</a></li>

                        <!--Apartado de Tecnicos -->
                        <li class="dropdown"><a href="#" onclick="myFunction()" class="dropbtn" role="button">Tecnicos</a>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#home">Registrar</a>
                            <a href="{{ route('tecnicos.todo') }}">Consultar</a>
                            <!--<a href="#contact">Contact</a> -->
                          </div>
                        </li>
                    <!-- usuario autenticado -->
                        <li class="dropdown2"><a href="#" onclick="myFunction2()" class="dropbtn2" role="button">Alfredo</a>
                        <div id="myDropdown2" class="dropdown-content2">
                            <a href="#home">Profile</a>
                            <a href="#about">Logout</a>
                          </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>

@yield('contenido')

@yield('scripts')
<script charset="utf-8">

    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function myFunction2(){

    document.getElementById("myDropdown2").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>

</html>
