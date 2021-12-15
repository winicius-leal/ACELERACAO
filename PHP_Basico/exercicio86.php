<?php

interface CompressFile{
    public function tar();
    public function zip();
    public function rar();
}

class Imagem implements CompressFile{
    public function tar(){}
    public function zip(){}
    public function rar(){}
}
class Audio implements CompressFile{
    public function tar(){return true;}
    public function zip(){}
    public function rar(){}
}
class Text implements CompressFile{
    public function tar(){}
    public function zip(){}
    public function rar(){}
}

class Teste {
    public function compact(CompressFile $file){
        return $file->tar();
    }
}

$audio = new Audio();
$teste = new Teste();
echo $teste->compact($audio);