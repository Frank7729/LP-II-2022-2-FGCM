<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Relación inversa de 1 a *
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación de * a *
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relación polimórfica de 1 a 1
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
