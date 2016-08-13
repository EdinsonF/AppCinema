@extends('layouts.admin2')

@section('content')
	{!!Form::open()!!}
		
	@include('alerts.mensajeJS')
	@include('alerts.msjErrorJS')

		<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
		@include('genero.form.genero')

		{!!link_to('#', $title='Registrar', $attributes=['id'=>'registro', 'class'=>'btn btn-primary'], $secure=null)!!}
	{!!Form::close()!!}
		
@endsection

@section('script')
	{!!Html::script('js/script.js')!!}
@endsection