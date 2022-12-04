<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serija extends Model
{
    use HasFactory;
    protected $fillable = [
        'naslov',
        'premijera',
        'reziser_id',
        'zanr_id',
         'user_id'
    ];

    public function reziser(){
        return $this->belongsTo(Reziser::class);
    }
 
    public function zanr(){
        return $this->belongsTo(Zanr::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
