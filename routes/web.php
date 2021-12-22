<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LopHocController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/dang-nhap', [LoginController::class, 'login'])->name("dang-nhap")->middleware('guest');
Route::post('/dang-nhap', [LoginController::class, 'xuLyLogin'])->name("xl-dang-nhap");
Route::get('/dang-ky', [RegisterController::class, 'register'])->name("dang-ky")->middleware('guest');
Route::post('/dang-ky', [RegisterController::class, 'xuLyRegister'])->name("xl-dang-ky");
Route::get('/dang-xuat', [LoginController::class, 'dangXuat'])->name("dang-xuat");

//Các route phải qua đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin/trang-chu');
    })->name("trang-chu");
    Route::get('/sinh-vien', function () {
        return view('sinh-vien/danh-sach-lop-hoc');
    })->name("trang-chu-sinh-vien");
    Route::get('/sinh-vien/tham-gia-lop', function () {
        return view('sinh-vien/tham-gia-lop');
    })->name("tham-gia-lop");

    Route::get('/giang-vien', function () {
        return view('giang-vien/danh-sach-lop-hoc');
    })->name("trang-chu-giang-vien");

    Route::get('admin/lop-hoc', [LopHocController::class, 'layDanhSach'])->name('danh-sach-lop-hoc');
});
