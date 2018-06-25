<?php

    $conexion = mysqli_connect("localhost","root","","observatoriouab");

    $uf = $_POST['estado'];
    $polo = $_POST['polo'];

    $query = $conexion->query("SELECT i.nome_ipes, c.nome_cursos FROM ofertaativa as o, ipes as i, cursos as c, polos as p, ofertaativapolos as pa 
                                WHERE o.curso_ofertaativa = c.id_cursos AND o.ipes_ofertaativa = i.id_ipes AND 
                                pa.oferta_ofertaativapolos = o.id_ofertaativa AND pa.idpolo_ofertaativapolos = p.id_polos AND p.uf_polos = '$uf' 
                                AND p.nome_polos = '$polo' ORDER BY i.nome_ipes");

    $row_count = $query->num_rows;
    if ( $row_count == 0 ){
        echo 'Nenhum curso com oferta ativa neste polo.';
    } else {
        $contadorzinho = 1;
        while ( $row = $query->fetch_assoc() ){
                $textao = '<div class="panel panel-default"><div class="panel-heading"><span class="panel-title">
                    <a class="accordion-toggle" href="#collapse-'.$contadorzinho.'" data-parent="#accordion" data-toggle="collapse">
                    <div class="row"><div class="col-md-3">
                        ' .utf8_encode($row['nome_ipes']) . '</div>
                        <div class="col-md-9">' .utf8_encode($row['nome_cursos']) . '</div></div></a></span></div>
                        <div id="collapse-'.$contadorzinho.'" class="accordion-body collapse">
                            <div class="panel-body">
                                <h3 class="no-margin no-padding">...</h3>
                                <p>...</p>
                            </div>
                        </div>
                    </div></div>';
    
                echo $textao;
                $contadorzinho++;
        }
    }
    