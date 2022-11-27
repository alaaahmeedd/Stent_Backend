<?php

namespace App\Interfaces;

interface DepartmentRepositoryInterface
{
    public function getAllDepartment();
    public function getDepartmentById($departmentId);
    public function deleteDepartment($departmentId);
    public function createDepartment(array $departmentDetails);
    public function updateDepartment($departmentId, array $newDetails);
}
