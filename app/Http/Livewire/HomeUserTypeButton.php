<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeUserTypeButton extends Component
{
    public $role;
    public $label;
    
    public function render()
    {
        return view('livewire.home-user-type-button');
    }
}
