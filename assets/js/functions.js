$(function(){

    //lista de ipes
    $.post('assets/php/ipes.php').done(function(resposta){
        $('#ipes').html(respostas);
    });

    //lista de cursos
    $('#ipes').change(function(){
        var nome_ipes = $(this).val();

        //lista de cursos
        $.post('assets/php/cursos.php', {cada_ipes: nome_ipes}).done(function(resposta){
            $('#cursos').html(resposta);
        });
    });

    //lista de polos
    $('#cursos').change(function(){
        var curso = $(this).children('option:selected').html();
        alert('Lista de Polos com o curso ' + curso);
    });
})