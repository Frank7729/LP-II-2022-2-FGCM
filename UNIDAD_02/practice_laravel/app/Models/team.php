<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    public function cycle(){
        return $this->belongsTo(cycle::class);
    }

    public function school(){
        return $this->belongsTo(school::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
