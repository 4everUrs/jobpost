<?php

namespace App\Http\Livewire;

use App\Models\ApplicantForm;
use Livewire\Component;
use App\Models\Applicantname;
use App\Models\JobPost;
use App\Models\Vacant;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class Application extends Component
{
    public $name, $position, $email, $phone, $address, $resume_file, $company, $location, $status = 'Screening';
    public $selected_id;
    use WithFileUploads;
    protected $rules = [
        'name' => 'required|string|min:6',
        'position' => 'required|string',
        'email' => ['required', 'email'],
        'phone' => 'required|string',
        'address' => 'required|string',
        'resume_file' => 'required|file',
        'company' => 'required|string',
        'location' => 'required|string',
        'status' => 'required|string'
    ];
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function mount(Request $request)
    {
        $data = JobPost::find($request->id);

        $this->location = $data->location;
        $this->company = $data->name;
        $this->position = $data->position;
    }
    public function render(Request $request)
    {
        $this->selected_id = $request->id;
        return view('livewire.application', [
            'jobs' => Applicantname::all(),
        ])->layout('master');
    }
    public function saveApplication()
    {


        $validatedData = $this->validate();

        $validatedData['resume_file'] = $this->resume_file->store('resume', 'do');

        ApplicantForm::create($validatedData);
        sweetalert()->addSuccess('Application Submitted');
        $this->reset();
    }
    public function resetInput()
    {

        $this->name = null;
        $this->position = null;
        $this->email = null;
        $this->phone = null;
        $this->address = null;
        $this->resume_file = null;
        $this->company = null;
    }
}
