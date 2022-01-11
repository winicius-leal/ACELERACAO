<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $connection = "pgsql";

    public string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getDados():array{
        return ["nome"=>$this->nome, "idade"=> $this->idade];
    }
}
