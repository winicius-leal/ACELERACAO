<?php

    $directorys = scandir("pastasDoExercicio49");

    $fileNames = [];

    foreach($directorys as $directory){

        if($directory != "." && $directory != ".."){
            
            $files = scandir("pastasDoExercicio49/".$directory);
            
            if(count($files) <= 2){
                echo "<br> pasta $directory está vazia !";
                rmdir("pastas/".$directory);
                echo "<br> Pasta $directory excluida";
            }

            foreach($files as $file){
                
                if($file != "." && $file != ".."){
                    array_push($fileNames, "pastasDoExercicio49/$directory/$file");
                }
            }
            
        }
    }
    
    echo "<br>";
    var_export($fileNames);
    echo "<br/>";
    
?>