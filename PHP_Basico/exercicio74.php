<?php

require_once("exercicio73.php");
//require_once("exercicio72.php");
require_once("exercicio71.php");

class CorrentistaDespesa extends Correntista{
    
    protected MyExpenses $despesasPrevistas;

    public function __construct(string $cpfCliente, float $saldo, MyExpenses $despesas){
        parent::__construct($cpfCliente, $saldo);
        $this->despesasPrevistas = $despesas;
    }

    public function getDespesasPrevistas():MyExpenses{
        return $this->despesasPrevistas;
    }
}
$despesaDia1DoMes1 = new DespesaDia(1,1,200);
$despesaDia2DoMes1 = new DespesaDia(1,2,400);
$despesaDia3DoMes1 = new DespesaDia(1,3,100);
$despesaDia4DoMes1 = new DespesaDia(1,4,800);

$despesasDoWinicius = new MyExpenses([$despesaDia1DoMes1,$despesaDia2DoMes1,$despesaDia3DoMes1, $despesaDia4DoMes1],"061111122233","Winicius");

$correntistaWinicius = new CorrentistaDespesa("061111122233", 200, $despesasDoWinicius);


function buscaCorrentistasComBalancoPositivoNoMesDeMarco(array $correntistas){

    $correntistasComBalancoPositivo = [];
    
    foreach($correntistas as $correntista){

        //var_dump($correntista->getDespesasPrevistas()->totalizaMes(3)->getValor());
        //var_dump($correntista->getSaldo());

        if($correntista->getDespesasPrevistas()->totalizaMes(3)->getValor() <= $correntista->getSaldo()){
            $correntistasComBalancoPositivo[] = $correntista;
        }
        
    }
    
    if(empty($correntistasComBalancoPositivo)){
        return "nenhum correntista esta com balanço positivo no mes de Março";
    }

    return $correntistasComBalancoPositivo;
    
}

var_dump(buscaCorrentistasComBalancoPositivoNoMesDeMarco([$correntistaWinicius]));
