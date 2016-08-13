@extends('layouts.admin2')

	@section('content')

		@include('alerts.successForm')
		
		{!!Form::open(['route'=>'movie.store', 'method'=>'POST', 'files'=>'true'])!!}
		@include('movie.forms.peliculaForm')

		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}


	@endsection


