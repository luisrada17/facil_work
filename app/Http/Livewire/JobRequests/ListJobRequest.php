<?php

namespace App\Http\Livewire\JobRequests;

use App\Models\JobRequest;
use Livewire\Component;
use Livewire\WithPagination;

class ListJobRequest extends Component
{
    use WithPagination;

    public $search;

    public $sort = 'id';

    public $direction = 'desc';

    public $open = false;

    protected $listeners = ['renderJob'];

    public function renderJob()
    {
        $this->render();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $jobRequests = JobRequest::where('description', 'like', '%'.$this->search.'%')
            ->orderBy($this->sort, $this->direction)
            ->paginate(8);

        return view('livewire.job-requests.list-job-request', compact('jobRequests'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            $this->direction = ($this->direction == 'desc') ? 'asc' : 'desc';
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
