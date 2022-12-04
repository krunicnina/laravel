<?php

namespace Database\Factories;

use App\Models\Reziser;
use App\Models\User;
use App\Models\Zanr;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naslov' => $this->faker->firstName(),
            'premijera' => $this->faker->year(),
            'reziser_id' => Reziser::factory(),
             'user_id' => User::factory(),
            'zanr_id' => Zanr::factory()
        ];
    }
}
