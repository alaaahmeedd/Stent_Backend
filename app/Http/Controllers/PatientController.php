<?php

namespace App\Http\Controllers;
use App\Interfaces\PatientRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

class PatientController extends Controller
{
    private PatientRepositoryInterface $patientRepository;

    public function __construct(PatientRepositoryInterface $patientRepository) 
    {
        $this->patientRepository = $patientRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->patientRepository->getAllPatients()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $patientDetails = $request->only([
            'name',
            'email',
            'phone',
            'birth_date'
        ]);

        return response()->json(
            [
                'data' => $this->patientRepository->createPatient($patientDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $patientId = $request->route('id');

        return response()->json([
            'data' => $this->patientRepository->getPatientById($patientId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $patientId = $request->route('id');
        $patientDetails = $request->only([
            'name',
            'email',
            'phone',
            'birth_date'
        ]);

        return response()->json([
            'data' => $this->patientRepository->updatePatient($patientId, $patientDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse 
    {
        $patientId = $request->route('id');
        $this->patientRepository->deletePatient($patientId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
    
}
