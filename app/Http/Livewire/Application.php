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
    
    public function mount(Request $request)
    {
        $data = JobPost::find($request->id);
        $this->selected_id = $request->id;
        $this->location = $data->location;
        $this->company = $data->name;
        $this->position = $data->position;
    }
    public function render(Request $request)
    {
        return view('livewire.application',[
            'jobs' => ApplicantForm::all(),
        ])->layout('master');
    }
    public function saveApplication (Request $request)
    {      
        $validatedData = $this->validate([
            'name' => 'required|string|min:6',
            'position' => 'required|string',
            'email' => ['required','email'],
            'phone' => 'required|string|min:11',
            'address' => 'required|string',
            'resume_file' => 'required|file',
            'company' => 'required|string',
            'location' => 'required|string',
            'status' => 'required|string'
        ]);
        $validatedData['listing_id'] = $this->selected_id;
        $validatedData['resume_file'] = $this->resume_file->store('resume','do');
        
        ApplicantForm::create($validatedData);
        
        $this->resetInput();
        sweetalert()->addSuccess('Successfully Applied');
        
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
