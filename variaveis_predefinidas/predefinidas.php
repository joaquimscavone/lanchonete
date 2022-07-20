<?php

$teste = "azul";

myprint($_REQUEST);




function myprint($var){
    global $teste;
    echo $teste;
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}
