<?php

if (!file_exists("alunos")) {
    mkdir("alunos",0777);
    $file = fopen("alunos/arquivo.txt","a");
    fclose($file);
}

if (!file_exists("professores")) {
    mkdir("professores",0777);
}

mkdir("alunos",0777);
    $file = fopen("alunos/arquivo.txt","a");
    fclose($file);
    
mkdir("professores",0777);

$directoryAlunos = scandir("alunos");
$directoryProfessores = scandir("professores");

function fileExistsInDirectory($directory)
{

    if (count($directory) < 3) {
        throw new Exception(" erro ", 1);
    }
    
}

try {
    
    fileExistsInDirectory($directoryAlunos);
    fileExistsInDirectory($directoryProfessores);

} catch (\Exception $erro) {
    $file = fopen('log.txt', 'w+');
    fwrite($file, "Arquivo: " . $erro->getFile().PHP_EOL);
    fwrite($file, "Linha: " . $erro->getLine().PHP_EOL);
    fclose($file);
}

?>