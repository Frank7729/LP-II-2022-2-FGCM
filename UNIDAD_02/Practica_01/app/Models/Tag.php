<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function generos_grupos(){
        return $this->belongsToMany(Generos_Grupo::class);
    }
}
