<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step7 extends Component
{
    public $address;

    protected $rules = [
        'address' => 'required',
    ];
    protected $listeners = [
        'currentStep7',
        'backStep7',
    ];

    public function currentStep7()
    {
        $this->validate();
        $this->emit('updateAddress', $this->address);
        $this->emit('incrementStep');
    }

    public function backStep7()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create.step7');
    }
}
