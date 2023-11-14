<?php

namespace App\Http\Livewire\JobRequests\Create;

use App\Models\Category;
use App\Models\JobRequest as JobRequestModel;
use App\Models\JobRequestImage;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateJobRequest extends Component
{
    use WithFileUploads;

    public $step = 1;
    public $description = '';
    public $image;
    public $imagePaths = [];
    public $skill, $category, $location, $place,  $tools, $date, $address, $skillName, $categoryName;

    protected $rules = [
        'description'    => 'required|string',
        'location'       => 'required',
        'place'          => 'required',
        'tools'          => 'required',
        'image'          => 'required',
        'date'           => 'required',
        'address'        => 'required',
    ];


    protected $listeners = [
        'updateDescription',
        'updateLocation',
        'updatePlace',
        'updateTools',
        'updateImage',
        'updateImagePaths',
        'updateDate',
        'updateAddress',
        'incrementStep',
        'decrementStep',
        'submitJobRequest',
        'confirmedUser',

    ];

    public function updateDescription($data)
    {
        $this->description = $data['description'];
        $category = Category::find($data['category']);
        $this->category = $data['category'];
        $this->categoryName = $category ? $category->name : '';

        $skill = Skill::find($data['skill']);
        $this->skill = $data['skill'];
        $this->skillName = $skill ? $skill->name : '';
    }

    public function updateLocation($location)
    {
        $this->location = $location;
    }

    public function updatePlace($place)
    {
        $this->place = $place;
    }

    public function updateTools($tools)
    {
        $this->tools = $tools;
    }

    public function updateImage($image)
    {
        $this->image = $image;
    }

    public function updateImagePaths($paths)
    {
        $this->imagePaths = $paths;
    }

    public function updateDate($date)
    {
        $this->date = $date;
    }

    public function updateAddress($address)
    {
        $this->address = $address;
    }

    public function render()
    {
        return view('livewire.job-requests.create.create-job-request');
    }

    public function incrementStep()
    {
        $this->step++;
    }

    public function decrementStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function nextStep()
    {
        $this->emit('currentStep' . $this->step);
    }

    public function beforeStep()
    {
        $this->emit('backStep' . $this->step);
    }

    public function confirmedUser()
    {
        if (Auth::check()) {
            $this->createJobRequest();
        } else {
            session(['job_request_data' => [
                'description' => $this->description,
                'category'    => $this->category,
                'skill'       => $this->skill,
                'location'    => $this->location,
                'place'       => $this->place,
                'tools'       => $this->tools,
                'image'       => $this->image,
                'imagePaths'  => $this->imagePaths,
                'date'        => $this->date,
                'address'     => $this->address,
            ]]);

            return redirect()->route('login');
        }
    }

    public function createJobRequest()
    {
        $this->validate();

        $jobRequest = new JobRequestModel([
            'user_id'     => auth()->user()->id,
            'category_id' => $this->category,
            'skill_id'    => $this->skill,
            'description' => $this->description,
            'location'    => $this->location,
            'place'       => $this->place,
            'tools'       => $this->tools,
            'image'       => $this->image,
            'date'        => $this->date,
            'address'     => $this->address,
        ]);

        $jobRequest->save();

        foreach ($this->imagePaths as $path) {
            $jobRequestImage = new JobRequestImage([
                'job_request_id' => $jobRequest->id,
                'image_path' => $path,
            ]);
            $jobRequestImage->save();
        }

        session()->forget('job_request_data');

        return redirect()->route('list-job-request');
    }
}
