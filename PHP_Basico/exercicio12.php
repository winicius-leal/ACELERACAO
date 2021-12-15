<?php

$numerosAleatorios = [1,2,5,4,6,1,4,8,9,7,4,2,5,4,6,2];

$total = 0;

foreach ($numerosAleatorios as $key => $value) {
    
    $total = $total + $value;
    
}

$media = $total / count($numerosAleatorios);

print($media);
var_export($numerosAleatorios);

?>