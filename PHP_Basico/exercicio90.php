<?php

class LogsSingleton{

    private static $instance = null;

    private function __construct(){
        //prevenir que outros obj usem o new
    }
    public static function getInstance():LogsSingleton{
        if(self::$instance == null){
           self::$instance = new LogsSingleton();
        }
        return self::$instance ;
    }
    public function escreverLog(string $fileCreated){
        if(!file_exists("logsExercicio90")){
            mkdir("logsExercicio90", 0777);    
        }
        $filename = "logsExercicio90/log.txt";
        $file = fopen($filename, "a+");
        fwrite($file, "{$fileCreated} arquivo criado em ".date("d-m-y H:i:s").PHP_EOL);
        fclose($file);
    }
    public function buscarLog(){

    }
    public function exibirLog(){
        return $file = file_get_contents("logsExercicio90/log.txt");
    }
}

class Application {
    private LogsSingleton $logs;

    public function __construct()
    {
        $this->logs = LogsSingleton::getInstance();
    }

    public function createDirectory(string $nameDirectory){
        if(file_exists($nameDirectory)){
            return "diretorio exitente";
        }
        mkdir($nameDirectory, 0777);
        return "diretorio: {$nameDirectory} criado com sucesso !";
    }
    public function createFile(string $directory){
        $filename = $directory ."/"."log-" . date("Y-m-d-H-i-s").".txt"; 
        $file = fopen($filename, "w+");
        fwrite($file, "arquivo criado em ".date("d-m-y H:i:s"));
        fclose($file);
        $this->logs->escreverLog($filename);
        return "arquivo criado com sucesso";
    }
    public function exibirLogs(){
        return $this->logs->exibirLog();
    }
    
}

$app = new Application();
echo "<br>" . $app->createDirectory("exercicio90_1");
echo "<br>" . $app->createDirectory("exercicio90_2");
echo "<br>" . $app->createDirectory("exercicio90_3");
echo "<br>" . $app->createDirectory("exercicio90_4");
echo "<br>" . $app->createDirectory("exercicio90_5");
echo "<br>" . $app->createFile("exercicio90_1");
echo "<br>" . $app->createFile("exercicio90_2");
echo "<br>" . $app->createFile("exercicio90_3");
echo "<br>" . $app->createFile("exercicio90_4");
echo "<br>" . $app->createFile("exercicio90_5");
echo "<br>" . $app->exibirLogs();