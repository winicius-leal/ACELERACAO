<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnaliseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_doc'=> random_int(0,600),
            'id_assinatura'=> random_int(0,100), 
            'status'=> $this->faker->name(),
            'data_analise'=> $this->faker->date(),
            'visualizadores'=> $this->faker->randomDigit()
        ];
    }
}
