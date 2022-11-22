<?php

namespace App\Http\Livewire;

use App\Models\school;
use Livewire\Component;
use Illuminate\Support\Str;

class SchoolLivewire extends Component
{
    public $isOpen = false;

    public $search;

    public $school;

    protected $rules = [
        'school.name' => 'required',
        'school.slug' => 'required',
    ];
    protected $listeners = ['render', 'delete' => 'delete'];

    public function render()
    {
        $schools = school::where('name', 'like', '%' . $this->search . '%')->paginate();
        return view('livewire.school-livewire', compact('schools'));
    }

    public function create()
    {
        $this->isOpen = true;
        $this->reset(['school']);
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();
        if (!isset($this->school['id'])) {
            school::create($this->school);
        } else {
            $school = school::find($this->school['id']);
            $school->name = $this->school['name'];
            $school->slug = $this->school['slug'];
            $school->save();
        }
        $this->reset(['isOpen', 'school']);
        $this->emitTo('Crudschool', 'render');
        $this->emit('alert', 'Registro creado satisfactoriamente');
    }

    public function edit($school)
    {
        //dd($category);
        $this->school = $school;
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function delete($id)
    {
        school::find($id)->delete();
    }

    public function updatedschoolName()
    {
        $this->school['slug'] = Str::slug($this->school['name']);
    }
}
