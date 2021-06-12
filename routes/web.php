<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::method(url, hành động)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/sinh-vien/{name}', [StudentController::class, 'index']);


Route::get('/menu', [MenuController::class, 'index']);

Route::get('/trang-chu', function () {
    return "Trang chủ";
});

Route::get('/trang-ca-nhan', function () {
    return "Trang cá nhân";
});

Route::get('/thong-tin', function () {
    return "Thông tin";
});
