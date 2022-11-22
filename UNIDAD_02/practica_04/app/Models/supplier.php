<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $fillable=['name', 'slug', 'direction', 'phone', 'email', 'web'];
    use HasFactory;

    public function products(){
        return $this->hasMany(product::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
