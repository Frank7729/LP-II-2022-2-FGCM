<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $fillable= ['name','slug'];
    use HasFactory;

    public function teams(){
        return $this->hasMany(team::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
