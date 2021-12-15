<?php

class Porta
{
    private bool $aberta;
    private string $cor;
    private float $dimensaoX;
    private float $dimensaoY;
    private float $dimensaoZ;

    public function __construct(bool $aberta = false, string $cor, float $dimensaoX, float $dimensaoY, float $dimensaoZ)
    {
        $this->aberta = $aberta;
        $this->cor = $cor;
        $this->dimensaoX = $dimensaoX;
        $this->dimensaoY = $dimensaoY;
        $this->dimensaoZ = $dimensaoZ;
    }

    public function abre():void
    {
        $this->aberta = true;
    }

    public function fecha():void
    {
        $this->aberta = false;
    }
    public function pinta(string $cor):void
    {
        $this->cor = $cor;
    }
    public function getAberta():int
    {
        return $this->aberta;
    }
}

class Imovel
{
    private string $cor;

    public function __construct(string $cor)
    {
        $this->cor = $cor;
    }
    public function pinta(string $cor):void
    {
        $this->cor = $cor;
    }
    public function getCor():string
    {
        return $this->cor;
    }

}

class Casa extends Imovel
{
    private bool $porta1 = false;
    private bool $porta2 = false;
    private bool $porta3 = false;

    public function __construct(string $cor, bool $porta1, bool $porta2, bool $porta3)
    {
        parent::__construct($cor);
        $this->porta1 = $porta1;
        $this->porta2 = $porta2;
        $this->porta3 = $porta3;
    }
    public function totalDePortas():int
    {
        return 3;
    }

    public function quantasPortasEstaoAbertas():int
    {

        return $this->porta1 + $this->porta2 + $this->porta3;

    }

}

class  Edificio extends Imovel
{
    private int $totalDePortas;
    private int $totalDeAndares;
    private array $portas = [];

    public function __construct(string $cor, int $totalDeAndares, array $portas = [])
    {
        parent::__construct($cor);
        $this->totalDeAndares = $totalDeAndares;
        $this->portas = $portas;
    }
    
    public function quantasPortasEstaoAbertas()
    {
        $result = 0;

        foreach ($this->portas as $value) {
            $result += $value->getAberta();
        }

        return $result;
        
    }
    public function adicionaPorta(Porta $p):void
    {
        $this->portas[] = $p;
    }
    public function totalDePortas():int
    {
        return $this->totalDePortas = count($this->portas);
    }
    public function adicionarAndar(int $andar):void
    {
        $this->totalDeAndares += $andar;
    }
    public function totalDeAndares():int
    {
        return $this->totalDeAndares;
    }
    public function getPortas():array
    {
        return $this->portas;
    }
} 



$porta = new Porta(false, "vermelho", 1.20,2,0.80);
$porta2 = new Porta(true, "amarela", 1.20,2,0.80);
$porta3 = new Porta(true, "amarela", 1.20,2,0.80);
$edificio = new Edificio("cinza", 12);

$edificio->adicionaPorta($porta);
$edificio->adicionaPorta($porta2);
$edificio->adicionaPorta($porta3);
$edificio->pinta("azul marinho");
//var_dump($edificio->getCor());
//var_dump($edificio->totalDePortas());
//var_dump($edificio->quantasPortasEstaoAbertas());