<?php

class Plano
{
    private float $coordenadaX;
    private float $coordenadaY;
    private string $nomeDoPonto;

    public function __construct( string $nomeDoPonto, float $coordenadaX, float $coordenadaY)
    {
        $this->nomeDoPonto = $nomeDoPonto;
        $this->coordenadaX = $coordenadaX;
        $this->coordenadaY = $coordenadaY;
    }

    public function getPontos():array 
    {
        return [$this->coordenadaX,$this->coordenadaY];
    }

    public function definirOutroPonto(float $x, float $y)
    {
        $this->coordenadaX = $x;
        $this->coordenadaY = $y;
    }

    public function comparaPontos(float $x, float $y):bool
    {
        if ($this->coordenadaX == $x && $this->coordenadaY == $y) {
            return true;
        }

        return false;
    }

}

$ponto = new Plano("A",3,4);
$ponto->definirOutroPonto(4,4);
$ponto->comparaPontos(4,4);

//var_dump($ponto->getPontos());
var_dump($ponto->getPontos());

