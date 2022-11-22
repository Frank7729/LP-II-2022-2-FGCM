<?php

namespace App\Http\Livewire;

use App\Models\category;
use App\Models\supplier;
use Livewire\Component;
use Illuminate\Support\Str;

class SupplierLivewire extends Component
{
    public $isOpen = false;

    public $search;

    public $supplier;

    protected $rules = [
        'supplier.name' => 'required',
        'supplier.slug' => 'required',
        'supplier.direction' => 'required',
        'supplier.phone' => 'required',
        'supplier.email' => 'required',
        'supplier.web' => 'required',
    ];
    protected $listeners = ['render', 'delete' => 'delete'];

    public function render()
    {
        $suppliers = supplier::where('name', 'like', '%' . $this->search . '%')->paginate();
        return view('livewire.supplier-livewire', compact('suppliers'));
    }

    public function create()
    {
        $this->isOpen = true;
        $this->reset(['supplier']);
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();
        if (!isset($this->supplier['id'])) {
            supplier::create($this->supplier);
        } else {
            $supplier = supplier::find($this->supplier['id']);
            $supplier->name = $this->supplier['name'];
            $supplier->slug = $this->supplier['slug'];
            $supplier->direction = $this->supplier['direction'];
            $supplier->phone = $this->supplier['phone'];
            $supplier->email = $this->supplier['email'];
            $supplier->web = $this->supplier['web'];
            $supplier->save();
        }
        $this->reset(['isOpen', 'supplier']);
        $this->emitTo('Crudsupplier', 'render');
        $this->emit('alert', 'Registro creado satisfactoriamente');
    }

    public function edit($supplier)
    {
        //dd($category);
        $this->supplier = $supplier;
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function delete($id)
    {
        supplier::find($id)->delete();
    }

    public function updatedsupplierName()
    {
        $this->supplier['slug'] = Str::slug($this->supplier['name']);
    }
}
