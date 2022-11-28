<?php

namespace App\Interfaces;

interface StentPatientRepositoryInterface
{
    public function createStentPatient(array $stentPatientDetails);
    public function getAllStentPatient();
    public function getStentPatientById($stentPatientId);
    public function deleteStentPatient($stentPatientId);
    public function updateStentPatient($stentPatientId, array $newDetails);
}
