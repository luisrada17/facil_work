<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step3 extends Component
{
    public $place;

    protected $rules = [
        'place' => 'required',
    ];

    protected $listeners = [
        'currentStep3',
        'backStep3',
    ];

    public function currentStep3()
    {
        $this->validate();
        $this->emit('updatePlace', $this->place);
        $this->emit('incrementStep');
    }

    public function backStep3()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create.step3');
    }
}
