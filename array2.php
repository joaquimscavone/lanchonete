<?php

$lista = array(
    "descricao" => "Patinho Bovino",
    "tipo" => "Kg",
    "valor_un" => "33.5",
    "quantidade" => "6.5", 
);
$lista['total'] = $lista['valor_un']*$lista['quantidade'];
$lista["estoque"] = 55;
// unset($lista["descricao"]);
echo "<pre>";
var_dump($lista);