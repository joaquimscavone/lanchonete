<?php

// $teste = "azul";
// session_start();
// $_SESSION['usuario'] = 'joaquim';
myprint($_COOKIE);

setcookie('nome','Samuel',time()+60*60*24*30);


function myprint($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}
