<?php

function nome($name)
{
    if (is_null($name) || empty($name)) {
        throw new Exception("Error", 1);
    }

    return $name;
}

try {
    echo nome("Winicius");
    echo nome("");
} catch (\Exception $erro) {
    echo json_encode(["mensagem"=>$erro->getMessage(),"codigo"=>$erro->getCode()],true);
}finally{
    echo "execução do try catch concluida totalmente";
}

