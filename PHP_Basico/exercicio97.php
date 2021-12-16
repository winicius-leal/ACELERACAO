<?php

interface Enviavel{
    public function enviar();
}
class Email implements Enviavel{
    public function enviar(){
        echo "mensagem enviada";
    }
}
class Notificacao{

    public function enviar(Enviavel $email){
        return $email->enviar();
    }
}

$email = new Email();
$notificao = new Notificacao();
echo $notificao->enviar($email);