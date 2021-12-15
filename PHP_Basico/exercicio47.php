<?php

$data = file_get_contents("https://random-data-api.com/api/business_credit_card/random_card");

$dataCard = json_decode($data, true);

$file = fopen("cartao.txt","w+");

fwrite($file,implode(" ", $dataCard));

fclose($file);

echo "dados do cartao gravados no arquivo cartao.txt <br>";

$arquivoParaLeitura = "cartao.txt";

$dados = fopen($arquivoParaLeitura, "r");

$ler = fread($dados, filesize($arquivoParaLeitura));

var_dump(json_encode(explode(" ", $ler)));

fclose($dados);






