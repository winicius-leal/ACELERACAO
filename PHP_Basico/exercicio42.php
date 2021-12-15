<?php

$arquivo = "paises.txt";
$dados = fopen($arquivo, "r");
$ler = fread($dados, filesize($arquivo));

$novoArquivo = "lista.csv";
$dados2 = fopen($novoArquivo, "a+");
fwrite($dados2, $ler);
fclose($dados2);

?>