<?php

$n1 = 9;
$n2 = 6;


$aux = $n1;
$n1 = $n2;
$n2 = $aux;


$quant = 0;
$cont = $n1;

while($cont<=$n2){
    if($cont%2==0){
        $quant++;
    }
    $cont++;
}

echo "existem $quant número pares entre $n1 e $n2";

// $x = 100;
// while($x>=0){
//     if($x == 50){
//         $x--;
//         continue;
//     }
//     echo $x--;
//     echo "<br>";
// }


// do{
//     echo $x--;
//     echo "<br>";
// }while($x>=0);