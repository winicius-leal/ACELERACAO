<?php

$localidades = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/distritos/");


var_export(json_decode($localidades, false));
//var_dump(json_decode($localidades, false));

?>