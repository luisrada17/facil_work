<?php

// app/Http/Livewire/Navbar.php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    // public $isDarkMode = false;

    // public function toggleDarkMode()
    // {
    //     $this->isDarkMode = !$this->isDarkMode;
    // }

    public function render()
    {
        return view('livewire.navbar', [
            // 'isDarkMode' => $this->isDarkMode,
        ]);
    }
}