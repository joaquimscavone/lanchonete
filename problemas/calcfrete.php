<?php

$kilometragem = $_GET['qtkm'];
$valorkm = $_GET['vlkm'];
$valordiaria = $_GET['vldia'];
$ndias = $_GET['qtdias'];


$total = $kilometragem*$valorkm+$valordiaria*$ndias;

echo "O valor do Frete é: $total";
