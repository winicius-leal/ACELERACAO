<?php

$contribuinte1 = ["nome"=>"Winicius","cpf"=>"12222111212","dependentes"=>1,"renda"=>1000];
$contribuinte2 = ["nome"=>"Joao","cpf"=>"12222511212","dependentes"=>2,"renda"=>3000];
$contribuinte3 = ["nome"=>"Jose","cpf"=>"12222311212","dependentes"=>4,"renda"=>4000];


function calculaImposteDeRenda($contribuintes)
{
    if($contribuintes["renda"] <= 2000)
    {
        return "o imposto para ".$contribuintes["nome"]." é INSENTO";
    }
    if($contribuintes["renda"] > 2000 && $contribuintes["renda"] <= 3000)
    { 
        $desconto = $contribuintes["dependentes"] * (1000 * 0.05);
        $imposto = $contribuintes["renda"] * 0.05; 
        return "O imposto calculado para " . $contribuintes["nome"] . " é de : R$" . $imposto. " com desconto de: R$" . $desconto. " o total é : R$" . ($imposto - $desconto);
    }
    if($contribuintes["renda"] > 3000 && $contribuintes["renda"] < 5000)
    {
        $desconto = $contribuintes["dependentes"] * (1000 * 0.05);
        $imposto = $contribuintes["renda"] * 0.10; 
        return "O imposto calculado para " . $contribuintes["nome"] . " é de : R$" . $imposto. " com desconto de: R$" . $desconto. " o total é : R$" . ($imposto - $desconto);
    }
}

echo calculaImposteDeRenda($contribuinte1);
echo "<br>";
echo calculaImposteDeRenda($contribuinte2);
echo "<br>";
echo calculaImposteDeRenda($contribuinte3);