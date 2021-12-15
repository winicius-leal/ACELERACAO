<?php

$numeros = [0,1,2,3,4,5,6,7,8,9];

foreach ($numeros as $key => $value) {

    if ($value % 2 == 0) {
        echo "numero par: " . $value . " no indicie: ". $key . "<br>";
    }
}

?>