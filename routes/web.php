<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Middleware\CheckLogin;

// Route::method(url, hành động)

// Authenticate
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login-process', [LoginController::class, 'process'])->name('login-process');
// Dashboard
Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Lớp
    Route::resource('class', ClassroomController::class);
    Route::get('class/{id}/hide', [ClassroomController::class, 'hide'])->name('class.hide');
});
