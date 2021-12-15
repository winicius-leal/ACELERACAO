<?php

$random = [4,6,9,7,8,6,2,5,4,8,6,3,5,4,1];

function parOuImpar($number)
{
    if ($number % 2 == 0) {
        return true;
    }
    throw new Exception("Número não válido para essa operação", 535);
}

try 
{
    foreach ($random as $value) 
    {
        echo parOuImpar($value);
    }
} catch (\Exception $erro) 
{
    echo $erro;
}


