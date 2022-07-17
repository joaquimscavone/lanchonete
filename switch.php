<?php

$codigo = "G";

// if($codigo == 1){
//     $cargo = "Gerente";
// }elseif($codigo==2){
//     $cargo = "Vendedor";
// }elseif($codigo==3){
//     $cargo = "Estoque";
// }else{
//     $cargo = "Funionário";
// }


switch ($codigo) {
    case "G":
        $cargo = "Gerente";
        echo "Ihuuuuuu estou virando um programador";
        break;
    case "V":
        $cargo = "Vendedor";
        break;
    case "E":
        $cargo = "Estoque";
        break;  
    default:
        $cargo = "Funionário";
        break;
}

echo $cargo;