@extends('layouts.principal')

	

@section('content')

	@include('alerts.errorForm')
	@include('alerts.validarForm')
	<div class="header">
	    <div class="top-header">
	        <div class="logo">
	            <a href="index.html"><img src="images/logo.png" alt="" /></a>
	            <p>Movie Theater</p>
	        </div>
	        
	        <div class="clearfix"></div>
	    </div>
		

		<div class="header-info">
		    <h1>BIG HERO 6</h1>
		    {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
		    	<div class="form-group">
		    		{!!Form::label('correo','Correo:')!!}
		    		{!!Form::email('email', null,['class'=>'form-control', 'paceholder'=>'Ingresar Correo', 'autocomplete'=>'off'])!!}
		    	</div>
		    	<div class="form-group">
		    		{!!Form::label('contrasena','Contraseña:')!!}
		    		{!!Form::password('password',['class'=>'form-control', 'paceholder'=>'Ingresar Contraseña', 'autocomplete'=>'off'])!!}
		    	</div>
		    		{!!Form::submit('Entar',['class'=>'btn btn-primary'])!!}
		    {!!Form::close()!!}
		    {!! link_to('password/email', $title='Olvidaste tu contraseña?', $attributes=null,$secure=null)!!}
		    
		</div>

	</div>
	        
	<div class="review-slider">
	    <ul id="flexiselDemo1">
		    <li><img src="images/r1.jpg" alt=""/></li>
		    <li><img src="images/r2.jpg" alt=""/></li>
		    <li><img src="images/r3.jpg" alt=""/></li>
		    <li><img src="images/r4.jpg" alt=""/></li>
		    <li><img src="images/r5.jpg" alt=""/></li>
		    <li><img src="images/r6.jpg" alt=""/></li>
		</ul>
	</div>

@stop