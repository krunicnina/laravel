<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv_zanra'
    ];

    public function serije(){
        return $this->hasMany(Serija::class);
    }
}
