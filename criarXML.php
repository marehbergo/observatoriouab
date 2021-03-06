<?php
  $connection1 = mysqli_connect("localhost","root","","observatoriouab");
  $query1 = $connection1->query("SELECT `name`, `lat`, `lng` FROM `markers` ORDER BY `name`");
    
  // Deleta a versão anterior do XML
  unlink('markers3.xml');

  // Gera o arquivo XML
  $_open  =       fopen('markers3.xml', "w");

  $_xml   =      '<?xml version="1.0" encoding="utf-8"?>' . PHP_EOL;
  $_xml   .=      '<markers>' . PHP_EOL;

  while($row1 = @mysqli_fetch_assoc($query1)){
    
    $_xml   .=      '    <marker name="' . utf8_encode($row1['name']) . '" lat="' . utf8_encode($row1['lat']) . '" lng="' . utf8_encode($row1['lng']) . '"';

    $polo = $row1['name'];

    $connection2 = mysqli_connect("localhost","root","","observatoriouab");
    $query2 = $connection2->query("SELECT ipes_oferta, curso_oferta FROM oferta WHERE polo_oferta='$polo' ORDER BY polo_oferta");

    $row_cnt = $query2->num_rows;
    if ( $row_cnt == 0 ){
      $_xml   .=      ' cursos="Nenhum curso ofertado" type="N" num="' . $row_cnt . '" />' . PHP_EOL;
    } else {
      $_xml   .=      ' cursos="';

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
    }
  }
  $_xml   .=      '</markers>';

  fwrite($_open, $_xml);
  fclose($_open);