<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/class', [HomeController::class, 'class'])->name('frontend.class');
Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('frontend.gallery');
Route::get('/single', [HomeController::class, 'single'])->name('frontend.single');
Route::get('/team', [HomeController::class, 'team'])->name('frontend.team');


/*
|--------------------------------------------------------------------------
| Web Backend Routes
|--------------------------------------------------------------------------
*/
// Route::get('/dashboard', function () {
//     return view('backend/index');
// });

Route::get('/dashboard', [Controller::class, 'backendIndex'])->name('backend.index');
Route::get('/register', [AuthController::class, 'register'])->name('backend.auth.register');
Route::post('/register', [AuthController::class, 'create_user'])->name('backend.auth.register.post');
Route::get('/login', [AuthController::class, 'login'])->name('backend.auth.login');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('backend.auth.forgotPassword');
