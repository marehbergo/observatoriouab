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
		$.post( 'buscaOferta.php', { ipes: el_ipes} ).done( function( respuesta ){
			$('#resultado').html( respuesta );
		});
    });
    
    // lista de UFs
	$.post( 'selectUF.php' ).done( function ( respuesta ){
		$( '#listauf' ).html( respuesta );
	});

	// lista de Cursos	
	$('#listauf').change(function()
	{
		var el_estado = $(this).val();
		
		// lista de cursos
		$.post( 'selectPolo.php', { estado: el_estado} ).done( function( respuesta ){
			$('#listapolos').html( respuesta );
		});
    });
    
    // lista de Cursos	
	$('#update').click(function()
	{
        var el_polo = $( '#listapolos' ).val();
        var el_vagas = $( '#vagas' ).val();
        var el_inicio = $( '#inicio' ).val(); 
		
		// atualizar cursos
		$.post( 'selectPolo.php', { polo: el_polo, vagas: el_vagas, inicio: el_inicio} ).done( function( respuesta ){
			$('#listapolos').html( respuesta );
		});
    });
})
