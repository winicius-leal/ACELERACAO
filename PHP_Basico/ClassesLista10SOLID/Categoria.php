<?php

namespace ClassesLista10SOLID;

class Categoria{
    private int $id;
    private string $nome;
    private string $descricao;

    public function verificaPrioridade():bool{
        return true;
    }
    public function aumentaNivel():bool{
        return true;
    }
}