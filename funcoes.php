<?php

myprint("Joaquim", "red");
myprint("Scavone");
hr();
myprint(mypi());
$x = calc(7,5,'**');

myprint($x);


function hr(){
    echo "<hr>";
}

function myprint($texto, $color = "black")
{
    echo "<span style='color:$color;'>$texto<span>";
    echo "<br>";
}


function calc($numero1, $numero2, $operador)
{

    switch ($operador) {
        case "+":
            $resultado = $numero1 + $numero2;
            break;
        case "-":
            $resultado = $numero1 - $numero2;
            break;
        case "*":
            $resultado = $numero1 * $numero2;
            break;
        case "/":
            $resultado = $numero1 / $numero2;
            break;
        default:
            $resultado = ($numero1 >= $numero2) ? $numero1 : $numero2;
            break;
    }

    return $resultado;
}

function mypi(){
    return 3.14;
}