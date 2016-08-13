$(document).ready(function(){
	Cargar();
	
});


function CerrarAlert(){

setTimeout(function() {
        $(".alert").fadeOut(1500);
    },3000);
	
}

function Cargar(page){
	
	
	var route="http://localhost:8000/genero/list";


	$.ajax({
		url: 	route,
		data: 	{page:page},
		type: 	'GET',
		dataType:'json',

		success: function(data){
		//var Variable = JSON.parse(result);
		//var result = $.trim(data);

		console.log(data.genero);

		if(page!=null){
			$('.listPaginate').html(data.vista);
		}
		
		var datos=$("#registros");
		$("#registros").empty();
		
		

		$(data.genero.data).each(function(key,value){

			datos.append('<tr><td>'+value.id+'</td><td>'+value.genre+'</td><td>'
						+'<button value="'+value.id+'" onclick="montrarModal(this)" class="btn btn-primary">Editar</button>'
						+'<button value="'+value.id+'" onclick="Eliminar(this)" class="btn btn-danger">Eliminar</button></td></tr>');
			//alert(value.genre);
		});


		}
		//$('.paginacion').html('<?php {!!result.genero->render()!!} ?>');

	});
}

$(document).on('click', '.pagination a', function(e){

	e.preventDefault();

	var page=$(this).attr('href').split('page=')[1];
	Cargar(page);
});
	


function montrarModal(boton){
	

	var route="http://localhost:8000/genero/"+boton.value+"/edit";

	$.get(route, function(result){
		$("#genero").val(result.genre);
		$("#id").val(result.id);

	$("#myModal").modal("show");
	});

	
}


$("#editar").click(function(){

	var id=$("#id").val();
	var dato=$("#genero").val();
	var route="http://localhost:8000/genero/"+id+"";
	var token=$("#token").val();

	$.ajax({
		url: 		route,
		headers: 	{'X-CSRF-TOKEN': token},
		type: 		'PUT',
		dataType: 	'json',
		data: 		{genre:dato},

		success:function(){
			
			Cargar();
			$("#myModal").modal("hide");
			$("#mensajeSuccess").html('Genero Actualizado Correctamente');
			$("#msj-success").fadeIn();
			CerrarAlert();
		},
		error:function(msj){
			$("#mensajeDanger").html(msj.responseJSON.genre);
			$("#msj-danger").fadeIn();
			CerrarAlert();
		}		
	});
});


function Eliminar(boton){

	var route="http://localhost:8000/genero/destroy/"+boton.value+"";

	$.get(route, function(result){
		Cargar();
		$("#mensajeSuccess").html('Genero Eliminado Correctamente');
		$("#msj-success").fadeIn();
		CerrarAlert();
	
	});

}