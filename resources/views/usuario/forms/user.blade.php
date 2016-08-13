<div class="form-group">
		{!!Form::label('Nombre:')!!}
		{!!Form::text('first_name',null,['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Ingrese El Nombre De Usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Apellido:')!!}
		{!!Form::text('last_name',null,['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Ingrese El Nombre De Usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Ingrese El Correo'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'Ingrese La Contraseña'])!!}
	</div>