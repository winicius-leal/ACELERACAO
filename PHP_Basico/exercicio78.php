<?php

use \externo\Biblioteca;

require_once("References/Biblioteca.php");

class Usuario {
    private Biblioteca $nome;
    private $login; 
    private $senha;
    private $maxEmprestimos;
    private $listaEmprestimos;
    private $listaReservas;

    public function estaPunido(){

    }
}

class Item 
{
    private $id;
    private $nome;
    private $autores;
    private $ano;
    private $penalidadeAtraso;
    private $tempoReserva;
    private $listaEmprestimos;
    private $listaReservas;

    public function estaEmprestado(){

    }
    public function estaReservado(){

    }
}
class Emprestimo{
    private Usuario $usuario;
    private Item $item;
    private $qtdRenovado;
    private $dataExpiracao;
    private bool $status;
}

class Reserva {
    private Usuario $usuario;
    private Livro $livro;
    private bool $status;
}

class Livro extends Item{

}
class Periodico extends Item{

}
class Midia extends Item{

}
class Monografia extends Item{

}
class UsuarioComum extends Usuario{

}
class UsuarioEspecial extends Usuario{

}