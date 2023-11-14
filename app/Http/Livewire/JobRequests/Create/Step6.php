<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step6 extends Component
{
    public $date;

    protected $rules = [
        'date' => 'required',
    ];
    protected $listeners = [
        'currentStep6',
        'backStep6',
    ];

    public function currentStep6()
    {
        $this->validate();
        $this->emit('updateDate', $this->date);
        $this->emit('incrementStep');
    }

    public function backStep6()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create.step6');
    }
}
