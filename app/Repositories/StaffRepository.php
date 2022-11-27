<?php

namespace App\Repositories;

use App\Interfaces\StaffRepositoryInterface;
use App\Models\Staff;


class StaffRepository implements StaffRepositoryInterface 
{

    public function createStaff(array $staffDetails) 
    {
        return Staff::create($staffDetails);
    }

    public function getAllStaff() 
    {
        return Staff::all();
    }
    public function getStaffById($staffId) 
    {
        return Staff::findOrFail($staffId);
    }

    public function deleteStaff($staffId) 
    {
        Staff::destroy($staffId);
    }


    public function updateStaff($staffId, array $newDetails) 
    {
        return Staff::whereId($staffId)->update($newDetails);
    }

   
    
}