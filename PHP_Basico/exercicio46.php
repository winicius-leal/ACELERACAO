<?php

$clientes = array("Joaquim" => "28,m", "Maria" => "41,f", "Pedro" => "18,m", "Joana Silva" => "58,f", "João Lopes" =>
"21,m", "Joana" => "15,f", "Fernanda" => "25,f");

//var_dump($clientes);

$feminino = [];
$masculino = [];

foreach ($clientes as $key=>$valor) {
    
    echo "<br> NOME: ". $key;
    $separacao = explode(",",$valor);
    echo " IDADE: " .$separacao[0];
    echo " GENERO: " .$separacao[1];
    
    $separacao = explode(",",$valor);

    if ($separacao[1] == "f") {
        array_push($feminino, $key);
    }

    if ($separacao[1] == "m") {
        array_push($masculino, $key);
    }

}

echo "<br>";
var_export($feminino);
echo "<br>";
var_export($masculino);