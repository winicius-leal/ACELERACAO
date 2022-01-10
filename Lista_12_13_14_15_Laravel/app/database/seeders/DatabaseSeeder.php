<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        //vou comentar pra rodar o seed do DocumentoSeeder direto no terminal
        //\App\Models\Documento::factory(600)->create();

        
        \App\Models\Documento::factory(600)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Assinatura::factory(100)->create();
        \App\Models\Analise::factory(50)->create();
    }
}
