<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class HomeSliderComponent extends Component
{
    public function deleteSlide($id)
    {
        $slide = HomeSlider::find($id);
        $slide->delete();
        session()->flash('message', 'slider has been delete successfully!');
    }
    public function render()
    {

        $sliders = HomeSlider::all();
        return view('livewire.admin.home-slider-component', ['sliders' => $sliders])->layout('layouts.base');
    }
}
