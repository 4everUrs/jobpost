<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;

class JobPostController extends Controller
{
    public function index()
    {
        return view ('job-listing',[
            'jobs' => JobPost::all(),
        ]);
    }
}
