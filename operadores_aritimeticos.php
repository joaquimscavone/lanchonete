<?php


$a = "11";
$b = 3;


echo '$a: ';
var_dump($a);
echo '<br>$b: ';
var_dump($b);
echo '<br>identidade (+$a): ';
var_dump(+$a);

echo '<br>Negação (-$b): ';
var_dump(-$b);
$adicao = $a+$b;
echo '<br>Adição $a+$b: ';
var_dump($adicao);
$subtracao = $a-$b;
echo '<br>Subitração $a-$b: ';
var_dump($subtracao);

$multiplicacao = $a*$b;
echo '<br>Multiplicacao $a*$b: ';
var_dump($multiplicacao);

$divisao = $a/$b;
echo '<br>Divisão $a/$b: ';
var_dump($divisao);

$resto = $a%$b;
echo '<br>Módulo $a%$b: ';
var_dump($resto);

$potencia = $a**$b;
echo '<br>Exponenciação $a**$b: ';
var_dump($potencia);