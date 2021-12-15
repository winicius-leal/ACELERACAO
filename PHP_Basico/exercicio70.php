<?php

require_once("exercicio68.php");
require_once("exercicio69.php");

interface AnimalOrcamento extends Animal  
{
    public function orcamentoGastoAnimal():ItemOrcamentoComplexo;
}

class Zoologico implements AnimalOrcamento{
    
    private Animais $animal;
    private ItemOrcamento $itemDeOrcamento;

    public function __construct(Animais $animal, ItemOrcamento $itemDeOrcamento){
        $this->animal = $animal;
        $this->itemDeOrcamento = $itemDeOrcamento;
    }

    public function getNomeEspecie():string{
        return $this->animal->getNomeEspecie();
    }

    public function getNomeAnimal():string{
        return $this->animal->getNomeAnimal();
    }

    public function getItemDeOrcamento(){
        return $this->itemDeOrcamento;//retorna o objeto
    }

    public function orcamentoGastoAnimal(): ItemOrcamentoComplexo{            
        return new ItemOrcamentoComplexo($this->itemDeOrcamento->getHistorico(), $this->itemDeOrcamento->getValor(), [$this->itemDeOrcamento]);
    }
}

function metodoSemEspecificaoDeClasse(array $animaisComSeusOrcamentos):array{
    
    $animaisQuePossuemVacinaW = [];
    
    foreach($animaisComSeusOrcamentos as $animal){

        $item = $animal->getItemDeOrcamento();

        if($item->getHistorico() === 'vacina W'){
            $animaisQuePossuemVacinaW[] = $animal->orcamentoGastoAnimal();
        }
    
    }
    return $animaisQuePossuemVacinaW;
}
/*

$cachorro = new Animais("cachorro","mamifero");
$gato = new Animais("gato","mamifero");

$vacinaX = new ItemOrcamento("vacina X", 100);
$vacinaY = new ItemOrcamento("vacina Y", 200);
$vacinaW = new ItemOrcamento("vacina W", 300);




$animal1 = new Zoologico($cachorro,$vacinaX);
$animal2 = new Zoologico($gato,$vacinaY);
$animal3 = new Zoologico($gato,$vacinaW);


var_dump(metodoSemEspecificaoDeClasse([$animal1, $animal2, $animal3]));
*/
