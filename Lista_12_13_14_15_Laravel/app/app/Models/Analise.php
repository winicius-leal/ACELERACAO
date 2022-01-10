<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analise extends Model
{
    use HasFactory;
    protected $fillable = ["id_doc", "id_assinatura", "status","data_analise","visualizadores"];
    protected $connection = "pgsql";
}
