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
    public function gravaInfos(DespesaMes $despesaMes){

        $objSerializado = serialize($despesaMes);
        $filename = $this->nomeDoIndividuo . ".txt";
        $file = fopen($filename, "a+");
        fwrite($file, $objSerializado);
        fclose($file);
        echo "arquivo gravado com sucesso";
    }
    
}