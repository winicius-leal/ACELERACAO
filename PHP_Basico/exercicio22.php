<?php

$array1 = [4,5,2,4];
$array2 = [3,3,45,1];
$array3 = [3,4,3,56,2];
$array4 = [5,77,2,5];
$array5 = [3,7,4,65];

foreach($array1 as $key => $value)
{
    echo "<br> indicie: ".$key." valor: ".$value; 
}

echo "<br>";
var_export($array1);

foreach($array2 as $key => $value)
{
    echo "<br> indicie: ".$key." valor: ".$value; 
}

echo "<br>";
var_export($array2);

foreach($array3 as $key => $value)
{
    echo "<br> indicie: ".$key." valor: ".$value;
}

echo "<br>";
var_export($array3);

foreach($array4 as $key => $value)
{
    echo "<br> indicie: ".$key." valor: ".$value;  
}

echo "<br>";
var_export($array4);

foreach($array5 as $key => $value)
{
    echo "<br> indicie: ".$key." valor: ".$value;  
}

echo "<br>";
var_export($array5);






?>