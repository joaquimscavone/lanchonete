<?php

$lista = [5,4,150,6,10,8.8, 9, 100, 99, 233];
$total = 0;
$x=0;
foreach($lista as $item){
    echo "Item ".(++$x)." - R$".$item."<br>";
   $total += $item;
}
echo "O total da compra é: R$ $total";
// echo "<pre>";
// var_dump($lista);