<?php

class ItemOrcamento
{
    protected string $historico;
    protected float $valor;

    public function __construct(string $historico, float $valor){
        $this->historico = $historico;
        $this->valor = $valor;
    }

    public function getHistorico(){
        return $this->historico;
    }
    public function getValor(){
        return $this->valor;
    }
}

class ItemOrcamentoComplexo extends ItemOrcamento
{
    protected $subItens = [];

    public function __construct(string $historico, float $valor, array $subItens = []){
        parent::__construct($historico, $valor);
        $this->subItens = $subItens;
    }

    public function getValor()
    {   
        $soma = 0;
        
        foreach ($this->subItens as $value) {
            $soma += $value->getValor();
        }

        return $soma;
    }

    public function encontraItem(string $historico)
    {
        
        foreach ($this->subItens as $value) {
            if($value->getHistorico() == $historico){
                return $value;
            }
            return null;
        }
        
    }

}
/*

$som = new ItemOrcamento("som automotivo", 5.900);
$dvd = new ItemOrcamento("DVD multimidia", 3.900);

$carro = new ItemOrcamentoComplexo("carro", 12.900, [$som,$dvd]);

echo "Valor dos intens: R$" . $carro->getValor();
echo "<br>";
var_dump($carro->encontraItem("som automotivo"));
*/