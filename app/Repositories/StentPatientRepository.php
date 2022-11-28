<?php

namespace App\Repositories;

use App\Interfaces\StentPatientRepositoryInterface;
use App\Models\StentPatient;


class StentPatientRepository implements StentPatientRepositoryInterface 
{

    public function createStentPatient(array $stentPatientDetails) 
    {
        return StentPatient::create($stentPatientDetails);
    }

    public function getAllStentPatient() 
    {
        return StentPatient::all();
    }
    public function getStentPatientById($stentPatientId) 
    {
        return StentPatient::findOrFail($stentPatientId);
    }

    public function deleteStentPatient($stentPatientId) 
    {
        StentPatient::destroy($stentPatientId);
    }


    public function updateStentPatient($stentPatientId, array $newDetails) 
    {
        return StentPatient::whereId($stentPatientId)->update($newDetails);
    }

   
    
}