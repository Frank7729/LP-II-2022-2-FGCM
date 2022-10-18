<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicosGrupo extends Model
{
    use HasFactory;

    public function musico(){
        return $this->belongsTo(Musico::class);
    }
}
