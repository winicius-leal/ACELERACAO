<?php

$dados = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");

$paises = json_decode($dados,true);


foreach ($paises as $valor) {
    $lista = [];
    //echo $key;
    foreach ($valor as $nome) {
        array_push($lista,$nome);
    }

    $file = fopen("paises.txt","a+");
    fwrite($file, implode(",", $lista));
    fclose($file);
}
