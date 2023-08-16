<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('employee-list',[EmployeeController::class,'index']);
Route::get('add-employee',[EmployeeController::class,'addemployee']);
Route::post('save-employee', [EmployeeController::class,'saveemployee']);
Route::get('edit-employee/{id}', [EmployeeController::class,'Editemployee']);
Route::post('update-employee', [EmployeeController::class,'updateemployee']);
Route::get('delete-employee/{id}', [EmployeeController::class,'deleteemployee']);
