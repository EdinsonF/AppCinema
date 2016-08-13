@extends('layouts.admin2')

@section('content')
		
		@include('alerts.successForm')

		<table class="table table-bordered"  >
		      <tr class="well">
		      <td>
		            <center><strong> Peliculas Registradas</strong></center>
		      </td>
		      </tr>
	    </table>
	
	
		<table class="table">
			<thead>
				<th>Nombre:</th>
				<th>Genero:</th>
				<th>Direcciones:</th>
				<th>Duración:</th>
				<th>Poster:</th>
				<th>Operaciones:</th>
				
			</thead>

			@foreach ($movies as $movie)
				<tbody>	
				<td>{{ $movie->name }}</td>
				<td>{{ $movie->genre }}</td>
				<td>{{ $movie->direction }}</td>
				<td>{{ $movie->duration }}</td>
				<td><img src="movies/{{ $movie->path }}" alt="" style="width:100px"></td>
				<td>
					{!!link_to_route('movie.edit', $title='Editar', $patameters=$movie->id, $attributes=['class'=>'btn btn-primary', 'href'=>'#ModalEdit' , 'data-toggle'=>'modal'])!!}
					<a href="movie/destroy/{{ $movie->id }}"><button type="submit" value="" class="btn btn-danger">Eliminar</button>
				</td>		
			</tbody>
			@endforeach 
				

			
		
		</table>
@stop