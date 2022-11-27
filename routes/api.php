<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\StaffController;
=======
use App\Http\Controllers\DepartmentController;

>>>>>>> b6747a9d0553aba60c919a1f60c357ee01b2fdf5

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

<<<<<<< HEAD
Route::post('login', [StaffController::class, 'login']);
Route::post('register', [StaffController::class, 'register']);
=======
Route::get('department', [DepartmentController::class, 'index']);
Route::get('department/{id}', [DepartmentController::class, 'show']);
Route::put('department/{id}', [DepartmentController::class, 'update']);
Route::put('department/{id}', [DepartmentController::class, 'destroy']);
Route::post('department', [DepartmentController::class, 'create']);
>>>>>>> b6747a9d0553aba60c919a1f60c357ee01b2fdf5

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
