<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssinaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'qntCharactersSignature'=>$this->faker->randomDigit(0,1,2),
            'defaultSignature'=> $this->faker->name(),
            'subscriptionNumberUsed'=>$this->faker->randomDigit(0,1,2), 
        ];
    }
}
