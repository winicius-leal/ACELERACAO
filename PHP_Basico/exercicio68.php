<?php

interface Animal{
    public function getNomeEspecie();
    public function getNomeAnimal();
}

interface Ferramentas
{
    public function filtraEspecie(array $animais , string $espercieFiltrar);
    public function classificaEspecies(array $animais);
}

class Animais implements Animal
{
    protected string $nome;
    protected string $especie;

    public function __construct(string $nome, string $especie)
    {
        $this->nome = $nome;
        $this->especie = $especie;
    }
    public function getNomeEspecie():string
    {
        return $this->especie;
    }
    public function getNomeAnimal():string
    {
        return $this->nome;
    }
}

class Ferranenta implements Ferramentas
{
    
    public function filtraEspecie(array $animais , string $espercieFiltrar)
    {
        $animaisFiltradosPorEspecie = [];

        foreach ($animais as $animal) {
                
            if ($animal->getNomeEspecie() == $espercieFiltrar) {
                array_push($animaisFiltradosPorEspecie, $animal->getNomeEspecie());
            }

        }

        return $animaisFiltradosPorEspecie;
    }

    public function classificaEspecies(array $animais)
    {

        $nomeDeTodasAsEspeciesEncontradas = [];

        foreach ($animais as $animal) {
            //in_array verifica se existe determinado valor no array
            if (!in_array($animal->getNomeEspecie(), $nomeDeTodasAsEspeciesEncontradas)) {
                array_push($nomeDeTodasAsEspeciesEncontradas, $animal);            
            }
        }
        return $nomeDeTodasAsEspeciesEncontradas;
        
    }

}

class Resultado {
    private string $nomeEspecie;
    private int $quantidadeDeAnimaisDaEspecie;

    public function __construct(string $nomeEspecie, int $quantidadeDeAnimaisDaEspecie) {
        $this->nomeEspecie = $nomeEspecie;
        $this->quantidadeDeAnimaisDaEspecie = $quantidadeDeAnimaisDaEspecie;
    }

    public function getNomeEspecie(): string {
        return $this->nomeEspecie;
    }

    public function getQuantidade(): int {
        return $this->quantidadeDeAnimaisDaEspecie;
    }        
}

class Saida {

    public function numeroDeAnimaisPorEspecie(array $animais, Ferramentas $ferramenta){
        
        $vetorDeobjetosComTodasAsEspeciesEncontradas = $ferramenta->classificaEspecies($animais);

        $vetorDeObjetosResultado = [];
        $vetorComONomeDeTodasAsEspeciesEncontradas = [];

        foreach($vetorDeobjetosComTodasAsEspeciesEncontradas as $especie){
            array_push($vetorComONomeDeTodasAsEspeciesEncontradas, $especie->getNomeEspecie());            
        }

        $vetorSemNomeDeEspeciesDuplicado = array_unique($vetorComONomeDeTodasAsEspeciesEncontradas);

        foreach($vetorSemNomeDeEspeciesDuplicado as $especie){
            array_push($vetorDeObjetosResultado, new Resultado($especie,count($ferramenta->filtraEspecie($animais, $especie))));
        }

        return $vetorDeObjetosResultado;
    }
}

/*
$ferramenta = new Ferranenta();

$cachorro = new Animais("cachorro","mamifero");
$gato = new Animais("gato","mamifero");
$piranha = new Animais("piranha","peixe");


$saida = new Saida();

var_dump($saida->numeroDeAnimaisPorEspecie([$cachorro, $cachorro, $gato,$gato,$piranha], $ferramenta));
*/

?>