@extends('layouts.admin2')

@include('alerts.successForm')

@section('content')
	
	<hr>
	<div class="listPaginate">
		<table class="table table-bordered"  >
		      <tr class="well">
		      <td>
		            <center><strong>Usuarios Registrados</strong></center>
		      </td>
		      </tr>
	    </table>

		<table class="table">
			<thead>
				<th>Nombre:</th>
				<th>Apellido:</th>
				<th>Correo:</th>
				<th>Operaciones:</th>
			</thead>

			@foreach($usuarios as $user)
			<tbody>
				<td>{{$user['first_name']}}</td>
				<td>{{$user['last_name']}}</td>
				<td>{{$user['email']}}</td>
				<td>{!!link_to_route('usuario.edit', $title='Editar', $patameters=$user->id, $attributes=['class'=>'btn btn-primary'])!!}
					<a href="{{url('usuario/destroy/')}}/{{$user->id}} "><button class="btn btn-danger">Eliminar</button></a>

		</td>
			</tbody>
			@endforeach

		</table>
		
		{!!$usuarios->render()!!}
	</div>
@endsection

@section('script')
	{!!Html::script('js/script3Paginacion.js')!!}
@endsection