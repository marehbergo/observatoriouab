<?php

$conexion = mysqli_connect("localhost","root","","observatoriouab");

$el_uf = $_POST['estado'];

$query = $conexion->query("SELECT nome_polos FROM polos WHERE uf_polos = '$el_uf' ORDER BY nome_polos");

echo '<option value="0">Selecione</option>';

while ( $row = $query->fetch_assoc() ){
	echo '<option value="' .utf8_encode($row['nome_polos']). '">' .utf8_encode($row['nome_polos']). '</option>' . "\n";
}
