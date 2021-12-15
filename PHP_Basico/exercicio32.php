<?php

require_once("cardapioFunctions.php");

$salgados = ["coxinha","pastel"];
$acompanhamentos = ["doce de leite", "capuccino","sorvete","cerveja","chiclete","cosumel","chocolate"];
$refrigerantes = ["coca","tubaina","fanta"];



echo verificaQuantidadeDeItens($salgados);
echo verificaQuantidadeDeItens($acompanhamentos);
echo verificaQuantidadeDeItens($refrigerantes);