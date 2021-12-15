<?php

require_once("exercicio1.php");

$despesaDia1DoMes1 = new DespesaDia(1,1,200);
$despesaDia2DoMes1 = new DespesaDia(1,2,400);
$despesaDia3DoMes1 = new DespesaDia(1,3,100);
$despesaDia4DoMes1 = new DespesaDia(1,4,800);

$despesaDia1DoMes2 = new DespesaDia(2,1,1000);


$minhasDespesas = new MyExpenses([$despesaDia1DoMes1,$despesaDia2DoMes1,$despesaDia3DoMes1, $despesaDia4DoMes1, $despesaDia1DoMes2],"061111122233","Winicius");

echo "Total De Despesas no Mes 1: ";
var_export($minhasDespesas->totalizaMes(1)->getValor());

echo "<br>Total De Despesas no Mes 2: ";
var_export($minhasDespesas->totalizaMes(2)->getValor());

//var_dump($minhasDespesas->totalizaMes(1));
//var_dump($minhasDespesas->totalizaMes(2));
var_dump($minhasDespesas->gravaInfos($despesa3));
//var_dump($minhasDespesas);
