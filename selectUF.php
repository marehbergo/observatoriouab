<?php

$conexion = mysqli_connect("localhost","root","","observatoriouab");

$query = $conexion->query("SELECT DISTINCT uf_polos FROM polos");

echo '<option value="0">Selecione um estado ... </option>';

while ( $row = $query->fetch_assoc() ){
	echo '<option value="' .utf8_encode($row['uf_polos']). '">' .utf8_encode($row['uf_polos']). '</option>' . "\n";
}