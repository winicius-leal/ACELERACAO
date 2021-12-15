<?php

function verificaQuantidadeDeItens($categoria)
{       

    
        if(count($categoria) >=3 && count($categoria) <= 6)
        {
            return imprimiCardapio($categoria);

        }
        
        return "<br>A categoria não obedece a quantidade mínima de itens";

}

function imprimiCardapio($categoria)
{
    foreach ($categoria as $key => $value) {
        return "<br>indicie:". $key . " valor:".$value;
    }
}

?>