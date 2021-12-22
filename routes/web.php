<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/dang-nhap', [LoginController::class, 'login'])->name("dang-nhap")->middleware('guest');
Route::post('/dang-nhap', [LoginController::class,'xuLyLogin'])->name("xl-dang-nhap");
Route::get('/dang-ky', [RegisterController::class, 'register'])->name("dang-ky")->middleware('guest');
Route::post('/dang-ky', [RegisterController::class,'xuLyRegister'])->name("xl-dang-ky");
Route::get('/dang-xuat', [LoginController::class,'dangXuat'])->name("dang-xuat");

//Các route phải qua đăng nhập
Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('layouts/layout');
    })->name("trang-chu");
});
