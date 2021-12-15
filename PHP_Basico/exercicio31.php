<?php
$json = file_get_contents("https://rickandmortyapi.com/api");

$array = json_decode($json, true);

if(empty($array))
{
    echo "você não pode continuar";
    exit;
}

if(is_array($array))
{
    var_dump($array);
}else{
    echo "variavel não é um array";
}

?>