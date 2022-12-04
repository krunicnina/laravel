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
    //         'datumRodjenja' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')
    // ->format('d/m/Y'),
    //         'date_of_birth' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')
    // ->format('d/m/Y'),
        ];
    }
}
