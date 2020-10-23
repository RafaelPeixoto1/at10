<?php
 $carros = array(
 'Punto' => array(
 'cor'=> 'azul',
  'potencia'=>'1.0',
     'opcionais'=>'Ar Cond.'
 ),
     'Corsa'=> array(
     'cor'=> 'cinza',
    'potencia'=>'1.3',
     'opcionais'=>'MP3'
     ),
     'Golf'=> array(
     'cor'=> 'branco',
  'potencia'=>'1.0',
     'opcionais'=>'Metalica'
     )
 );
echo $carros['punto']['opcionais'];

foreach ($carros as $modelo=>$carro){
    echo '<h1>' . $modelo . '</h1>'
        foreach ($carro as $chave=>$detalhe){
            echo '<b>'.$chave . '</b>=' .$detalhe . '<br>';
            
        }
}
/*Cria um ciclo qu epercorre todos os
elementos de cada array e visualiza a respetiva chave(ou indíce) e o seu valor.*/
?>

