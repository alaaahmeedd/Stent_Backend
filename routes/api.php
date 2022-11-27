<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PatientController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [StaffController::class, 'login']);
Route::post('register', [StaffController::class, 'register']);

Route::get('department', [DepartmentController::class, 'index']);
Route::get('department/{id}', [DepartmentController::class, 'show']);
Route::put('department/{id}', [DepartmentController::class, 'update']);
Route::put('department/{id}', [DepartmentController::class, 'destroy']);
Route::post('department', [DepartmentController::class, 'create']);

Route::post('patient', [PatientController::class, 'store']);
Route::get('patient', [PatientController::class, 'index']);
Route::get('patient/{id}', [PatientController::class, 'show']);
Route::put('patient/{id}', [PatientController::class, 'update']);
Route::put('patient/{id}', [PatientController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
