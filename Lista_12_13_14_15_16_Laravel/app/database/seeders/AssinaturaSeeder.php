<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssinaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Assinatura::factory(5)->create();
    }
}
