<?php

    $conexion = mysqli_connect("localhost","root","","observatoriouab");

    $ipes = $_POST['ipes'];
    $curso = $_POST['cursos'];

    $query = $conexion->query("SELECT p.nome_polos FROM ofertaativa as o, ipes as i, cursos as c, 
                                    polos as p, ofertaativapolos as pa WHERE o.curso_ofertaativa = c.id_cursos AND o.ipes_ofertaativa = i.id_ipes AND 
                                    pa.oferta_ofertaativapolos = o.id_ofertaativa AND pa.idpolo_ofertaativapolos = p.id_polos AND 
                                    c.nome_cursos = '$curso' AND i.nome_ipes = '$ipes' ORDER BY p.nome_polos");

    $row_count = $query->num_rows;
    if ( $row_count == 0 ){
        echo 'Nenhum polo com oferta ativa para o curso selecionado.';
    } else {
        $contadorzinho = 1;
        //echo '';
        while ( $row = $query->fetch_assoc() ){

            //echo utf8_encode($row['nome_polos']) . '</br>';
            //polo ' .utf8_encode($row['nome_polos']). '\n';
            $textao = '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title">
                <a class="accordion-toggle" href="#collapse-'.$contadorzinho.'" data-parent="#accordion" data-toggle="collapse">
                    ' .utf8_encode($row['nome_polos']) . '</a></h4></div>
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
        //echo '</div>';
    }
    