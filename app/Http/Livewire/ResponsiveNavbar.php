<?php

// app/Http/Livewire/ResponsiveNavbar.php

namespace App\Http\Livewire;

use Livewire\Component;

class ResponsiveNavbar extends Component
{
    public $isDarkMode = false;
    public $isMenuOpen = false;

    public function toggleDarkMode()
    {
        $this->isDarkMode = !$this->isDarkMode;
    }

    public function toggleMenu()
    {
        $this->isMenuOpen = !$this->isMenuOpen;
    }

    public function render()
    {
        return view('livewire.responsive-navbar', [
            'isDarkMode' => $this->isDarkMode,
            'isMenuOpen' => $this->isMenuOpen,
        ]);
    }
}
