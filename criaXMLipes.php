<?php
  $connection1 = mysqli_connect("localhost","root","","observatoriouab");
  $query1 = $connection1->query("SELECT `sigla_ipes_br`, `lat_ipes_br`, `lng_ipes_br`, `cursos_ipes_br`, `polos_ipes_br`, `ofertas_ipes_br`, `alunos_ipes_br`, `notconcluintes_ipes_br` FROM `ipes_br` ORDER BY `sigla_ipes_br`");
    
  // Deleta a versão anterior do XML
  //unlink('markersipesofertas.xml');

  // Gera o arquivo XML
  $_open  =       fopen('markersipesofertas.xml', "w");

  $_xml   =      '<?xml version="1.0" encoding="utf-8"?>' . PHP_EOL;
  $_xml   .=      '<markers>' . PHP_EOL;

  while($row1 = @mysqli_fetch_assoc($query1)){
    
    $_xml   .=      '    <marker name="' . utf8_encode($row1['sigla_ipes_br']) . '" lat="' . utf8_encode($row1['lat_ipes_br']) . '" lng="' . utf8_encode($row1['lng_ipes_br']) . '" cursos="Cursos ativos: ' . utf8_encode($row1['cursos_ipes_br']) . '" polos="Polos ativos: ' . utf8_encode($row1['polos_ipes_br']) . '" ofertas="Ofertas ativas: ' . utf8_encode($row1['ofertas_ipes_br']) . '" type="I" />'. PHP_EOL;;

    /*
    $polo = $row1['name'];

    $connection2 = mysqli_connect("localhost","root","","observatorio");
    $query2 = $connection2->query("SELECT ipes_oferta, curso_oferta FROM oferta WHERE polo_oferta='$polo' ORDER BY polo_oferta");

    $row_cnt = $query2->num_rows;
    if ( $row_cnt == 0 ){
      $_xml   .=      ' address="Nenhum curso ofertado" type="N" num="' . $row_cnt . '" />' . PHP_EOL;
    } else {
      $_xml   .=      ' address="';

      $i = 0;
      while($row2 = @mysqli_fetch_assoc($query2)){
        $i += 1;

        if ($i == $row_cnt){
          $_xml   .=      '' . utf8_encode($row2['ipes_oferta']) . ' - ' . utf8_encode($row2['curso_oferta']) . '" ';
        } else {
          $_xml   .=      '' . utf8_encode($row2['ipes_oferta']) . ' - ' . utf8_encode($row2['curso_oferta']) . ', ';
        }
      }
      $_xml   .=      'type="O" num="' . $row_cnt . '" />'. PHP_EOL; 
    }*/
  }
  $_xml   .=      '</markers>';

  fwrite($_open, $_xml);
  fclose($_open);