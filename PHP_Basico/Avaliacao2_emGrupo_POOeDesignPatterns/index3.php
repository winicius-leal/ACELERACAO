<?php
    require_once ("exercicio3.php");
    
    $joao = new Correntista('111111111', 100);    
    $jose = new Correntista('222222222', 500);
    //var_dump($joao);
    //exit;

    $movimento1 = new Movimentacao('111111111', 100);
    $movimento2 = new Movimentacao('222222222', 50);

    //var_dump($movimento1);
    //exit;

    function AtualizaSaldoDosCorrentistas(array $correntistas, array $movimentacoes, Operacoes $operacao){
        foreach($movimentacoes as $movimento){
            $correntista = $operacao->encontraCorrentista($correntistas, $movimento->getCPFCorrentista());
            $correntista->setSaldo($movimento->getValorMovimento());
        }        
    }

    AtualizaSaldoDosCorrentistas([$joao, $jose], [$movimento1, $movimento2], new Operacoes());
?>
