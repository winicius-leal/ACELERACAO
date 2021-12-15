<?php

spl_autoload_register(
    
    
    function($nomeDaClasse){
        //require_once str_replace('\\', "/", __DIR__ . "/ClassesLista10SOLID/" . $nomeDaClasse) . '.php';
        //require_once str_replace('\\', "/", __DIR__ . DIRECTORY_SEPARATOR . $nomeDaClasse) . '.php';
        
        $caminho = str_replace('\\', "/", __DIR__ . DIRECTORY_SEPARATOR . $nomeDaClasse) . '.php';

        //$caminho = __DIR__ . DIRECTORY_SEPARATOR .$nomeDaClasse . '.php';

        
        //var_dump($caminho);
        
        if (file_exists($caminho) ) {
            //echo "<br> caminho existe";
            require_once($caminho);
        }else{
            //echo "<br> caminho nao existe";
        }
    }
    
);