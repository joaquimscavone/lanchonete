<?php

$idade = 19;
$especial = false;




if($idade>=85){
    echo "Senha Imediata";
}elseif($idade>=60 || $especial){
    echo "Senha Preferencial";
}elseif($idade<18){
    echo "Entrada proibida";
}
else{
    echo "Normal";
}

