<?php

namespace App\Interfaces;

interface StentTypeRepositoryInterface
{
    public function createStentType(array $stentTypeDetails);
    public function getAllStentType();
    public function getStentTypeById($stentTypeId);
    public function deleteStentType($stentTypeId);
    public function updateStentType($stentTypeId, array $newDetails);
}
