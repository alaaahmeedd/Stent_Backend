<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Interfaces\StaffRepositoryInterface;
use Illuminate\Http\ijh
;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StaffController extends Controller
{

    private StaffRepositoryInterface $staffRepository;

    public function __construct(StaffRepositoryInterface $staffRepository) 
    {
        $this->staffRepository = $staffRepository;
    }

    
    public function register(Request $request)
    {
        $data = $request->only('f_name', 'l_name' , 'email', 'password', 'birth_date', 'phone', 'position', 'is_admin');
        $validator = Validator::make($data, [
            'f_name' => 'required|string',
            'l_name' => 'required|string',
            'email' => 'required|email|unique:staff',
            'password' => 'required|string|min:6|max:50',
            'birth_date' => 'required|date|date_format:"Y/m/d',
            'phone' => 'required|string',
            'position' => 'required|string',
            'is_admin' => 'required|boolean',
            

        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 401);
        }
        $data['password'] = bcrypt($data['password']);

        return response()->json([
            'success' => true,
            'message' => 'Staff created successfully',
            'data' => $this->staffRepository->createStaff($data)
        ], Response::HTTP_OK);
    }

    
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 401);
        }

        
        //Request is validated
        //Crean token
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                	'success' => false,
                	'message' => 'Login credentials are invalid.',
                ], 400);
            }
        } catch (JWTException $e) {
    	return $credentials;
            return response()->json([
                	'success' => false,
                	'message' => 'Could not create token.',
                ], 500);
        }
 	
 		//Token created, return with success response and jwt token
        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => JWTAuth::user()
            // 'user' => JWTAuth::toUser($token)
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Staff created successfully',
            'data' => $this->staffRepository->getAllStaff()
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffRequest  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
