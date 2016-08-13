@extends('layouts.admin2')

@section('content')

	@include('alerts.validarForm')
	
	{!!Form::model($user,['route'=>['usuario.update', $user->id], 'method'=>'PUT'])!!}

		@include('usuario.forms.user')	
		
	{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}


@stop	