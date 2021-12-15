<?php
    $primeiraLista = [-3,7,28,444,-7,7,-444,4447,88,20,88,207,-707,4420,377,4440,74,844,-80,0];
    $segundaLista = [827,4,-74,-442,0,2,87,442,7444,20,22,-448,70,820,-4,74,28,-24,-22,448];

    function soma($value1, $value2)
    {
        $result = $value1 + $value2;

        if($result<0)
        {
            return 0;
        } 

        return $result;
    }


    
    for($i=0; $i<20; $i++)
    {
        $file = fopen("arrays.txt", "a");

        fwrite($file, $primeiraLista[$i]." , ".$segundaLista[$i]." a soma é = ". soma($primeiraLista[$i], $segundaLista[$i])."\r\n");

        fclose($file);
    }

    echo "arquivo gerado com sucesso !";
    
?>