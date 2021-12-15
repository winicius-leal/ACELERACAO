<?php

namespace ClassesLista10SOLID;

require_once("IPagamento.php");
require_once("Conta.php");

class Cartao implements IPagamento{
    private int $id;
    private string $tipo;
    private Conta $conta;

    public function status():bool{
        return true;
    }
    public function verificaMeioDePagamento():bool{
        return true;
    }
    public function mostraQuantidadeDeParcelas():bool{
        return true;
    }
    public function aplicaDesconto():bool{
        return true;
    }
    public function aplicaJuros():bool{
        return true;
    }
    public function aplicaTaxa():bool{
        return true;
    }
    public function removeTaxa():bool{
        return true;
    }
    public function atualizaStatus():bool{
        return true;
    }
    public function criaIdentificador():bool{
        return true;
    }
}