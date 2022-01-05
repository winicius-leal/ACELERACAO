<?php

require_once "../vendor/autoload.php";
require_once "src/Pessoa.php";
require_once "src/Token.php";

use lista15\{Pessoa,Token};

$pessoas = [
    new Pessoa("1","asd","asd","asd","asd"),
    new Pessoa("2","asd","asd","asd","asd"),
    new Pessoa("3","asd","asd","asd","asd"),
    new Pessoa("4","asd","asd","asd","asd"),
    new Pessoa("5","asd","asd","asd","asd"),
    new Pessoa("6","asd","asd","asd","asd"),
    new Pessoa("7","asd","asd","asd","asd"),
    new Pessoa("8","asd","asd","asd","asd"),
    new Pessoa("9","asd","asd","asd","asd"),
    new Pessoa("10","asd","asd","asd","asd"),
    new Pessoa("11","asd","asd","asd","asd"),
    new Pessoa("12","asd","asd","asd","asd"),
    new Pessoa("13","asd","asd","asd","asd"),
    new Pessoa("14","asd","asd","asd","asd"),
    new Pessoa("15","asd","asd","asd","asd")
];

foreach($pessoas as $pessoa){
    $pessoa->setToken(
        (new Token($pessoa->getData()))->generateToken()
    );
}

var_dump($pessoas);