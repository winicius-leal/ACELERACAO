<?php

class Usuario{
    private string $nome;
    private int $cpf;
    private string $telefone;
    private string $matricula;
    private array $emprestimo;
}

class Emprestimo{
    private string $dataDeEmprestimo;
    private string $dataPrevistaDeDevolucao;
    private string $dataDeEntregaReal;
    private int $situacao;
    private Usuario $usuario;
    private Exemplar $exemplar;
}

class Exemplar{
    private string $nome;
    private int $cpf;
    private string $telefone;
    private string $matricula;
    private array $emprestimo;
    private Livro $livro;
}

class Livro{
    private string $nome;
    private int $cpf;
    private string $telefone;
    private string $matricula;
    private array $exemplares;
}
