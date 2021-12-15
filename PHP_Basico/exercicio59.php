<?php

function divisao($number1,$number2)
{
    if ($number1 == 0 || $number2 == 0) {
        throw new Exception("não é possivel fazer divisão por 0", 523);
    }

    return $result = ($number1 / $number2);
}

try {
    echo divisao(10,0);
    echo divisao(10,2);
} catch (\Exception $erro) {
    echo $erro;
}