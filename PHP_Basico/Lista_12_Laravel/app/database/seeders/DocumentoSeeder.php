<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * se rodar o comando php artisan db:seed --class=NomeDaSeederCriada
     * a seed sera executada fazendo com que o banco de dados execute oque tem na função run() abaixo 
     * @return void
     */
    public function run()
    {
        \App\Models\Documento::create([
            'title'=>"Primeiro Documento Criado pelo Seeder",
            'sizeInMB'=>3,
            'subscriptionNumber'=>4,
            'signature'=>"leal",
            'qntPages'=>10
        ]);
        \App\Models\Documento::create([
            'title'=>"Segundo Documento Criado pelo Seeder",
            'sizeInMB'=>3,
            'subscriptionNumber'=>4,
            'signature'=>"leal",
            'qntPages'=>10
        ]);
        \App\Models\Documento::create([
            'title'=>"Terceiro Documento Criado pelo Seeder",
            'sizeInMB'=>3,
            'subscriptionNumber'=>4,
            'signature'=>"leal",
            'qntPages'=>10
        ]);
    }
}
