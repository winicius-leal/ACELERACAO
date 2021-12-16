<?php

class PayPal{
    public function __construct()
    {
        
    }
    public function sendPayment($amount){
        echo "Paying via PayPal .$amount";
    }
}

interface wrapper{
    public function paymentAmount($amount);
}
class PayPalAdapter implements wrapper{

    private PayPal $paypal;
    
    public function __construct(Paypal $paypal)
    {
        $this->paypal = $paypal;
    }

    public function paymentAmount($amount){
        return $this->paypal->sendPayment($amount);
    }
}

$paypal = new PayPalAdapter(new PayPal());
echo $paypal->paymentAmount("3");