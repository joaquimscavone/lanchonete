<?php

session_name("LANCHONETE");
session_start();
require_once "variaveis.php";

if(!isset($_SESSION['mesas'])){
    $_SESSION['mesas'] = [];
}
$mesas = &$_SESSION['mesas'];

function addPedido(){

}
function getMesa($codmesa){
    global $mesas;
    if(array_key_exists($codmesa,$mesas)){
        return $mesas[$codmesa];
    }
    return null;

}

