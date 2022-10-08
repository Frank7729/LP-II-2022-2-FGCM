<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function place(){
        return $this->belongsTo(Place::class);
    }
    public function tournament(){
        return $this->belongsTo(Tournament::class);
    }
}
