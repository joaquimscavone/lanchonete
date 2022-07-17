<?php

$n = $_GET['numero'];
$resultado = "$n é primo";
if($n <2){
    $resulado = "$n não é primo";
}
for($x=2; $x<$n; $x++){
    echo "$n%$x = ".$n%$x."<br/>";
    if($n%$x==0){
        $resultado = "$n não é primo";
        break;
    }
}
echo $resultado;
