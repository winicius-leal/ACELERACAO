<?php

interface Arma{
    public function usarArma():void;
}
class Machado implements Arma{
    public function usarArma(): void {}
}
class ArcoeFlecha implements Arma{
    public function usarArma(): void {}
}
class Espada implements Arma{
    public function usarArma(): void {}
}
class Faca implements Arma{
    public function usarArma(): void {}
}
abstract class Personagem{
    protected Arma $arma;
    public function lutar():void{}
}
class Guerreiro extends Personagem{
    public function lutar():void{}
    
    public function atribuiArma(Arma $arma){
        $this->arma = $arma;
    }
}
class Rei extends Personagem{
    public function lutar():void{}
}
class Rainha extends Personagem{
    public function lutar():void{}
}
class Duente extends Personagem{
    public function lutar():void{}
}