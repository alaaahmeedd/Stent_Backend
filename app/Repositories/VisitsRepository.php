<?php

namespace App\Repositories;

use App\Interfaces\VisitsRepositoryInterface;
use App\Models\Visits;



class VisitsRepository implements VisitsRepositoryInterface
{


    public function createVisits(array $visitsDetails)
    {
        return Visits::create($visitsDetails);
    }


    public function getAllVisits()
    {
        return Visits::all();
    }


    public function getVisitsById($visitsId)
    {
        return Visits::findOrFail($visitsId);
    }


    public function deleteVisits($visitsId)
    {
        Visits::destroy($visitsId);
    }

    public function updateVisits($visitsId, array $newDetails)
    {
        return Visits::whereId($visitsId)->update($newDetails);
    }
}
