<?php

$arquivo = fopen("dados.txt","a+");

while ($i <= 700)
{
    if($i % 2 == 0)
    {
        fwrite($arquivo,$i."\n");
    }
    $i++;
}

echo "Arquivo dados.txt criado com sucesso!";
