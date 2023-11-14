<?php

namespace App\Http\Livewire\JobRequests\Create;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Step8 extends Component
{
    protected $listeners = [
        'currentStep8',
        'backStep8',
    ];

    public function currentStep8()
    {
        $this->emit('confirmedUser');
    }

    public function backStep8()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create.step8');
    }
}
