<?php
const MEDIA_APROVACAO = 6;
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];

$media = ($p1+$p2)/2;

$situacao = "Aprovado";

if($media<MEDIA_APROVACAO){
    $situacao = "Reprovado";
}

echo "O estudante está $situacao com média: $media";
