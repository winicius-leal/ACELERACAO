<?php

$nomes = ["joao","jose","marcos","marcio","ana","tatiana","vanessa","max","junior","carol","teste","teste2","teste3","teste4","teste5"];

foreach ($nomes as $nome) {
    if(!is_dir($nome))
    {
        mkdir($nome);
        echo "diretorio".$nome."criado" . "<br>";
        $arquivo = fopen($nome."/".$nome."_candidato.txt","a+");
        echo "arquivo".$nome."/".$nome."_candidato.txt criado com sucesso". "<br>";
        fwrite($arquivo,$nome);
        echo $nome."escrito no arquivo txt " . "<br>";
        fclose($arquivo);
    }

    echo "diretprio{$nome} ja existe";

}