<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Ingrese El Nombre De La Pelicula', 'autocomplete'=>'off'])!!}
	
</div>
<div class="form-group">
	{!!Form::label('elencio','Elenco:')!!}
	{!!Form::text('cast', null,['class'=>'form-control', 'placeholder'=>'Ingrese El Elenco De La Pelicula', 'autocomplete'=>'off'])!!}
	
</div>
<div class="form-group">
	{!!Form::label('Direccion','Dirección:')!!}
	{!!Form::text('direction', null,['class'=>'form-control', 'placeholder'=>'Ingrese Al Director De La Pelicula', 'autocomplete'=>'off'])!!}
	
</div>
<div class="form-group">
	{!!Form::label('Duracion','Duración:')!!}
	{!!Form::text('duration', null,['class'=>'form-control', 'placeholder'=>'Ingrese La Duración De La Pelicula', 'autocomplete'=>'off'])!!}
	
</div>
<div class="form-group">
	{!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path',['class'=>'btn btn-primary'])!!}
	
</div>
<div class="form-group">
	{!!Form::label('Genero','Genero:')!!}
	{!!Form::select('genre_id', $genres)!!}
	
</div>
