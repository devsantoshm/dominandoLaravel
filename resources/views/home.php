<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h1>Home</h1>
	<header>
		<nav>
			<a href="<?php echo route('home'); ?>">Inicio</a>
			<a href="<?php echo route('saludos', 'Jorge') ?>">Saludo</a>
			<a href="<?php echo route('contactos') ?>">Contacto</a>
		</nav>
	</header>
</body>
</html>