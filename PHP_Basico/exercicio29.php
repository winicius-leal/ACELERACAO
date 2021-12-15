<?php

$mesorregiao = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes/");

var_export(json_decode($mesorregiao,true));

?>