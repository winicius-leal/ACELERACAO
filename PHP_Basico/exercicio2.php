<?php

$array1 = array("Curso"=>"PHP","Curso"=>"Java","Curso"=>"Python");
$array2 = array("Pessoa"=>"Joao","Pessoa"=>"Pedro","Pessoa"=>"Clara");
$array3 = array("Loja"=>"Centro","Loja"=>"Zona Sul","Loja"=>"Zona Oeste");

foreach ($array1 as $key => $value) {
    echo "<br>indicie:" . $key . " valor: ". $value;
}
foreach ($array2 as $key => $value) {
    echo "<br>indicie:" . $key . " valor: ". $value;
}
foreach ($array3 as $key => $value) {
    echo "<br>indicie:" . $key . " valor: ". $value;
}

?>