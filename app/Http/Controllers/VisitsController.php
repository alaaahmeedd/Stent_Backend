<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Interfaces\VisitsRepositoryInterface;

class VisitsController extends Controller
{

    private VisitsRepositoryInterface $visitsRepository;

    public function __construct(VisitsRepositoryInterface $visitsRepositoryInterface)
    {
        $this->visitsRepository = $visitsRepositoryInterface;
    }
    public function index()
    {
        return response()->json([
            'data' => $this->visitsRepository->getAllVisits()
        ]);
        //
    }
    public function create(Request $request)
    {
        $visitsDetails = $request->only([
            'patient_id',
            'date_Of_visit',
        ]);

        return response()->json(
            [
                'data' => $this->visitsRepository->createVisits($visitsDetails),
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request)
    {
        $visitsId = $request->route('id');
        return response()->json([
            'data' => $this->visitsRepository->getVisitsById($visitsId)
        ]);
    }

    public function update(Request $request)
    {
        $visitsId = $request->route('id');
        $visitsDetails = $request->only([
            'patient_id',
            'date_Of_visit',

        ]);

        return response()->json([
            'data' => $this->visitsRepository->updateVisits($visitsId, $visitsDetails)
        ]);
        //
    }

    public function destroy(Request $request)
    {
        $visitsId = $request->route('id');
        $this->visitsRepository->deleteVisits($visitsId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
