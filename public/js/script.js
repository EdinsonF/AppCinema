function CerrarAlert(){

setTimeout(function() {
        $(".alert").fadeOut(1500);
    },3000);
	
}

$("#registro").click(function(){

	var dato=$("#genero").val();
	var route="http://localhost:8000/genero";
	var token=$("#token").val();

	$.ajax({
		url: 		route,
		headers: 	{'X-CSRF-TOKEN': token},
		type: 		'POST',
		dataType: 	'json',
		data: 		{genre:dato},

		success:function(){
			//$(location).attr('href','list');
			$("#mensajeSuccess").html('Genero Creado Correctamente');
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



