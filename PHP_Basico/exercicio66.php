<?php

class Pessoa 
{
    private string $nome;
    private string $CPF;
    private string $endereco;
    private string $nomepai;
    private string $nomemae;
    private int $rg;
    private string $serialdeidentificacao;

    public function __construct(string $nome, string $CPF, string $endereco, string $nomepai, string $nomemae, int $rg, string $serialdeidentificacao)
    {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->endereco = $endereco;
        $this->nomepai = $nomepai;
        $this->nomemae = $nomemae;
        $this->rg = $rg;
        $this->serialdeidentificacao = $serialdeidentificacao;
    }
    public function __toString()
    {
        return json_encode([
            "nome"=>$this->nome,
            "CPF"=>$this->CPF,
            "endereco"=>$this->endereco,
            "nomepai"=>$this->nomepai,
            "nomemae"=>$this->nomemae,
            "rg"=>$this->rg,
            "serialdeidentificacao"=>$this->serialdeidentificacao
        ]);
    }
}

$pessoa1 = new Pessoa("Winicius","0644554512","ruasss ","SDLLL","SSS",1,"dg5g54gr");

$pessoa2 = new Pessoa("Winicius LEAL","444455562","ruaasdasdasd","ASDDFFFFFFFF","SDASDASD",1,"dg5FDFgr");

var_dump($pessoa1->__toString());

var_dump($pessoa2->__toString());

?>