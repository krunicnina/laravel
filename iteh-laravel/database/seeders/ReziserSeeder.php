<?php

namespace Database\Seeders;

use App\Models\Reziser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReziserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reziser::factory()->count(20)->create();
    }
}
