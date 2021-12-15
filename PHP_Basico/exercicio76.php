<?php

class Edicoes {
    private int $ano;
    private int $qntArtigos;
    private int $numEdition;

    public function __construct( int $ano, int $qntArtigos, int $numEdition)
    {
        $this->ano = $ano;
        $this->qntArtigos = $qntArtigos;
        $this->numEdition = $numEdition;
    }

    public function getEdicao(){
        return ["numEdition"=>$this->numEdition, "Ano"=>$this->ano, "qntArtigos"=>$this->qntArtigos];
    }
    public function setEdicao(int $ano, int $qntArtigos, int $numEdition){
        $this->ano = $ano;
        $this->qntArtigos = $qntArtigos;
        $this->numEdition = $numEdition;
    }
}

class Revistas{
    private int $codigo;
    private string $titulo;
    private string $tipo;
    private Edicoes $edicao;

    public function __construct(int $codigo, string $titulo, string $tipo)
    {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->tipo = $tipo;
        $this->edicao = new Edicoes(2007, 2, 1);
    }
    public function getEdicao():Edicoes{
        return $this->edicao;
    }
    public function getEdicao2():array{
        return $this->edicao->getEdicao();
    }
    public function setEdicao(Edicoes $edicao):void{
        $this->edicao = $edicao;
    }
}

$revista = new Revistas(2, "Dolar","Best Seller");
$revista->getEdicao()->setEdicao(2008, 3, 2);
var_dump($revista->getEdicao());
var_dump($revista->getEdicao2());