<?php

namespace App\Http\Controllers;
use App\Interfaces\StentPatientRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

class StentPatientController extends Controller
{
    private StentPatientRepositoryInterface $stentPatientRepository;

    public function __construct(StentPatientRepositoryInterface $stentPatientRepository) 
    {         
        $this->stentPatientRepository = $stentPatientRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->stentPatientRepository->getAllStentPatient()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $stentPatientDetails = $request->only([
            'insert_date',
            'removal_date',
        ]);

        return response()->json(
            [
                'data' => $this->stentPatientRepository->createStentPatient($stentPatientDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $stentPatientId = $request->route('id');

        return response()->json([
            'data' => $this->stentPatientRepository->getStentPatientById($stentPatientId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $stentPatientId = $request->route('id');
        $stentPatientDetails = $request->only([
            'insert_date',
            'removal_date',
        ]);

        return response()->json([
            'data' => $this->stentPatientRepository->updateStentPatient($stentPatientId, $stentPatientDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse 
    {
        $stentPatientId = $request->route('id');
        $this->stentPatientRepository->deleteStentPatient($stentPatientId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
    
}
