<?php

    $conexion = mysqli_connect("localhost","root","","observatoriouab");

    $ipes = $_POST['ipes'];

    $query = $conexion->query("SELECT * FROM oferta WHERE ipes_oferta = '$ipes'");

    $row_count = $query->num_rows;
    if ( $row_count == 0 ){
        echo 'Nenhuma oferta cadastrada.';
    } else {
        while ( $row = $query->fetch_assoc() ){
            echo '<div class="row">
                    <div class="col-md-6">Curso: ' .utf8_encode($row['curso_oferta']) .'</div>
                    <div class="col-md-6">Polo: ' .utf8_encode($row['polo_oferta']) . '</div>
                </div>
                <div class="row">                    
                    <div class="col-md-2">Tipo: ' .utf8_encode($row['tipo_oferta']) . '</div>
                    <div class="col-md-2">Chamada: ' .utf8_encode($row['chamada_oferta']) . '</div>
                    <div class="col-md-2">Início: ' .utf8_encode($row['inicio_oferta']) . '</div>
                    <div class="col-md-2">Formação: ' .utf8_encode($row['formacao_oferta']) . '</div>
                    <div class="col-md-2">Vagas: ' .utf8_encode($row['vagas_oferta']) . '</div>
                    
                    <div class="col-md-1">
                        <button type="button" data-id="'.utf8_encode($row['id_oferta']).'" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button>
                    </div>
                    <div class="col-md-1">
                        <button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                    </div>
                </div><hr>';
        }
    }
    
    /*<div class="row">
                    <div class="col-md-6">Curso: ' .utf8_encode($row['curso_oferta']) .'</div>
                    <div class="col-md-6">Polo: ' .utf8_encode($row['polo_oferta']) . '</div>
                </div>
                <div class="row">                    
                    <div class="col-md-2">Tipo: ' .utf8_encode($row['tipo_oferta']) . '</div>
                    <div class="col-md-2">Chamada: ' .utf8_encode($row['chamada_oferta']) . '</div>
                    <div class="col-md-2">Início: ' .utf8_encode($row['inicio_oferta']) . '</div>
                    <div class="col-md-2">Formação: ' .utf8_encode($row['formacao_oferta']) . '</div>
                    <div class="col-md-2">Vagas: ' .utf8_encode($row['vagas_oferta']) . '</div>
                    
                    <div class="col-md-1">
                        <a href="" src="edit.php?">
                    </div>
                    <div class="col-md-1">
                        <button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                    </div>
                </div><hr>
    
    
    <div class="col-md-1">
        <button type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button>
    </div>
    <div class="col-md-1">
        <button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
    </div>*/
