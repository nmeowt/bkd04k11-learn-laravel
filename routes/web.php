<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

// Route::method(url, hành động)

// Authenticate
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login-process', [LoginController::class, 'process'])->name('login-process');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Lớp
Route::resource('class', ClassroomController::class);
Route::get('class/{id}/hide', [ClassroomController::class, 'hide'])->name('class.hide');
// Dashboard
// Route::get('/', function () {
//     return view('dashboard');
// });
