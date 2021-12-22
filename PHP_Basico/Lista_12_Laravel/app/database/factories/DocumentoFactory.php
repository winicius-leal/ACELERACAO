<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>"Gerado com factory e faker: ". $this->faker->name(),
            'sizeInMB'=> $this->faker->randomDigit(0,1,2) , // an integer between 0 and 9
            'subscriptionNumber'=>$this->faker->randomDigit(0,1,2),
            'signature'=>$this->faker->name(),
            'qntPages'=>$this->faker->randomDigit(0,1,2) 
        ];
    }
}
