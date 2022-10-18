<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musico extends Model
{
    use HasFactory;

    public function musicos(){
        return $this->hasMany(Musico::class);
    }
}
