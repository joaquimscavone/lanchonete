<?php

$a = true;

$b = false;

$c = 5;

$t = "Samuel";

$z = 5;


$x = ($c<$z and $t == "Samuel"); // todas forem verdadeiras;

$x = ($c>$z || !$b); // vai ser verdadeiro se pelo menos uma for verdadeira;

$x = ($c==$z xor $a ); // vai ser verdadeiro se apenas um for verdadeiro
echo "\$x: ";
var_dump($x);
echo "</br>";