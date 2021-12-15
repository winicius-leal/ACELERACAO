<?php


class Gerente{

    private int $id;
    private String $nome;
    private String $alocacao;
    private float $salario;
    private int $quantidadeDeSubordinados;

    public function __construct(int $id = null, string $nome = null, string $alocacao = null, float $salario = null, int $quantidadeDeSubordinados = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->alocacao = $alocacao;
        $this->salario = $salario;
        $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
    }

    public function __destruct()
    {
        
    }

    public function __toString()
    {
        return json_encode(["id"=>$this->id,"nome"=>$this->nome,"alocacao"=>$this->alocacao,"salario"=>$this->salario, "quantidadeDeSubordinados"=>$this->quantidadeDeSubordinados]);
    }

    public function getId():int
    {
        return $this->id;
    }
    public function getNome():string
    {
        return $this->nome;
    }
    public function getAlocacao():string
    {
        return $this->alocacao;
    }
    public function getSalario():string
    {
        return $this->salario;
    }
    public function getQuantidadeDeSubordinados():string
    {
        return $this->quantidadeDeSubordinados;
    }
    public function setId(int $id):void
    {
        $this->id = $id;
    }
    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }
    public function setAlocacao(string $alocacao):void
    {
        $this->alocacao = $alocacao;
    }
    public function setSalario(float $salario):void
    {
        $this->salario = $salario;
    }
    public function setQuantidadeDeSubordinados(int $quantidadeDeSubordinados):void
    {
        $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
    }
    public function insereGerente(Gerente $gerente)
    {
        $arrayDeGerente[] = $gerente;

        foreach ($arrayDeGerente[0] as $key => $value) {
            $file = fopen("gerente.txt","w+");
            fwrite($file, $key.",".$value."\n");
            fclose($file);
        }

        echo "arquivo gerado com sucesso";

    }
    public function mostraDadosDoArquivoGerente()
    {
        return file_get_contents("gerente.txt");
    }
    
}

$gerente = new Gerente(1,"nome","CEO",33333,10);
//echo $gerente->__toString();
$gerente->insereGerente($gerente);
var_export($gerente->mostraDadosDoArquivoGerente());