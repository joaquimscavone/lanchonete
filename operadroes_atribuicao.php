<?php

$x = 5;

$z = ($y=8)+5;

echo "\$x: $x </br>";
echo "\$y: $y </br>";
echo "\$z: $z </br>";

$x += 3; //$x = $x + 3;
$y-=5; //$y= $y -5;

echo "\$x: $x </br>";
echo "\$y: $y </br>";

$z = 5 + ++$x;

$y = $z--; //$z = $z-1;


echo "\$x: $x </br>";
echo "\$z: $z </br>";
echo "\$z: $y </br>";

$nome = "Joaquim";

echo "Bom dia $nome <br>";
echo "olá ".$nome."<br>";

$frase = "Bom dia";
$frase.=" $nome";
echo "$frase<br>";