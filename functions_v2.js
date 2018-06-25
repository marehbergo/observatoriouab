$(function(){

	// lista de IPES
	$.post( 'selectIpes.php' ).done( function ( respuesta ){
		$( '#ipes' ).html( respuesta );
	});

	// lista de Cursos	
	$('#ipes').change(function()
	{
		var el_ipes = $(this).val();
		
		// lista de cursos
		$.post( 'selectCurso.php', { ipes: el_ipes} ).done( function( respuesta ){
			$('#cursos').html( respuesta );
		});
	});

	// lista de ofertas	
	$('#cursos').change(function()
	{
		var el_ipes = $( '#ipes' ).val();
		var el_cursos = $(this).val();
		
		// lista de cursos
		$.post( 'buscaPolo.php', { ipes: el_ipes, cursos: el_cursos} ).done( function( respuesta ){
			$('#polos').html( respuesta );
		});
	});
})
