<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DetailsDoctorComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $doctor = Doctor::where('slug', $this->slug)->first();

        return view('livewire.details-doctor-component', ['doctor' => $doctor])->layout('layouts.base');
    }
}
