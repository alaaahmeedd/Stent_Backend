<?php

namespace App\Interfaces;

interface HospitalRepositoryInterface
{
    public function getAllHospital();
    public function getHospitalById($hospitalntId);
    public function deleteHospital($hospitalId);
    public function createHospital(array $hospitalDetails);
    public function updateHospital($hospitalId, array $newDetails);
}
