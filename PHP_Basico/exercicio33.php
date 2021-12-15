<?php

$precos = [12.50, 56.20, 44.30, 40.20, 30.50, 14.50, 87.88, 99.40, 55.00, 54.60, 51.30];


function verificaCondicaoDePagamento($opcao, $precos)
{

    if($opcao == 1)
    {   
        foreach ($precos as $key => $value) {
    
            $precosAtualizados[] = $value - ($value * 0.10);
        }
        return $precosAtualizados;

    }
    if($opcao == 2)
    {   
        foreach ($precos as $key => $value) {
    
            $precosAtualizados[] = $value - ($value * 0.05);
        }
        return $precosAtualizados;

    }
    if($opcao == 3)
    {   
        foreach ($precos as $key => $value) {
    
            $precosAtualizados[] = $value ;
        }
        return $precosAtualizados;

    }
    if($opcao == 4)
    {   
        foreach ($precos as $key => $value) {
    
            $precosAtualizados[] = $value + ($value * 0.10);
        }
        return $precosAtualizados;
    }

}



var_dump(verificaCondicaoDePagamento(1,$precos));
var_dump(verificaCondicaoDePagamento(2,$precos));
var_dump(verificaCondicaoDePagamento(3,$precos));
var_dump(verificaCondicaoDePagamento(4,$precos));
