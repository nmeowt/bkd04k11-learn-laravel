<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::method(url, hành động)

// Thêm lớp
Route::get('/class/create', [ClassroomController::class, 'create']);
Route::post('/class/store', [ClassroomController::class, 'store'])->name('store-class');
