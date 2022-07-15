<?php

$valor = $_GET['valor'];
$tercas = $_GET['tercas'];
$sextas = $_GET['sextas'];


$total = $valor*($tercas+$sextas);

echo "O valor total da diária é: R\$ $total reais";
