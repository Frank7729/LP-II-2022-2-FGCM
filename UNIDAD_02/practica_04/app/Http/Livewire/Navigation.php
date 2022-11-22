<?php

namespace App\Http\Livewire;

use App\Models\category;
use App\Models\supplier;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $categories=category::all();
        $suppliers=supplier::all();
        return view('livewire.navigation', compact('categories','suppliers'));
    }
}
