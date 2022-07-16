<?php
const MEDIA_APROVACAO = 6;
const MEDIA_RECUPERACAO = 4;
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];


$media = ($p1+$p2)/2;

$situacao = "Reprovado direto";

if($media>=MEDIA_APROVACAO){
    $situacao = "Aprovado direto";
}elseif($media>=MEDIA_RECUPERACAO){
    $media = ($p1+$p2+$p3)/3;
    if($media>=MEDIA_APROVACAO){
        $situacao = "Aprovado após recuperação.";
    }else{
        $situacao = "Reprovado após recuperação.";
    }
}

echo "O estudante está $situacao com média: $media";
