<?php

namespace App\Repositories;

use App\Interfaces\StentTypeRepositoryInterface;
use App\Models\StentType;



class StentTypeRepository implements StentTypeRepositoryInterface
{


    public function createStentType(array $stentTypeDetails)
    {
        return StentType::create($stentTypeDetails);
    }


    public function getAllStentType()
    {
        return StentType::all();
    }


    public function getStentTypeById($stentTypeId)
    {
        return StentType::findOrFail($stentTypeId);
    }


    public function deleteStentType($stentTypeId)
    {
        StentType::destroy($stentTypeId);
    }

    public function updateStentType($stentTypeId, array $newDetails)
    {
        return StentType::whereId($stentTypeId)->update($newDetails);
    }
}
