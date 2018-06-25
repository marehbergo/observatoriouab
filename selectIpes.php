<?php

$conexion = mysqli_connect("localhost","root","","observatoriouab");

$query = $conexion->query("SELECT nome_ipes FROM ipes");

echo '<option value="0">Selecione uma IPES ... </option>';

while ( $row = $query->fetch_assoc() ){
	echo '<option value="' .utf8_encode($row['nome_ipes']). '">' .utf8_encode($row['nome_ipes']). '</option>' . "\n";
}