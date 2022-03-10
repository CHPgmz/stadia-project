<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Index</title>
  @yield('estilos')
	<link rel="stylesheet" href="{{ asset('../../css/style.css') }}" />
	<!--<script src="https://kit.fontawesome.com/2025855716.js" crossorigin="anonymous"></script>-->
	<script src="{{ asset('scripts/jquery/2025855716.js') }}"></script>
	<script src="{{ asset('scripts/jquery/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('scripts/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
	<!--<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Nunito+Sans:wght@300;400;600&family=Open+Sans:wght@400;500&family=Roboto:ital,wght@0,300;1,300;1,400&display=swap"
		rel="stylesheet">
</head>

<body class="container" id="id-cont">
	<header class="header" id="id-head">
		<div>
			<a id="ocultar-dash" class="btn-mu" role="button">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div>
			<p><i class="fa fa-user-o" aria-hidden="true" style="color: white; font-size: 18px"></i><span class="aut-user">Jose Alfredo</span></p>
		</div>
	</header>

	<nav class="navbar" id="id-nav">
		<div class="logo">
			<img src="{{ asset('logo/LOG.png') }}" alt="" width="90%" height="70px" class="img-logo" style="margin: auto">
		</div>
		<div class="dashboard">
			<ul class="dashboard-options">

				<li class="dropdown">
					<a href="{{ route('home') }}" class="dropbtn" role="button"><i class="fas fa-home"></i>Home</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropbtn" role="button" id="home"><i class="fa fa-table"></i> Obras</a>
					<div id="myDropdown" class="dropdown-content">
						<a href="#">Registrar</a>
						<a href="{{ route('obras.todo') }}">Consultar</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropbtn" role="button" id="mtr"><i class="fas fa-tools"></i>Materiales</a>
					<div id="myDropdown2" class="dropdown-content">
						<a href="{{ route('materiales.form') }}">Registrar</a>
						<a href="{{ route('materiales') }}">Consultar</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropbtn" role="button" id="osl"><i class="fas fa-clipboard-check"></i>OS Liquidadas</a>
					<div id="myDropdown3" class="dropdown-content">
						<a href="{{ route('liquidadas.form') }}">Registrar</a>
						<a href="{{ route('os-liquidadas') }}">Consultar</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropbtn" role="button" id="qjas"><i class="fas fa-clipboard-list"></i>Quejas</a>
					<div id="myDropdown4" class="dropdown-content">
						<a href="#">Registrar</a>
						<a href="{{ route('quejas.todo') }}">Consultar</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropbtn" role="button" id="cdr"><i class="fa fa-table"></i>Cuadrillas</a>
					<div id="myDropdown5" class="dropdown-content">
						<a href="#">Registrar</a>
						<a href="{{ route('cuadrillas.todo') }}">Consultar</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropbtn" role="button" id="tcn"><i class="fas fa-users"></i>Tecnicos</a>
					<div id="myDropdown6" class="dropdown-content">
						<a href="#">Registrar</a>
						<a href="{{ route('tecnicos.todo') }}">Consultar</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropbtn" role="button" id="adm"><i class="fas fa-users-cog"></i>Administradores</a>
					<div id="myDropdown7" class="dropdown-content">
						<a href="#">Registrar</a>
						<a href="{{ route('admins.todo') }}">Consultar</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="{{ route('home') }}" class="dropbtn" role="button"><i class="fas fa-sign-out"></i></i></i>Logout</a>
				</li>
			</ul>
		</div>
		<!--<div style="position: absolute;top: 95%">
			<h3>Logout</h3>
		</div>-->
	</nav>

	<aside class="sidebar">
    @yield('contenido')

	</aside>
	<!--<footer class="footer">FOOTER</footer>-->

	<script src="{{ asset('scripts/nav-dashboard.js') }}"></script>
	<script src="{{ asset('scripts/jquery-demo.js') }}"></script>
	<script src="{{ asset('scripts/sweetalert2.all.min.js') }}"></script>
	<!--<script src="https://kit.fontawesome.com/2ead8049d9.js" crossorigin="anonymous"></script>-->
  @yield('scripts')

  
  <script type="text/javascript" src="{{ asset('scripts/modal.js') }}"></script>
</body>

</html>





















