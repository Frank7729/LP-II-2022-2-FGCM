<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable=['name', 'slug', 'description'];
    use HasFactory;

    public function products(){
        return $this->hasMany(product::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
