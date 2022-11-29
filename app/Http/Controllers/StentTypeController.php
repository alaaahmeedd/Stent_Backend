<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Interfaces\StentTypeRepositoryInterface as StentType;

class StentTypeController extends Controller
{
    private StentType $stentTypeRepository;

    public function __construct(StentType $stentTypeRepositoryInterface)
    {
        $this->stentTypeRepository = $stentTypeRepositoryInterface;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->stentTypeRepository->getAllStentType()
        ]);
        //
    }
    public function create(Request $request)
    {
        $departmentDetails = $request->only([
            'department_id',
            'name',
            'days_left'
        ]);


        return response()->json(
            [
                'data' => $this->stentTypeRepository->createStentType($departmentDetails),
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request)
    {
        $departmentId = $request->route('id');
        return response()->json([
            'data' => $this->stentTypeRepository->getStentTypeById($departmentId)
        ]);
    }

    public function update(Request $request)
    {
        $departmentId = $request->route('id');
        $departmentDetails = $request->only([
            'department_id',
            'name',
            'days_left'

        ]);

        return response()->json([
            'data' => $this->stentTypeRepository->updateStentType($departmentId, $departmentDetails)
        ]);
        //
    }

    public function destroy(Request $request)
    {
        $departmentId = $request->route('id');
        $this->stentTypeRepository->deleteStentType($departmentId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
