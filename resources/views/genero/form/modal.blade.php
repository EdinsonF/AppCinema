<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel"><strong>Actualizar Genero</strong></h4>
			</div>
			@include('alerts.msjErrorJS')
			<div class="modal-body">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<input type="hidden" name="" id="id">
				
				@include('genero.form.genero')
				
			</div>
			<div class="modal-footer">
				{!!link_to('#', $title='Editar', $attributes=['id'=>'editar', 'class'=>'btn btn-primary'], $secure=null)!!}
			</div>
			
		</div>
		
	</div>
	
</div>