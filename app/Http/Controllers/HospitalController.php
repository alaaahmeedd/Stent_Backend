<?php

namespace App\Http\Controllers;

use App\Interfaces\HospitalRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HospitalController extends Controller
{

    private HospitalRepositoryInterface $hospitalRepository;

    public function __construct(HospitalRepositoryInterface $hospitalRepository)
    {
        $this->hospitalRepository = $hospitalRepository;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->hospitalRepository->getAllHospital()
        ]);
        //
    }
    public function create(Request $request)
    {
        $hospitalDetails = $request->only([
            'name',
        ]);


        return response()->json(
            [
                'data' => $this->hospitalRepository->createHospital($hospitalDetails),
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request)
    {
        $hospitalId = $request->route('id');
        return response()->json([
            'data' => $this->hospitalRepository->getHospitalById($hospitalId)
        ]);
    }

    public function update(Request $request)
    {
        $hospitalId = $request->route('id');
        $hospitalDetails = $request->only([
            'name'

        ]);

        return response()->json([
            'data' => $this->hospitalRepository->updateHospital($hospitalId, $hospitalDetails)
        ]);
        //
    }

    public function destroy(Request $request)
    {
        $hospitalId = $request->route('id');
        $this->hospitalRepository->deleteHospital($hospitalId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
