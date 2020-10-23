<?php
$scores = array('vermelho','azul','verde','amarelo');
echo $scores[0];
echo $scores[1];
echo $scores[2];
echo $scores[3];

$a=array('Tesla',2000,3.0,'BMW','Fiat');
echo $a[1];

$a[1]=2020;
echo $a[1];

$a[]="Vila das Aves";
$a[]="AEDAH";
foreach ($a as $item ){
    echo $item .'<br>';
}
?>