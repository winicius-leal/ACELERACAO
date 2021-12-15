<?php

interface Saida{
    public function convertData();
}
class JSON implements Saida{

    private array $dados;

    public function __construct(array $dados)
    {
        $this->dados = $dados;    
    }
    public function convertData()
    {
        return json_encode($this->dados);
    }
}
class StringSeparated implements Saida{

    private array $dados;

    public function __construct(array $dados)
    {
        $this->dados = $dados;    
    }
    public function convertData()
    {
        return implode(",", $this->dados);
    }
}
class XML implements Saida{

    private array $dados;

    public function __construct(array $dados)
    {
        $this->dados = $dados;    
    }
    public function convertData()
    {        
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($this->dados, array ($xml,'addChild'));
        return $xml->asXML();
    }
}
class ClienteTransfer {

    public function convert(Saida $tipo){
        return $tipo->convertData();
    }
}

$ArrayInJSON = new JSON(["nome"=>"winicius","idade"=>21]);
$ArrayInStringSeparated = new StringSeparated(["nome"=>"winicius","idade"=>21]);
$ArrayInXML = new XML(["nome"=>"winicius","idade"=>"21"]);

$cliente = new ClienteTransfer();

var_dump($cliente->convert($ArrayInJSON));

var_dump($cliente->convert($ArrayInStringSeparated));

var_dump($cliente->convert($ArrayInXML));
