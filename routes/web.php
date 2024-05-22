<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/data', [HomeController::class, 'data_table'])->name('data');

Route::get('/employee', [EmployeeController::class, 'show'])->name('employee');
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/post', [EmployeeController::class, 'store']);
Route::patch('/employee/update', [EmployeeController::class, 'update']);
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::post('/employee/delete', [EmployeeController::class, 'delete']);

