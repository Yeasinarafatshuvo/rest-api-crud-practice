<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('employee', [EmployeeController::class, 'getEmployee']);
Route::get('employee/{id}', [EmployeeController::class, 'getEmployeId']);
Route::post('addemployee', [EmployeeController::class, 'addEmploye']);
Route::put('updateemployee/{id}', [EmployeeController::class, 'updaeteEmployee']);
Route::delete('deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);

