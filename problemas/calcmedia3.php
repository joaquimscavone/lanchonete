<?php
const MEDIA_APROVACAO = 6;
const FERQ_APROVACAO = 75;
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$freq = $_GET['freq'];


$media = ($p1+$p2)/2;

$situacao = "Reprovado";

if($media>=MEDIA_APROVACAO && $freq >= FERQ_APROVACAO){
    $situacao = "Aprovado";
}

echo "O estudante está $situacao com média: $media e frequencia de: $freq%";
