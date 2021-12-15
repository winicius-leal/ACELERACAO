<?php

$valor = 10;

function tabuada($valor)
{
    for ($i=0; $i <= 10; $i++) { 
        $resultado = $valor * $i;
        echo $valor . " X " . $i . " = " . $resultado . "<br>";
    }
}

if ($valor >= 0 && $valor <= 10) 
{
    tabuada($valor);
}else
{
    echo "valor invalido";
}



?>