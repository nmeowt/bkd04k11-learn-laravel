<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::method(url, hành động)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/sinh-vien/{name}', [StudentController::class, 'index']);

// TODO: Tính tổng, bài báo tạo controller
