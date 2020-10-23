<?php

$minha_multa['carro'] = 'Pálio';
$minha_multa['valor'] = 178.00;
$minha_multa['carro'] .= 'ED 1.0';
$minha_multa['valor'] += 20;
foreach($minha_multa as $chave =>$minha_multa)
{
    echo $chave . '<br>' .$minha_multa . '<br>';
}
/*var_dump($minha_multa);*/
echo '<br>';
$comidas[] = 'Lasanha';
$comidas[] = 'Pizza';
$comidas[] = 'Macarrão';
$comidas[1] = 'Pizza Calabreza';
foreach($comidas as $chave =>$comidas)
{
    echo $chave . '<br>' .$comidas . '<br>';
/*var_dump($comidas);*/
?>