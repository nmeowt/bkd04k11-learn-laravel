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

    // Sinh viên
    Route::prefix('student')->name('student.')->group(function () {
        Route::get('/{id}/hide', [StudentController::class, 'hide'])->name('hide');
        Route::get('/insert-by-excel', [StudentController::class, 'insertByExcel'])->name('insert-by-excel');
        Route::post('/insert-by-excel-process', [StudentController::class, 'insertByExcelProcess'])->name('insert-by-excel-process');
        Route::get("/export", [StudentController::class, 'export'])->name('export-excel');
    });
    Route::resource('student', StudentController::class);

    // Lớp
    Route::resource('class', ClassroomController::class);
    Route::group(['name' => 'class.', 'prefix' => 'class'], function () {
        Route::get('/{id}/hide', [ClassroomController::class, 'hide'])->name('hide');
    });
});
