@extends('layouts.admin2')


@section('content')

	@include('genero.form.modal')

	@include('alerts.mensajeJS')

	<hr>
		<table class="table table-bordered"  >
		      <tr class="well">
		      <td>
		            <center><strong> Generos Registrados</strong></center>
		      </td>
		      </tr>
	    </table>
	
	<div class="listPaginate">
		<table class="table">
			<thead>
				<th>Código:</th>
				<th>Nombre Genero:</th>
				<th>Operaciones:</th>
				
			</thead>

		
			<tbody id="registros">			
			</tbody>
		
		</table>
{!!$genero->render()!!}	
	</div>

	

@endsection

@section('script')
	{!!Html::script('js/script2.js')!!}
	
	
@endsection
	


