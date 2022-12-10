<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReziserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'drzava' => $this->faker->country(),
            'jmbg' => $this->faker->numerify('##########'),

        ];
    }
}
