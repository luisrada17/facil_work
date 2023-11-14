<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step2 extends Component
{
    public $location = '';

    protected $rules = [
        'location' => 'required',
    ];
    protected $listeners = [
        'currentStep2',
        'backStep2',
    ];

    public function currentStep2()
    {
        $this->validate();
        $this->emit('updateLocation', $this->location);
        $this->emit('incrementStep');
    }

    public function backStep2()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create.step2');
    }
}
