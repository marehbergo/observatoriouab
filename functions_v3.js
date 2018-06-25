$(function(){

	// lista de Paises	
	$('#filtro1').change(function()
	{
		var el_continente = $(this).val();
		
		// Lista de Paises
		$.post( 'filtroOferta.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#filtro2' ).html( respuesta );
		});
	});

})
