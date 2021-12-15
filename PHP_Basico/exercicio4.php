<?php

$carros = ["gol","voyage","sandero","golf"];
$motos = ["z1000","fan","hornet","fazer"];

foreach ($carros as $key => $value) {
    echo  "<br>" . $key . $value;
}
foreach ($motos as $key => $value) {
    echo  "<br>" . $key . $value;
}

echo "<br>";
var_export(array_merge($carros, $motos));

?>