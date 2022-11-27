<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Interfaces\DepartmentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{

    private DepartmentRepositoryInterface $departmentRepository;

    public function __construct(DepartmentRepositoryInterface $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->departmentRepository->getAllDepartment()
        ]);
        //
    }
    public function create(Request $request)
    {
        $departmentDetails = $request->only([
            'name',
        ]);


        return response()->json(
            [
                'data' => $this->departmentRepository->createDepartment($departmentDetails),
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request)
    {
        $departmentId = $request->route('id');
        return response()->json([
            'data' => $this->departmentRepository->getDepartmentById($departmentId)
        ]);
    }

    public function update(Request $request)
    {
        $departmentId = $request->route('id');
        $departmentDetails = $request->only([
            'name'
           
        ]);

        return response()->json([
            'data' => $this->departmentRepository->updateDepartment($departmentId, $departmentDetails)
        ]);
        //
    }

    public function destroy(Request $request)
    {
        $departmentId = $request->route('id');
        $this->departmentRepository->deleteDepartment($departmentId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
