<?php
$primeiraNota = 7;
$segundaNota = 4;
$terceiraNota = 3;
$peso1 = 2;
$peso2 = 3;
$peso3 = 5;


$nomeCompleto = "Winicius Leal";

$mediaPonderada = ((($primeiraNota * $peso1) + ($segundaNota*$peso2) + ($terceiraNota*$peso3)) / ($peso1+$peso2+$peso3));

echo "nome do Aluno: ". $nomeCompleto . " Media Ponderada Final: ". $mediaPonderada;

?>