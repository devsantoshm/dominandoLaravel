
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		.active{
			text-decoration: none;
			color: green;
		}

		.error{
			color: red;
			font-size: 12px;
		}
	</style>
	<title>Home</title>
</head>
<body>
	<header>
		<?php
			function activeMenu($url){
				return request()->is($url) ? 'active' : '';
			}
		?>
		<nav>
			<a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
			<a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos', 'Jorge') }}">Saludo</a>
			<a class="{{ activeMenu('contactanos') }}" href="{{ route('contactos') }}">Contacto</a>
		</nav>
	</header>
	@yield('contenido')
	<footer>Copyright {{ date('Y') }}</footer>
</body>
</html>