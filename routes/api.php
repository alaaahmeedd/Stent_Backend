<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StentTypeController;
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

Route::post('StentType', [StentTypeController::class, 'store']);
Route::get('StentType/{id}', [StentTypeController::class, 'show']);
Route::put('StentType/{id}', [StentTypeController::class, 'update']);
Route::put('StentType/{id}', [StentTypeController::class, 'destroy']);
Route::get('StentType', [StentTypeController::class, 'index']);



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
Route::group(['middleware' => ['jwt.verify']], function () {
    // Department
    Route::get('department', [DepartmentController::class, 'index']);
    Route::get('department/{id}', [DepartmentController::class, 'show']);
    Route::put('department/{id}', [DepartmentController::class, 'update']);
    Route::put('department/{id}', [DepartmentController::class, 'destroy']);
    Route::post('department', [DepartmentController::class, 'create']);

    // Patient
    Route::post('patient', [PatientController::class, 'store']);
    Route::get('patient/{id}', [PatientController::class, 'show']);
    Route::put('patient/{id}', [PatientController::class, 'update']);
    Route::put('patient/{id}', [PatientController::class, 'destroy']);
    Route::get('patient', [PatientController::class, 'index']);

    //Stent Type

    // return $request->user();
});
