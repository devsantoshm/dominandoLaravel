@extends('layout')
@section('contenido')
	<h1>Editar mensaje</h1>
	@if (session()->has('info'))
		<h3>{{ session('info') }}</h3>
	@else
		<form method="post" action="{{ route('mensajes.update', $message->id) }}">
			{!! method_field('PUT') !!}
			{!! csrf_field() !!}
			<p><label for="nombre">
				Nombre
				<input type="text" name="nombre" value="{{ $message->nombre }}">
				{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
			</label></p>
			<p><label for="email">
				Email
				<input type="text" name="email" value="{{ $message->email }}">
				{!! $errors->first('email', '<span class=error>:message</span>') !!}
			</label></p>
			<p><label for="mensaje">
				Mensaje
				<textarea name="mensaje">{{ $message->mensaje }}</textarea>
				{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
			</label></p>
			<input type="submit" value="Enviar">
		</form>
	@endif
	<hr>
@endsection