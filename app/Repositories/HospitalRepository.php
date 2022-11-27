<?php

namespace App\Repositories;

use App\Interfaces\HospitalRepositoryInterface;
use App\Models\Hospital;

class HospitalRepository implements HospitalRepositoryInterface
{
    public function getAllHospital()
    {
        return Hospital::all();
    }

    public function getHospitalById($hospitalId)
    {
        return Hospital::findOrFail($hospitalId);
    }

    public function deleteHospital($hospitalId)
    {
        Hospital::destroy($hospitalId);
    }

    public function createHospital(array $hospitalDetails)
    {
        return Hospital::create($hospitalDetails);
    }

    public function updateHospital($hospitalId, array $newDetails)
    {
        return Hospital::whereId($hospitalId)->update($newDetails);
    }
}
