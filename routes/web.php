<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LopHocController;
use App\Http\Controllers\GiaoVienController;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaiKhoanController;
use Illuminate\Support\Facades\Route;

Route::get('/dang-nhap', [LoginController::class, 'login'])->name("dang-nhap")->middleware('guest');
Route::post('/dang-nhap', [LoginController::class, 'xuLyLogin'])->name("xl-dang-nhap");
Route::get('/dang-ky', [RegisterController::class, 'register'])->name("dang-ky")->middleware('guest');
Route::post('/dang-ky', [RegisterController::class, 'xuLyRegister'])->name("xl-dang-ky");
Route::get('/dang-xuat', [LoginController::class, 'dangXuat'])->name("dang-xuat");

//Các route phải qua đăng nhập
Route::middleware('auth')->group(function () {
    
    //Sinh vien
    Route::get('/sinh-vien', [LopHocController::class, 'layDanhSachLopSV'])->name("trang-chu-sinh-vien");
    Route::get('/sinh-vien/thong-tin', [TaiKhoanController::class, 'thongtinSV'])->name("thong-tin-sv");
    Route::post('/sinh-vien/thong-tin', [TaiKhoanController::class, 'suaThongtinSV'])->name("xl-thong-tin-sv");Route::get('/sinh-vien/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'suaMatKhauSV'])->name("sua-mat-khau-sv");
    Route::post('/sinh-vien/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'xlSuaMatKhauSV'])->name("xl-sua-mat-khau-sv");

    Route::get('/sinh-vien/tham-gia-lop',[LopHocController::class, 'thamGiaLop'])->name("tham-gia-lop");
    Route::post('/sinh-vien/tham-gia-lop',[LopHocController::class, 'xlThamGiaLop'])->name("xl-tham-gia-lop");
    Route::get('/sinh-vien/lop-hoc/{id}', [LopHocController::class, 'chiTietLopHocSV'])->name("chi-tiet-lop-hoc-sv");
    Route::get('/sinh-vien/lop-hoc/{id}/danh-sach', [LopHocController::class, 'dsSinhVienSV'])->name("ds-sinh-vien-sv");

    //Giang vien
    Route::get('/giang-vien', [LopHocController::class, 'layDanhSachLopGV'])->name("trang-chu-giang-vien");
    Route::get('/giang-vien/thong-tin', [TaiKhoanController::class, 'thongtinGV'])->name("thong-tin-gv");
    Route::post('/giang-vien/thong-tin', [TaiKhoanController::class, 'suaThongtinGV'])->name("xl-thong-tin-gv");Route::get('/giang-vien/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'suaMatKhauGV'])->name("sua-mat-khau-gv");
    Route::post('/giang-vien/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'xlSuaMatKhauGV'])->name("xl-sua-mat-khau-gv");

    Route::get('/giang-vien/tao-lop', [LopHocController::class, 'taoLop'])->name("tao-lop");
    Route::post('/giang-vien/tao-lop', [LopHocController::class, 'xlTaoLop'])->name("xl-tao-lop");
    Route::get('/giang-vien/lop-hoc/{id}', [LopHocController::class, 'chiTietLopHocGV'])->name("chi-tiet-lop-hoc-gv");
    Route::get('/giang-vien/lop-hoc/{id}/danh-sach', [LopHocController::class, 'dsSinhVienGV'])->name("ds-sinh-vien-gv");

    //admin
    Route::get('admin/lop-hoc', [LopHocController::class, 'layDanhSach'])->name('danh-sach-lop-hoc');
    Route::get('/', function () {
        return view('admin/trang-chu');
    })->name("trang-chu");
    Route::get('admin/lop-hoc', [LopHocController::class, 'layDanhSach'])->name('danh-sach-lop-hoc');
    Route::get('admin/giao-vien', [GiaoVienController::class, 'layDanhSach'])->name('danh-sach-giao-vien');
    Route::get('admin/sinh-vien',[SinhVienController::class, 'layDanhSach'])->name('danh-sach-sinh-vien');
});
