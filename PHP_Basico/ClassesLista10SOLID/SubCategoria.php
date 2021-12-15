<?php

namespace ClassesLista10SOLID;

require_once("Categoria.php");

class SubCategoria extends Categoria{
    private int $id;
    private Categoria $categoria;
    private string $descricao;

    public function verificaPrioridade():bool{
        return true;
    }
    public function aumentaNivel():bool{
        return true;
    }
}