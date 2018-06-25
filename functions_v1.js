$(function(){

	// Lista de Continentes
	$.post( 'continentes.php' ).done( function(respuesta)
	{
		$( '#continentes' ).html( respuesta );
	});

	// lista de Paises	
	$('#continentes').change(function()
	{
		var el_continente = $(this).val();
		
		// Lista de Paises
		$.post( 'paises.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#paises' ).html( respuesta );
		});
	});
	
	// lista de Ciudades	
	$('#paises').change(function()
	{
		var el_pais = $(this).val();
		
		// Lista de Ciudades
		$.post( 'cidades.php', { pais: el_pais} ).done( function( respuesta )
		{
			$( '#cidades' ).html( respuesta );
		});
	});

	// lista de ofertas	
	$('#cidades').change(function()
	{
		var el_polo = $(this).val();
		
		// Lista de Paises
		$.post( 'listaPolos.php', { polo: el_polo} ).done( function( respuesta )
		{
			$( '#ofertas' ).html( respuesta );
		});
	});

	// lista de buscas	
	$('#filtro1').change(function()
	{
		var el_categoria = $(this).val();
		
		// Lista de Paises
		$.post( 'filtroOferta.php', { categoria: el_categoria} ).done( function( respuesta )
		{
			$( '#filtro2' ).html( respuesta );
		});
	});

	// lista de ofertas	completa
	$('#filtro2').change(function()
	{
		var el_categoria = $( '#filtro1' ).val();
		var el_busca = $(this).val();

		// Lista de Paises
		$.post( 'listaCadastro.php', { busca: el_busca, categoria: el_categoria} ).done( function( respuesta )
		{
			$( '#cadastradas ' ).html( respuesta );
		});
	});

})
