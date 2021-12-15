<?php

$ceps = file_get_contents("https://viacep.com.br/ws/GO/Goiania/Domingos/json/");

$ceps = json_decode($ceps,true);

$arrayDeCeps = [];

for ($i=0; $i < 15 ; $i++) { 
    array_push($arrayDeCeps, str_replace("-","",$ceps[$i]["cep"]));
}

$ceps = [];

foreach ($arrayDeCeps as $cep) {
      
    $link = "https://viacep.com.br/ws/{$cep}/json/";


    $ch = curl_init($link);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $resposta = curl_exec($ch);

    $data = json_decode($resposta, true);

    array_push($ceps,$data);
    
}

curl_close($ch);


$cepsEmJSON = json_encode($ceps);

$file = fopen("ceps.txt", "w+");
fwrite($file, $cepsEmJSON);
fclose($file);
echo " arquivo gerado com sucesso";
