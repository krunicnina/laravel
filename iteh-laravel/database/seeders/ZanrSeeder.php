<?php

namespace Database\Seeders;

use App\Models\Zanr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZanrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 
  public function run()
  {
      Zanr::factory()->count(20)->create();
  }
}
