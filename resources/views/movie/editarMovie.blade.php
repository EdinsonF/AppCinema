@extends('layouts.admin2')

	@section('content')

		{!!Form::model($movie,['route'=> ['movie.update', $movie->id], 'method'=>'PUT', 'files'=>'true'])!!}
		@include('movie.forms.peliculaForm')

		{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}


	@endsection
