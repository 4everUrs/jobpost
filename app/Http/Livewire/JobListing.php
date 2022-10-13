<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JobPost;

class JobListing extends Component
{
    public $applicationModal =false;
    public function render()
    {
        return view('livewire.job-listing',[
            'jobs' => JobPost::all(),
        ])->layout('master');
    }
    public function apply(){
        dd('test');
    }
}
