<?php

$n1 = ["nome1"=>9,"nome2"=>2,"nome3"=>7,"nome4"=>5,"nome5"=>6,"nome6"=>8,"nome7"=>4,"nome8"=>3,"nome9"=>2,"nome10"=>5,"nome11"=>1,"nome12"=>2,"nome13"=>3,"nome14"=>8,"nome15"=>9,"nome16"=>8];
$n2 = ["nome1"=>6,"nome2"=>5,"nome3"=>4,"nome4"=>8,"nome5"=>6,"nome6"=>2,"nome7"=>0,"nome8"=>1,"nome9"=>2,"nome10"=>6,"nome11"=>1,"nome12"=>9,"nome13"=>6,"nome14"=>0,"nome15"=>4,"nome16"=>9];

function verificaSePassou($value1,$value2)
{
    $result = $value1 + $value2; 

    if ( $result >= 14 && $value1 >= 7 && $value2 >= 7) 
    {
        return true;
    }

    return false;
}

foreach ($n1 as $key => $value) {
    
    $aprovado = verificaSePassou($n1[$key],$n2[$key]);

    if ($aprovado) {
        $file = fopen("aluno-aprovados.txt","a");
        fwrite($file, $key);
        fclose($file);
    }
}

echo "arquivo gerado com sucesso!";

