@extends('layouts.admin2')

@section('content')
	
	@include('alerts.validarForm')

	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
	
		@include('usuario.forms.user')

	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}



	<!-- FORMULARIO NORMAL, TAMBIEN FUNCIONA

	<form action="">
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" class="form-control" name="">
		</div>
		<div class="form-group">
			<label for="">Correo</label>
			<input type="email" class="form-control" name="">
		</div>
		<div class="form-group">
			<label for="">Contraseña</label>
			<input type="password" class="form-control" name="">
		</div>
		<button class="btn btn-primary">Registrar</button>
	</form> -->

@stop