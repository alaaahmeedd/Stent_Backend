<?php

namespace App\Interfaces;

interface StaffRepositoryInterface 
{
    public function createStaff(array $staffDetails);

    public function getAllStaff();
    public function getStaffById($staffId);
    public function deleteStaff($staffId);
    public function updateStaff($staffId, array $newDetails);
    
}