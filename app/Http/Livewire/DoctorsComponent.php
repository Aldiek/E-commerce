<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Doctor;
use Livewire\Component;

class DoctorsComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $doctors = Doctor::paginate(12);
        return view('livewire.doctors-component', ['doctors' => $doctors])->layout('layouts.base');
    }
}
