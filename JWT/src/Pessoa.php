<?php

namespace lista15;

class Pessoa{

    private $id;
    private $nome;
    private $email;
    private $profissao;
    private $escolaridade;
    private $token;

    public function __construct($id, $nome, $email, $profissao, $escolaridade)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->profissao = $profissao;
        $this->escolaridade = $escolaridade;
    }

    public function setToken($token){
        $this->token = $token;
    }
    
    public function getData(){
        return [
            "id"=>$this->id,
            "nome"=>$this->nome,
            "email"=>$this->email,
            "profissao"=>$this->profissao,
            "escolaridade"=>$this->escolaridade,
        ];
    }
    
    public function getId(){return $this->id;}
    public function getNome(){return $this->nome;}
    public function getEmail(){return $this->email;}
    public function getEscolaridade(){return $this->escolaridade;}
    public function getProfissao(){return $this->profissao;}
}