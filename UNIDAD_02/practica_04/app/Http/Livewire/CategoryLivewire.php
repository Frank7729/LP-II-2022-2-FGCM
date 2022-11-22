<?php

namespace App\Http\Livewire;

use App\Models\category;
use Livewire\Component;
use Illuminate\Support\Str;

class CategoryLivewire extends Component
{
    public $isOpen = false;

    public $search;

    public $category;

    protected $rules = [
        'category.name' => 'required',
        'category.slug' => 'required',
        'category.description' => 'required',
    ];
    protected $listeners = ['render', 'delete' => 'delete'];

    public function render()
    {
        $categories = category::where('name', 'like', '%' . $this->search . '%')->paginate();
        return view('livewire.category-livewire', compact('categories'));
    }

    public function create()
    {
        $this->isOpen = true;
        $this->reset(['category']);
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();
        if (!isset($this->category['id'])) {
            category::create($this->category);
        } else {
            $category = category::find($this->category['id']);
            $category->name = $this->category['name'];
            $category->slug = $this->category['slug'];
            $category->description = $this->category['description'];
            $category->save();
        }
        $this->reset(['isOpen', 'category']);
        $this->emitTo('Crudcategory', 'render');
        $this->emit('alert', 'Registro creado satisfactoriamente');
    }

    public function edit($category)
    {
        //dd($category);
        $this->category = $category;
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function delete($id)
    {
        category::find($id)->delete();
    }

    public function updatedCategoryName()
    {
        $this->category['slug'] = Str::slug($this->category['name']);
    }
}
