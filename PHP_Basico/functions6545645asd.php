<?php

function quociente(int $numero1, int $numero2)
{
    if($numero2 != 0)
    {
        return intdiv($numero1, $numero2);
    }

    return "DIVISAO POR ZERO";
}

?>