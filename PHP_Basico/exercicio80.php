<?php

interface Perecivel {
    public function estaVencido():bool;
}
class Leite extends Produto implements Perecivel{
    
    private string $marca;
    private float $volume;
    private string $dataValidade;

    public function __construct(string $marca, float $volume, string $dataValidade , int $codigo , float $preco)
    {
        if (is_null($marca) || is_null($volume) || is_null($dataValidade) || is_null($codigo) || is_null($preco)) {
            throw new InformacaoNulaException("Parametro nulo", 1);
        }
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
        parent::__construct($codigo, $preco);
    }

    public function estaVencido(): bool
    {
        if (strtotime($this->dataValidade) > strtotime(date("y-m-d"))) {
            //nao esta vencido
            return false;
        }
        return true;
    }
    public function getCode(){
        return $this->codigo;
    }
    public function getMarca(){
        return $this->marca;
    }
}
abstract class Produto{
    protected int $codigo;
    protected float $preco;

    public function __construct($codigo, $preco){
        $this->codigo = $codigo;
        $this->preco = $preco;
    }
}
class DVD extends Produto{
    private string $titulo;
    private int $ano;

    public function __construct(string $titulo, int $ano, int $codigo, float $preco){
        $this->titulo = $titulo;
        $this->ano = $ano;
        parent::__construct($codigo, $preco);
    }
    public function getCode(){
        return $this->codigo;
    }
    public function listaDVDPorAno(int $ano){
    
        if ($this->ano == $ano) {
            return ["Titulo"=>$this->titulo, "Ano"=>$this->ano,];
        }
        
    }
}

class InformacaoNulaException extends Exception{

}

$leite1 = new Leite("Itambe 1l",1,"22-01-2021",0,2.99);
$leite2 = new Leite("Itambe 1.5l",1.5,"22-12-2021",1,3.99);
$leite3 = new Leite("Itambe 2l",2,"22-12-2021",2,4.99);
$leite4 = new Leite("Itambe 2.5l",2.5,"22-12-2021",3,7.99);
$leite5 = new Leite("Itambe 4l",4,"22-12-2021",4,10.99);
$leite6 = new Leite("Itambe 5l",5,"22-12-2021",5,12.99);

$dvd1 = new DVD("Finaly",2021,6,10);
$dvd2 = new DVD("Finaly2",2021,7,10);
$dvd3 = new DVD("Finaly3",2021,8,10);
$dvd4 = new DVD("Finaly4",2021,9,10);

$estoque = [
    $leite1->getCode() => $leite1,
    $leite2->getCode() => $leite2,
    $leite3->getCode() => $leite3, 
    $leite4->getCode() => $leite4,
    $leite5->getCode() => $leite5,
    $leite6->getCode() => $leite6,
    $dvd1->getCode() => $dvd1,
    $dvd2->getCode() => $dvd2,
    $dvd3->getCode() => $dvd3,
    $dvd4->getCode() => $dvd4,
];


foreach ($estoque as $value) {
    if (get_class($value) == "Leite") {

        if($value->estaVencido()){
            echo $value->getMarca() . " esta vencido";
        }
        
    }
}



foreach ($estoque as $value) {
    if (get_class($value) == "DVD") {
        var_dump($value->listaDVDPorAno(2021));
    }
}
