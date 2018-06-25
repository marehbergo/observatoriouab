<?php

$conexion = mysqli_connect("localhost","root","","observatoriouab");

$el_pais = $_POST['pais'];

$query = $conexion->query("SELECT DISTINCT polo_cadastroOferta FROM cadastrooferta WHERE curso_cadastroOferta = '$el_pais' ORDER BY polo_cadastroOferta");

echo '<option value="0">Selecione</option>';

while ( $row = $query->fetch_assoc() ){
	echo '<option value="' .utf8_encode($row['polo_cadastroOferta']). '">' .utf8_encode($row['polo_cadastroOferta']). '</option>' . "\n";                                        
}

