<?php

namespace App\Interfaces;

interface VisitsRepositoryInterface
{
    public function createVisits(array $visitsDetails);
    public function getAllVisits();
    public function getVisitsById($visitsId);
    public function deleteVisits($visitsId);
    public function updateVisits($visitsId, array $newDetails);
}
