<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerosGrupo extends Model
{
    use HasFactory;

    public function genero(){
        return $this->belongsTo(Genero::class);
    }

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
