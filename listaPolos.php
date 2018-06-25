<?php

    $conexion = mysqli_connect("localhost","root","","observatoriouab");

    $el_curso = $_POST['polo'];

    $query = $conexion->query("SELECT curso_cadastroOferta, ipes_cadastroOferta FROM cadastroOferta WHERE  polo_cadastroOferta = '$el_curso' ORDER BY ipes_cadastroOferta");

    while ( $row = $query->fetch_assoc() )
    {
        echo '<div class="col-md-3"><p>' .utf8_encode($row['ipes_cadastroOferta']) . '</p></div>
        <div class="col-md-9"><p>' .utf8_encode($row['curso_cadastroOferta']) . '</p></div>' . "\n";
    }