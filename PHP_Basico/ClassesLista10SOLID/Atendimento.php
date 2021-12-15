<?php

namespace ClassesLista10SOLID;

require_once("Grupos.php");
require_once("Atendente.php");
require_once("Tecnico.php");
require_once("Aluno.php");
require_once("TipoServico.php");

class Atendimento{
    private string $protocolo;
    private Grupos $grupo;
    private Atendente $atendente;
    private Tecnico $tecnico;
    private Aluno $aluno;
    private TipoServico $tipo;
    private int $idCategoria;
    private int $idSubCategoria;
    private int $idItem;

    public function __construct(string $protocolo, int $idCategoria, int $idSubCategoria, int $idItem)
    {
        $this->protocolo = $protocolo;
        $this->grupo = new Grupos();
        $this->atendente = new Atendente();
        $this->tecnico = new Tecnico();
        $this->aluno = new Aluno();
        $this->tipo = new TipoServico();
        $this->idCategoria = $idCategoria;
        $this->idSubCategoria = $idSubCategoria;
        $this->idItem = $idItem;
    }
    public function alteraStatusAtendimento(){

    }
    public function finalizaAtendimento(){

    }
    public function repassaAtendimento(){

    }
}