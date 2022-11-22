<?php

namespace App\Http\Livewire;

use App\Models\cycle;
use Livewire\Component;
use Illuminate\Support\Str;

class CycleLivewire extends Component
{
    public $isOpen = false;

    public $search;

    public $cycle;

    protected $rules = [
        'cycle.name' => 'required',
        'cycle.slug' => 'required',
    ];
    protected $listeners = ['render', 'delete' => 'delete'];

    public function render()
    {
        $cycles = cycle::where('name', 'like', '%' . $this->search . '%')->paginate();
        return view('livewire.cycle-livewire', compact('cycles'));
    }

    public function create()
    {
        $this->isOpen = true;
        $this->reset(['cycle']);
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();
        if (!isset($this->cycle['id'])) {
            cycle::create($this->cycle);
        } else {
            $cycle = cycle::find($this->cycle['id']);
            $cycle->name = $this->cycle['name'];
            $cycle->slug = $this->cycle['slug'];
            $cycle->save();
        }
        $this->reset(['isOpen', 'cycle']);
        $this->emitTo('Crudcycle', 'render');
        $this->emit('alert', 'Registro creado satisfactoriamente');
    }

    public function edit($cycle)
    {
        //dd($category);
        $this->cycle = $cycle;
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function delete($id)
    {
        cycle::find($id)->delete();
    }

    public function updatedcycleName()
    {
        $this->cycle['slug'] = Str::slug($this->cycle['name']);
    }
}
