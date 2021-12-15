<?php


interface CarDiscount {
    public function generateDiscount():string;
}

class BMW implements CarDiscount {
    private bool $is4x4;
    private bool $ret;
    private bool $esportivo;

    public function __construct()
    {
        $this->is4x4 = false;
        $this->ret = true;
        $this->esportivo = true;
    }
    public function generateDiscount():string
    {
        $discount = 0 ;

        if(!$this->is4x4){
            $discount += 5;
        }
        if($this->ret){
            $discount += 7;
        }
        if($this->esportivo){
            $discount += 9;
        }
        return "Cupom {$discount}% off para passar no pedágio";
    }
    
}
class Mercedes implements CarDiscount {
    private bool $is4x4;
    private bool $ret;
    private bool $esportivo;

    public function __construct()
    {
        $this->is4x4 = false;
        $this->ret = true;
        $this->esportivo = true;
    }
    public function generateDiscount():string
    {
        $discount = 0 ;

        if(!$this->is4x4){
            $discount += 10;
        }
        if($this->ret){
            $discount += 18;
        }
        if($this->esportivo){
            $discount += 19;
        }
        return "Cupom {$discount}% off para passar no pedágio";
    }

}

function generateCupom(CarDiscount $car){
    return $car->generateDiscount();
}

echo generateCupom(new BMW());
echo "<br>";
echo generateCupom(new Mercedes());