<?php

require_once("autoload.php");

use \ClassesLista10SOLID\{Atendimento, PIX};

$atendimento = new Atendimento("222",1,1,3);

var_dump($atendimento);