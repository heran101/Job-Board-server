<?php

namespace App\Http\Services;

use App\Models\Employer;

class EmployerService
{
    public function getAllEmployers()
    {
        return Employer::all();
    }

    public function getEmployer($id){
        return Employer::find($id);
    }

    public function createEmployer($data)
    {
        Employer::create($data);
    }

    public function updateEmployer($data, Employer $employer)
    {
        $employer->update($data);
    }

    //delete Employer
    public function deleteEmployer(Employer $employer)
    {
        $employer->delete();
    }

   }
