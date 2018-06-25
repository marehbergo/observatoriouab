$(function(){

	// lista de IPES
	$.post( 'selectUF.php' ).done( function ( respuesta ){
		$( '#estados' ).html( respuesta );
	});

	// lista de Cursos	
	$('#estados').change(function()
	{
		var el_estado = $(this).val();
		
		// lista de cursos
		$.post( 'selectPolo.php', { estado: el_estado} ).done( function( respuesta ){
			$('#polo').html( respuesta );
		});
	});

	// lista de ofertas	
	$('#polo').change(function()
	{
		var el_estado = $( '#estados' ).val();
		var el_polo = $(this).val();
		
		// lista de cursos
		$.post( 'buscaCurso.php', { estado: el_estado, polo: el_polo} ).done( function( respuesta ){
			$('#curso').html( respuesta );
		});
	});

})
