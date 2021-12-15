<?php

function soma ($valor1, $valor2)
{
    return $valor1 + $valor2;
}

function parOuImpar ($valor1)
{
    if ($valor1 % 2 == 0) {
        return "variavel é par";
    }else {
        return "variavel é impar";
    }
}

function contadorDeCaracteres ($string)
{
    return strlen($string);
}

?>