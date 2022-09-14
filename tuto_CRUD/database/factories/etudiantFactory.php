<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class etudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'nom' => $this->faker->LastName,
            'prenom' => $this->faker->FirstName(),
            'classe_id' =>rand(1,7),
           
        ];
    }
}