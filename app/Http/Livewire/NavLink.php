<?php

// app/Http/Livewire/NavLink.php

namespace App\Http\Livewire;

use Livewire\Component;

class NavLink extends Component
{
    public $active;
    public $href;

    public function render()
    {
        return view('livewire.nav-link');
    }
}

