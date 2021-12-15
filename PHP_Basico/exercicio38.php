<?php

$inicial = 50.50;
$final = 80.50;

function conversaoParaCelsius(float $temperatura):float
{
    return ($temperatura - 32) / 1.80;
}

var_dump(conversaoParaCelsius($inicial));
var_dump(conversaoParaCelsius($final));
