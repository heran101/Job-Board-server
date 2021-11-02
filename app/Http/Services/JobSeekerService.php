<?php

namespace App\Http\Services;

use App\Models\JobSeeker;

class JobSeekerService
{
    public function getAllJobSeekers(){
        return JobSeeker::all();
    }
    public function getJobSeeker($id){
        return JobSeeker::find($id);
    }
}
