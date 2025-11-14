<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;


Route::get('/', [HomeController::class, 'index'])->name('index.blade.php');
Route::resource('products', ProductController::class);
Route::resource('students', StudentController::class);
Route::resource('clients', ClientController::class);
Route::resource('employees', EmployeeController::class);