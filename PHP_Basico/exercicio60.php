<?php

    $file1 = fopen('arquivo1.txt', 'w');
    $file2 = fopen('arquivo2.txt', 'w');
    $file3 = fopen('arquivo3.txt', 'w');


    fwrite($file1, file_get_contents("https://jsonplaceholder.typicode.com/photos"));
    fwrite($file2, file_get_contents("https://jsonplaceholder.typicode.com/photos"));
    fwrite($file3, file_get_contents("https://jsonplaceholder.typicode.com/photos"));

    fclose($file1);
    fclose($file2);
    fclose($file3);

    unlink('arquivo2.txt');

    function abrirArquivo($filename){ 
        
        $file = fopen($filename, 'r');

        if(!$file){
            throw new Exception('Arquivo não encontrado');
        }

        $array = file($filename);

        var_export($array);
        
    }

    try{
        abrirArquivo('arquivo1.txt');
        abrirArquivo('arquivo2.txt');

    }catch(Exception $e){
        echo $e->getMessage();
    }
?>