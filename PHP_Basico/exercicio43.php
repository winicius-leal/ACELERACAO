<?php


$diretorio = "imagens";

if(!is_dir($diretorio))
{
    mkdir($diretorio);
    echo"diretorio {$diretorio} criado";
}

$scan = scandir($diretorio);

foreach ($scan as $imagem) {
    
    if(!in_array($imagem, array(".","..")))
    {
       var_dump(pathinfo($imagem));
    }
}

