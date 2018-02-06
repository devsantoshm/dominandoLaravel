@extends('layout')
@section('contenido')
	<h1>contactos</h1>
	<h2>Escríbeme</h2>
	<form method="post" action="contacto">
		<p><label for="nombre">
			Nombre
			<input type="text" name="nombre">
		</label></p>
		<p><label for="email">
			Email
			<input type="email" name="email">
		</label></p>
		<p><label for="mensaje">
			Mensaje
			<textarea name="mensaje"></textarea>
		</label></p>
		<input type="submit" value="Enviar">
	</form>
	<hr>
@endsection
	
