<?php

namespace App\Repositories;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Models\Department;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    public function getAllDepartment()
    {
        return Department::all();
    }

    public function getDepartmentById($departmentId)
    {
        return Department::findOrFail($departmentId);
    }

    public function deleteDepartment($departmentId)
    {
        Department::destroy($departmentId);
    }

    public function createDepartment(array $departmentDetails)
    {
        return Department::create($departmentDetails);
    }

    public function updateDepartment($departmentId, array $newDetails)
    {
        return Department::whereId($departmentId)->update($newDetails);
    }
}
