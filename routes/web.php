<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::method(url, hành động)

// Route lớp
Route::resource('class', ClassroomController::class);
Route::get('class/{id}/hide', [ClassroomController::class, 'hide'])->name('class.hide');
// Dashboard
Route::get('/', function () {
    return view('dashboard');
});
