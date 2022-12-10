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
    $zanr1=\App\Models\Zanr::create([
        'naziv_zanra' => "komedija"
    ]);

    $zanr2=\App\Models\Zanr::create([
        'naziv_zanra' => "horor"
    ]);

    $zanr3=\App\Models\Zanr::create([
        'naziv_zanra' => "triler"
    ]);

    $zanr4=\App\Models\Zanr::create([
        'naziv_zanra' => "akcija"
    ]);

    $zanr5=\App\Models\Zanr::create([
        'naziv_zanra' => "krimi"
    ]);

    $zanr6=\App\Models\Zanr::create([
        'naziv_zanra' => "misterija"
    ]);
  }
}
