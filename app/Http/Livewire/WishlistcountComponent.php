<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishlistcountComponent extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function render()
    {
        return view('livewire.wishlistcount-component');
    }
}
