<?php

namespace Database\Seeders;

use App\Models\Reziser;
use App\Models\Serija;
use App\Models\User;
use App\Models\Zanr;
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
        // Serija::truncate();
        // User::truncate();
        // Reziser::truncate();
        // Zanr::truncate();
        $rseeder = new ReziserSeeder();
        $zseeder = new ZanrSeeder();
        $sseeder = new SerijaSeeder();


        $rseeder->run();
        $zseeder->run();
        $sseeder->run();
    }
}
