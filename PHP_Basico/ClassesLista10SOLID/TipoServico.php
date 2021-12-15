<?php

namespace ClassesLista10SOLID;

class TipoServico{
    private int $id;
    private string $nome;
    private string $descricao;
    private int $nivel;

    public function verificaPrioridade():bool{
        if ($this->nivel == 0) {
            return false;
        }
        return true;
    }
    public function aumentaNivel(int $nivel):void{
        $this->nivel = $nivel;
    }
}