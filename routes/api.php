<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\EmployeesShiftsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/departments', [DepartmentsController::class, 'index']);
Route::post('/departments', [DepartmentsController::class, 'store']);
Route::get('/departments/{id}', [DepartmentsController::class, 'show']);
Route::put('/departments/{id}', [DepartmentsController::class, 'update']);
Route::delete('/departments/{id}', [DepartmentsController::class, 'destroy']);

Route::get('/positions', [PositionsController::class, 'index']);
Route::post('/positions', [PositionsController::class, 'store']);
Route::get('/positions/{id}', [PositionsController::class, 'show']);
Route::put('/positions/{id}', [PositionsController::class, 'update']);
Route::delete('/positions/{id}', [PositionsController::class, 'destroy']);

Route::get('/employees', [EmployeesController::class, 'index']);
Route::post('/employees', [EmployeesController::class, 'store']);
Route::get('/employees/{id}', [EmployeesController::class, 'show']);
Route::put('/employees/{id}', [EmployeesController::class, 'update']);
Route::delete('/employees/{id}', [EmployeesController::class, 'destroy']);

Route::get('/employeesShifts', [EmployeesShiftsController::class, 'index']);
Route::post('/employeesShifts', [EmployeesShiftsController::class, 'store']);
Route::get('/employeesShifts/{id}', [EmployeesShiftsController::class, 'show']);
Route::put('/employeesShifts/{id}', [EmployeesShiftsController::class, 'update']);
Route::delete('/employeesShifts/{id}', [EmployeesShiftsController::class, 'destroy']);