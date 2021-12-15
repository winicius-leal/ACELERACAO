<?php

abstract class Pao{

    protected string $nomeDoPao;
    
    abstract function valor();

    abstract function getNome();
}


abstract class RecheioDecorator extends Pao{
    protected string $nomeDoRecheio;
    abstract function getNome();
}

class PaoDoce extends Pao{
    public function __construct()
    {
        $this->nomeDoPao = "Pao Doce";
    }
    public function valor():float{
        return 2.00;
    }
    public function getNome(){
        return $this->nomeDoPao;
    }
}
class PaoDeSal extends Pao{
    public function __construct()
    {
        $this->nomeDoPao = "Pao De Sal";
    }
    public function valor(){
        return 1.00;
    }
    public function getNome(){
        return $this->nomeDoPao;
    }
}


class Salame extends RecheioDecorator{
    
    protected $pao;
    
    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
        $this->nomeDoRecheio = "Salame";
    }
    public function getNome(){
        return $this->pao->getNome() . "+" . $this->nomeDoRecheio;
    }
    public function valor(){
        return $this->pao->valor() + 0.50;
    }
}

class Mussarela extends RecheioDecorator{
    
    protected $pao;
    
    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
        $this->nomeDoRecheio = "Mussarela";
    }
    public function getNome():string{
        return $this->pao->getNome() . "+" . $this->nomeDoRecheio;
    }
    public function valor(){
        return $this->pao->valor() + 0.50;
    }
}

class Ovo extends RecheioDecorator{
    
    protected $pao;
    
    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
        $this->nomeDoRecheio = "Ovo";
    }
    public function getNome():string{
        return $this->pao->getNome() . "+" . $this->nomeDoRecheio;
    }
    public function valor(){
        return $this->pao->valor() + 1.00;
    }
}

class Margarina extends RecheioDecorator{
    
    protected $pao;
    
    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
        $this->nomeDoRecheio = "Margarina";
    }
    public function getNome():string{
        return $this->pao->getNome() . "+" . $this->nomeDoRecheio;
    }
    public function valor(){
        return $this->pao->valor() + 0.30;
    }
}

class Geleia extends RecheioDecorator{
    
    protected $pao;
    
    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
        $this->nomeDoRecheio = "Geleia";
    }
    public function getNome():string{
        return $this->pao->getNome() . "+" . $this->nomeDoRecheio;
    }
    public function valor(){
        return $this->pao->valor() + 1.00;
    }
}

class PastaDeAmendiom extends RecheioDecorator{
    
    protected $pao;
    
    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
        $this->nomeDoRecheio = "Pasta De Amendoim";
    }
    public function getNome():string{
        return $this->pao->getNome() . "+" . $this->nomeDoRecheio;
    }
    public function valor(){
        return $this->pao->valor() + 1.50;
    }
}
$combinacao1 = new PaoDeSal();
$combinacao1 = new Salame($combinacao1);
$combinacao1 = new Mussarela($combinacao1);
echo $combinacao1->getNome() . " R$". $combinacao1->valor() . "<br>";


$combinacao2 = new PaoDeSal();
$combinacao2 = new Salame($combinacao2);
echo $combinacao2->getNome() . " R$". $combinacao2->valor() . "<br>";


$combinacao3 = new PaoDeSal();
$combinacao3 = new Mussarela($combinacao3);
echo $combinacao3->getNome() . " R$". $combinacao3->valor() . "<br>";


$combinacao4 = new PaoDeSal();
$combinacao4 = new Ovo($combinacao4);
$combinacao4 = new Mussarela($combinacao4);
echo $combinacao4->getNome() . " R$". $combinacao4->valor() . "<br>";


$combinacao5 = new PaoDeSal();
$combinacao5 = new Ovo($combinacao5);
$combinacao5 = new Margarina($combinacao5);
echo $combinacao5->getNome() . " R$". $combinacao5->valor() . "<br>";


$combinacao = new PaoDeSal();
$combinacao = new Margarina($combinacao);
echo $combinacao->getNome() . " R$". $combinacao->valor() . "<br>";

$combinacao6 = new PaoDeSal();
$combinacao6 = new Ovo($combinacao6);
echo $combinacao6->getNome() . " R$". $combinacao6->valor() . "<br>";


$combinacao7 = new PaoDoce();
$combinacao7 = new Geleia($combinacao7);
echo $combinacao7->getNome() . " R$". $combinacao7->valor() . "<br>";


$combinacao8 = new PaoDeSal();
$combinacao8 = new Geleia($combinacao8);
$combinacao8 = new Salame($combinacao8);
echo $combinacao8->getNome() . " R$". $combinacao8->valor() . "<br>";


$combinacao9 = new PaoDeSal();
$combinacao9 = new PastaDeAmendiom($combinacao9);
$combinacao9 = new Geleia($combinacao9);
echo $combinacao9->getNome() . " R$". $combinacao9->valor() . "<br>";


$combinacao10 = new PaoDeSal();
$combinacao10 = new Salame($combinacao10);
echo $combinacao10->getNome() . " R$". $combinacao10->valor() . "<br>";


$combinacao11 = new PaoDeSal();
$combinacao11 = new PastaDeAmendiom($combinacao11);
echo $combinacao11->getNome() . " R$". $combinacao11->valor() . "<br>";

