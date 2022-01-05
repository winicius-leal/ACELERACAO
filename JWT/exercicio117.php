<?php

require_once("../vendor/autoload.php");
require_once "src/Pessoa.php";

use lista15\Pessoa;

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use Symfony\Component\VarDumper\VarDumper;

$pessoas = [
    new Pessoa("1","ss","ss","asd","asd"),
    new Pessoa("2","ss","ss","asd","asd"),
    new Pessoa("3","ss","ss","asd","asd"),
    new Pessoa("4","ss","ss","asd","asd"),
    new Pessoa("5","ss","ss","asd","asd")
];

$configuration = Configuration::forSymmetricSigner(
    new Sha256(),
    InMemory::plainText('Ajhkjdhka78921Aas9')
);

$time = new DateTimeImmutable();


foreach($pessoas as $pessoa){
    
    $token = $configuration->builder()
                        ->issuedBy("http://localhost:8000/api/") 
                        ->permittedFor("http://localhost:8000/api/")
                        ->identifiedBy("87d9a8s7d9", true)
                        ->issuedAt($time)
                        ->canOnlyBeUsedAfter($time->modify('+1 minute'))
                        ->expiresAt($time->modify('+1 hour'))
                        ->withClaim("id",$pessoa->getId())
                        ->withClaim("nome",$pessoa->getNome())
                        ->withClaim("email",$pessoa->getEmail())
                        ->withClaim("profissao",$pessoa->getProfissao())
                        ->withClaim("escolaridade",$pessoa->getEscolaridade())
                        ->getToken($configuration->signer(), $configuration->signingKey());


    $pessoa->setToken($token->toString());
}

var_dump($pessoas);