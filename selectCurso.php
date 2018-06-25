<?php

$conexion = mysqli_connect("localhost","root","","observatoriouab");

$el_ipes = $_POST['ipes'];

$query = $conexion->query("SELECT DISTINCT c.nome_cursos FROM cursos as c, ofertaativa as o, ipes as i WHERE o.curso_ofertaativa = c.id_cursos AND i.id_ipes = o.ipes_ofertaativa AND i.nome_ipes = '$el_ipes'");

echo '<option>Selecione um curso</option>';

$row_count = $query->num_rows;
if ( $row_count == 0 ){
	echo '<option>Nenhum curso ofertado</option>';
} else {
	while ( $row = $query->fetch_assoc() ){
		echo '<option value="' .utf8_encode($row['nome_cursos']). '">' .utf8_encode($row['nome_cursos']). '</option>' . "\n";
	}
}
