<?php


class Pessoa 
{
    protected string $nome;
    protected string $CPF;
    protected string $endereco;
    protected string $nomepai;
    protected string $nomemae;
    protected int $rg;
    protected string $serialdeidentificacao;

    public function __construct(string $nome, string $CPF, string $endereco, string $nomepai, string $nomemae, int $rg, string $serialdeidentificacao)
    {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->endereco = $endereco;
        $this->nomepai = $nomepai;
        $this->nomemae = $nomemae;
        $this->rg = $rg;
        $this->serialdeidentificacao = $serialdeidentificacao;
    }

    public function __toString()
    {
        return json_encode([
            "nome"=>$this->nome,
            "CPF"=>$this->CPF,
            "endereco"=>$this->endereco,
            "nomepai"=>$this->nomepai,
            "nomemae"=>$this->nomemae,
            "rg"=>$this->rg,
            "serialdeidentificacao"=>$this->serialdeidentificacao
        ]);
    }

}


class Atendente extends Pessoa{

    private int $id;
    private string $funcao;
    private string $horarioentrada;
    private string $horariosaida;

    public function __construct(
        int $id,
        string $funcao,
        string $horarioentrada,
        string $horariosaida,
        string $nome, 
        string $CPF, 
        string $endereco, 
        string $nomepai, 
        string $nomemae, 
        int $rg, 
        string $serialdeidentificacao
        )
    {
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horarioentrada = $horarioentrada;
        $this->horariosaida = $horariosaida;
        parent::__construct($nome,$CPF,$endereco,$nomepai,$nomemae,$rg,$serialdeidentificacao);
    }

    public function __toString()
    {
        return json_encode([
            "id"=>$this->id,
            "funcao"=>$this->funcao,
            "horarioentrada"=>$this->horarioentrada,
            "horariosaida"=>$this->horariosaida,
            "nome"=>$this->nome,
            "CPF"=>$this->CPF,
            "endereco"=>$this->endereco,
            "nomepai"=>$this->nomepai,
            "nomemae"=>$this->nomemae,
            "rg"=>$this->rg,
            "serialdeidentificacao"=>$this->serialdeidentificacao
        ]);
    }
    
}

$hora1 = date("H:i:s A",strtotime("09.00.00"));
$hora2 = date("H:i:s A",strtotime("16.00.00"));

$atendente1 = new Atendente(1,"s", $hora1, $hora2,"Winicius","00000000","rua ss","ALSD","ASDAD",11212,"asd54as");
var_dump($atendente1->__toString());