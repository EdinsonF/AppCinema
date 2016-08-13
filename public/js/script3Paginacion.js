$(document).on('click', '.pagination a', function(e){

	e.preventDefault();
	
	var page=$(this).attr('href').split('page=')[1];
	var route='http://localhost:8000/usuario/list';

	$.ajax({
		url: 	route,
		data: 	{page:page},
		type: 	'GET',
		dataType:'json',

		success: function(data){
			console.log(data);
			$('.listPaginate').html(data);

		}

		});
	

});