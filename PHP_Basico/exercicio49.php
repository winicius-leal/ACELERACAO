<?php

for ($i=0; $i < 150 ; $i++) { 
    $directoryName = "pastasDoExercicio49/".$i;
    mkdir($directoryName,0777,true);
    echo "<br> pasta".$i."criada com sucesso";

    if ($i % 2 != 0) {
        $fileName = "pastasDoExercicio49/".$i."/log-".date("d-m-y H:i:s").".txt";
        $file = fopen($fileName,"w+");
        fwrite($file, "arquivo criado em ".date("d-m-y H:i:s"));
        echo "<br> arquivo de log na pasta".$i."criado com sucesso!";
        print_r(pathinfo($fileName));
        fclose($file);
    }
}

ini_set("display_errors","1");
