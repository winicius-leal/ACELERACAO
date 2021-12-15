<?php

class DespesaMes{

    protected int $mesDaDespesa;
    protected float $valorDaDespesa;

    public function __construct(int $mesDaDespesa, float $valorDaDespesa = 0)
    {
        $this->valorDaDespesa = $valorDaDespesa;
        $this->mesDaDespesa = $mesDaDespesa;
    }
    public function getMes():int{
        return $this->mesDaDespesa;
    }
    public function getValor():float{
        return $this->valorDaDespesa;
    }
}

class DespesaDia extends DespesaMes{

    protected int $diaDaDespesa;

    public function __construct(int $mesDaDespesa, int $diaDaDespesa, float $valorDaDespesa)
    {
        parent::__construct($mesDaDespesa,$valorDaDespesa);
        $this->diaDaDespesa = $diaDaDespesa;
    }
    public function getDia():int{
        return $this->diaDaDespesa;
    }

}

class MyExpenses{

    protected array $despesas;
    protected string $cpf;
    protected string $nomeDoIndividuo;

    public function __construct(array $despesas = [], string $cpf, string $nomeDoIndividuo)
    {
        $this->despesas = $despesas;
        $this->cpf = $cpf;
        $this->nomeDoIndividuo = $nomeDoIndividuo;
    }

    public function getCpf():string{

        return $this->cpf;
    }
    public function totalizaMes(int $mes){

        $totalDespesasNoMes = 0;

        foreach($this->despesas as $despesa){
            if($despesa->getMes() == $mes){
                $totalDespesasNoMes += $despesa->getValor();
            }
        }
        return new DespesaMes($mes, $totalDespesasNoMes);
        
    }
    
}


/*
$despesaDia1DoMes1 = new DespesaDia(1,1,200);
$despesaDia2DoMes1 = new DespesaDia(1,2,400);
$despesaDia3DoMes1 = new DespesaDia(1,3,100);
$despesaDia4DoMes1 = new DespesaDia(1,4,800);

$despesaDia1DoMes2 = new DespesaDia(2,1,1000);


$minhasDespesas = new MyExpenses([$despesaDia1DoMes1,$despesaDia2DoMes1,$despesaDia3DoMes1, $despesaDia4DoMes1, $despesaDia1DoMes2],"061111122233","Winicius");

echo "Total De Despesas no Mes 1: ";
var_export($minhasDespesas->totalizaMes(1)->getValor());

echo "<br>Total De Despesas no Mes 2: ";
var_export($minhasDespesas->totalizaMes(2)->getValor());

//var_dump($minhasDespesas->totalizaMes(1));
//var_dump($minhasDespesas->totalizaMes(2));
*/