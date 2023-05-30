<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

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

//indexes
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);

//single view
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::get('/companies/{company}', [CompanyController::class, 'show']);
Route::get('/users/{user}', [UserController::class, 'show']);

//show edits
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

//updates
Route::put('/jobs/{job}/edit', [JobController::class, 'update']);

Route::get('/', function() {
    return view('components.layout');
});
