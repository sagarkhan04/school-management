<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [Controller::class, 'index'])->name('frontend.index');
Route::get('/dashboard', [Controller::class, 'backendIndex'])->name('backend.index');


/*
|--------------------------------------------------------------------------
| Web Backend Routes
|--------------------------------------------------------------------------
*/
// Route::get('/dashboard', function () {
//     return view('backend/index');
// });

Route::get('/register', [AuthController::class, 'register'])->name('backend.auth.register');
Route::get('/login', [AuthController::class, 'login'])->name('backend.auth.login');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('backend.auth.forgotPassword');
