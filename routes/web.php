<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LopHocController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dang-nhap', [LoginController::class, 'login'])->name("dang-nhap")->middleware('guest');
Route::post('/dang-nhap', [LoginController::class,'xuLyLogin'])->name("xl-dang-nhap");
Route::get('/dang-xuat', [LoginController::class,'dangXuat'])->name("dang-xuat");
//Các route phải qua đăng nhập
Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('admin/trang-chu');
    })->name("trang-chu");
    Route::get('admin/lop-hoc', [LopHocController::class,'layDanhSach'])->name('danh-sach-lop-hoc');
});
