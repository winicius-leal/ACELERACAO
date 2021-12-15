<?php

class Nota
{
    private int $id;
    private string $nome;
    private string $descricao;
    private int $quantidade = 0;
    private float $precoDeVenda;
    private float $desconto;

    public function __construct(int $id, string $nome, string $descricao, int $quantidade, float $precoDeVenda, float $desconto)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->precoDeVenda = $precoDeVenda;
        $this->desconto = $desconto;
    }

    public function setPrecoDeVenda(float $precoDeVenda):void
    {
        $this->precoDeVenda = $precoDeVenda;
    }
    public function setDescricao(string $descricao):void
    {
        $this->descricao = $descricao;
    }
    public function getPrecoDeVenda():float
    {
        return $this->precoDeVenda;
    }
    public function getDescricao():string
    {
        return $this->descricao;
    }
    public function getNome():string
    {
        return $this->nome;
    }
    public function getQuantidade():int
    {
        return $this->quantidade;
    }
    public function getDesconto():float
    {
        return $this->desconto;
    }

    public function calculaFatura():float
    {
        return $this->quantidade * $this->precoDeVenda;
    }
    
}

$nota = new Nota(1,"teclado","sem fio",2,20.50,2);

$nota->setPrecoDeVenda(50.90);
$nota->setDescricao("com fio");

$result  = $nota->calculaFatura();

var_dump($result);