<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    //Relación inversa 1 a *
    public function category(){
        return $this->belongsTo(category::class);
    }

    public function supplier(){
        return $this->belongsTo(supplier::class);
    }

    //Relación polimorfica 1 * 1
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
