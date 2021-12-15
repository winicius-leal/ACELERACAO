<?php

namespace ClassesLista10SOLID;

interface IPagamento{
    public function status():bool;
    public function verificaMeioDePagamento():bool;
    public function mostraQuantidadeDeParcelas():bool;
    public function aplicaDesconto():bool;
    public function aplicaJuros():bool;
    public function aplicaTaxa():bool;
    public function removeTaxa():bool;
    public function atualizaStatus():bool;
    public function criaIdentificador():bool;
}