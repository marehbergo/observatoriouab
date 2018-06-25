<?php

$conexion = mysqli_connect("localhost","root","","observatoriouab");

$el_pais = $_POST['categoria'];

echo '<option value="">Selecione uma sub-categoria</option>';

switch($el_pais){
    case 'polo_oferta': 
        $query = $conexion->query("SELECT DISTINCT polo_oferta FROM oferta ORDER BY polo_oferta");

        //echo '<option value="0">Selecione</option>';
        
        while ( $row = $query->fetch_assoc() ){
        echo '<option value="' .utf8_encode($row['polo_oferta']). '">' .utf8_encode($row['polo_oferta']). '</option>' . "\n";
        }; 
        break;
    
    case 'ipes_oferta': 
        $query = $conexion->query("SELECT DISTINCT ipes_oferta FROM oferta ORDER BY ipes_oferta");

        //echo '<option value="0">Selecione</option>';
        
        while ( $row = $query->fetch_assoc() ){
        echo '<option value="' .utf8_encode($row['ipes_oferta']). '">' .utf8_encode($row['ipes_oferta']). '</option>' . "\n";
        }
        break;

    case 'curso_oferta': 
        $query = $conexion->query("SELECT DISTINCT curso_oferta FROM oferta ORDER BY curso_oferta");

        //echo '<option value="0">Selecione</option>';
        
        while ( $row = $query->fetch_assoc() ){
        echo '<option value="' .utf8_encode($row['curso_oferta']). '">' .utf8_encode($row['curso_oferta']). '</option>' . "\n";
        }
        break;
    
    default: "Opção inválida";
}