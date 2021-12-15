<?php

namespace ClassesLista10SOLID;

require_once("Conta.php");

class PIX extends Conta{
    private int $id;
    private string $chave;
    private Conta $conta;
}