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
Route::get('/dang-xuat', [LoginController::class, 'dangXuat'])->name("dang-xuat");

Route::get('/quen-mat-khau', [RegisterController::class, 'quenMatKhau'])->name('quen-mat-khau');
Route::post('/quen-mat-khau',[RegisterController::class,'xlXacThuc'])->name("xl-quen-mat-khau");
Route::get('/quen-mat-khau/xac-nhan-mail', [RegisterController::class, 'formXacNhanMail'])->name('xac-nhan-mail');
Route::post('/quen-mat-khau/xac-nhan-mail',[RegisterController::class,'xlXacNhanMail'])->name("xl-xac-nhan-mail");
Route::get('/thay-doi-mat-khau/{id}',[RegisterController::class, 'formThayDoiMatKhau'])->name('thay-doi-mat-khau');
Route::post('/thay-doi-mat-khau/{id}',[RegisterController::class, 'xlThayDoiMatKhau'])->name('xl-thay-doi-mat-khau');

//Các route phải qua đăng nhập
Route::middleware('auth')->group(function () {
    
    //Sinh vien
    Route::middleware('sinhvien')->group(function(){
        Route::get('/sinh-vien', [LopHocController::class, 'layDanhSachLopSV'])->name("trang-chu-sinh-vien");
        Route::get('/sinh-vien/thong-tin', [TaiKhoanController::class, 'thongtinSV'])->name("thong-tin-sv");
        Route::post('/sinh-vien/thong-tin', [TaiKhoanController::class, 'suaThongtinSV'])->name("xl-thong-tin-sv");Route::get('/sinh-vien/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'suaMatKhauSV'])->name("sua-mat-khau-sv");
        Route::post('/sinh-vien/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'xlSuaMatKhauSV'])->name("xl-sua-mat-khau-sv");
    
        Route::get('/sinh-vien/tham-gia-lop',[LopHocController::class, 'thamGiaLop'])->name("tham-gia-lop");
        Route::post('/sinh-vien/tham-gia-lop',[LopHocController::class, 'xlThamGiaLop'])->name("xl-tham-gia-lop");
        Route::get('/sinh-vien/lop-hoc/{id}', [LopHocController::class, 'chiTietLopHocSV'])->name("chi-tiet-lop-hoc-sv");
        Route::get('/sinh-vien/lop-hoc/{id}/danh-sach', [LopHocController::class, 'dsSinhVienSV'])->name("ds-sinh-vien-sv");
    });

    //Giang vien
   Route::middleware('giaovien')->group(function(){
        Route::get('/giang-vien', [LopHocController::class, 'layDanhSachLopGV'])->name("trang-chu-giang-vien");
        Route::get('/giang-vien/thong-tin', [TaiKhoanController::class, 'thongtinGV'])->name("thong-tin-gv");
        Route::post('/giang-vien/thong-tin', [TaiKhoanController::class, 'suaThongtinGV'])->name("xl-thong-tin-gv");
        Route::get('/giang-vien/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'suaMatKhauGV'])->name("sua-mat-khau-gv");
        Route::post('/giang-vien/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'xlSuaMatKhauGV'])->name("xl-sua-mat-khau-gv");

        Route::get('/giang-vien/tao-lop', [LopHocController::class, 'taoLop'])->name("tao-lop");
        Route::post('/giang-vien/tao-lop', [LopHocController::class, 'xlTaoLop'])->name("xl-tao-lop");
        Route::get('/giang-vien/sua-lop/{id}', [LopHocController::class, 'suaLop'])->name("sua-lop");
        Route::post('/giang-vien/sua-lop/{id}', [LopHocController::class, 'xlSuaLop'])->name("xl-sua-lop");
        Route::get('/giang-vien/lop-hoc/{id}', [LopHocController::class, 'chiTietLopHocGV'])->name("chi-tiet-lop-hoc-gv");
        Route::get('/giang-vien/lop-hoc/{id}/danh-sach', [LopHocController::class, 'dsSinhVienGV'])->name("ds-sinh-vien-gv");
        //bài giảng
        Route::get('/giang-vien/lop-hoc/{id}/bai-giang', [LopHocController::class, 'dsBaiGiangGV'])->name("ds-bai-giang-gv");
        Route::post('/giang-vien/bai-giang/tao-bai-giang/{id}', [LopHocController::class, 'xlThemBaiGiangGV'])->name("xl-them-bai-giang-gv");
        Route::get('/giang-vien/bai-giang/sua-bai-giang/{id}/{idbg}', [LopHocController::class, 'formSuaBaiGiangGV'])->name("sua-bai-giang");
        Route::post('/giang-vien/bai-giang/sua-bai-giang/{id}/{idbg}', [LopHocController::class, 'xlSuaBaiGiangGV'])->name("xl-sua-bai-giang");
        Route::get('/giang-vien/bai-giang/xoa-bai-giang/{id}/{idbg}', [LopHocController::class, 'xoaBaiGiangGV'])->name("xl-xoa-bai-giang");
        //bài tập
        Route::get('/giang-vien/lop-hoc/{id}/bai-tap', [LopHocController::class, 'dsBaiTapGV'])->name("ds-bai-tap-gv");
        Route::post('/giang-vien/bai-giang/tao-bai-tap/{id}', [LopHocController::class, 'xlThemBaiTapGV'])->name("xl-them-bai-tap-gv");
        Route::get('/giang-vien/bai-giang/sua-bai-tap/{id}/{idbt}', [LopHocController::class, 'formSuaBaiTapGV'])->name("sua-bai-tap");
        Route::post('/giang-vien/bai-giang/sua-bai-tap/{id}/{idbt}', [LopHocController::class, 'xlSuaBaiTapGV'])->name("xl-sua-bai-tap");
        Route::get('/giang-vien/bai-giang/xoa-bai-tap/{id}/{idbt}', [LopHocController::class, 'xoaBaiTapGV'])->name("xl-xoa-bai-tap");
        //bài kiểm tra
        Route::get('/giang-vien/lop-hoc/{id}/bai-kiem-tra', [LopHocController::class, 'dsBaiKiemTraGV'])->name("ds-bai-kiem-tra-gv");
        Route::post('/giang-vien/bai-giang/tao-bai-kt/{id}', [LopHocController::class, 'xlThemBaiKTGV'])->name("xl-them-bai-kt-gv");
        Route::get('/giang-vien/bai-giang/sua-bai-kt/{id}/{idkt}', [LopHocController::class, 'formSuaBaiKTGV'])->name("sua-bai-kt");
        Route::post('/giang-vien/bai-giang/sua-bai-kt/{id}/{idkt}', [LopHocController::class, 'xlSuaBaiKTGV'])->name("xl-sua-bai-kt");
        Route::get('/giang-vien/bai-giang/xoa-bai-kt/{id}/{idkt}', [LopHocController::class, 'xoaBaiKTGV'])->name("xl-xoa-bai-kt");
        //thông báo
        Route::get('/giang-vien/lop-hoc/{id}/thong-bao', [LopHocController::class, 'dsThongBaoGV'])->name("ds-thong-bao-gv");
        Route::post('/giang-vien/bai-giang/tao-bai-tb/{id}', [LopHocController::class, 'xlThemBaiTBGV'])->name("xl-them-bai-tb-gv");
        Route::get('/giang-vien/bai-giang/sua-bai-tb/{id}/{idtb}', [LopHocController::class, 'formSuaBaiTBGV'])->name("sua-bai-tb");
        Route::post('/giang-vien/bai-giang/sua-bai-tb/{id}/{idtb}', [LopHocController::class, 'xlSuaBaiTBGV'])->name("xl-sua-bai-tb");
        Route::get('/giang-vien/bai-giang/xoa-bai-tb/{id}/{idtb}', [LopHocController::class, 'xoaBaiTBGV'])->name("xl-xoa-bai-tb");

        Route::get('/giang-vien/xoa-lop/{id}', [LopHocController::class, 'xoaLop'])->name("xoa-lop");
        Route::get('/giang-vien/duyet-tham-gia/{idLop}/{idSv}', [LopHocController::class, 'xlDuyetThamGia'])->name("xl-duyet-tham-gia");
        Route::get('/giang-vien/xoa-duyet-tham-gia/{idLop}/{idSv}', [LopHocController::class, 'xlXoaDuyetThamGia'])->name("xl-xoa-duyet-tham-gia");
        Route::get('/giang-vien/xoaSV/{idLop}/{idSv}', [LopHocController::class, 'xlXoaThamGia'])->name("xl-xoa-sv-tham-gia");
        
   });

    //admin
    Route::middleware('admin')->group(function(){
        Route::get('/', function () {
            return view('admin/trang-chu');
        })->name("trang-chu");
        Route::get('admin/lop-hoc', [LopHocController::class, 'layDanhSach'])->name('danh-sach-lop-hoc');
        Route::get('admin/giao-vien', [GiaoVienController::class, 'layDanhSach'])->name('danh-sach-giao-vien');
        Route::get('admin/giao-vien/reset-mat-khau-gv/{id}',[GiaoVienController::class, 'resetMatKhau'])->name('reset-mat-khau-gv');
        Route::get('admin/sinh-vien',[SinhVienController::class, 'layDanhSach'])->name('danh-sach-sinh-vien');

        Route::get('admin/sinh-vien/reset-mat-khau-gv/{id}',[SinhVienController::class, 'resetMatKhau'])->name('reset-mat-khau-sv');

        Route::get('/admin/thong-tin', [TaiKhoanController::class, 'thongtin'])->name("thong-tin");
        Route::post('/admin/thong-tin', [TaiKhoanController::class, 'suaThongtin'])->name("xl-thong-tin");
        Route::get('/admin/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'suaMatKhau'])->name("sua-mat-khau");
        Route::post('/admin/thong-tin/thay-doi-mat-khau', [TaiKhoanController::class, 'xlSuaMatKhau'])->name("xl-sua-mat-khau");
        Route::get('/admin/lop-hoc/chi-tiet-lop-hoc/{id}', [LopHocController::class, 'chiTietLopHocAD'])->name("chi-tiet-lop-hoc-ad");
        Route::get('/admin/lop-hoc/chi-tiet-lop-hoc/{id}/danh-sach', [LopHocController::class, 'dsSinhVienAD'])->name("ds-sinh-vien-ad");
        Route::get('/admin/lop-hoc/{id}/bai-giang', [LopHocController::class, 'dsBaiGiangAD'])->name("ds-bai-giang-ad");
        Route::get('/admin/lop-hoc/{id}/bai-tap', [LopHocController::class, 'dsBaiTapAD'])->name("ds-bai-tap-ad");
        Route::get('/admin/lop-hoc/{id}/bai-kiem-tra', [LopHocController::class, 'dsBaiKiemTraAD'])->name("ds-bai-kiem-tra-ad");
        Route::get('/adminlop-hoc/{id}/thong-bao', [LopHocController::class, 'dsThongBaoAD'])->name("ds-thong-bao-ad");

        Route::get('/admin/lop-hoc/them-moi-lop-hoc', [LopHocController::class, 'formThemMoiLopHoc'])->name("them-moi-lop-hoc");
        Route::post('/admin/lop-hoc/them-moi-lop-hoc', [LopHocController::class, 'xlThemMoiLopHoc'])->name("xl-them-moi-lop-hoc");

        //sửa - xoá lớp học
        Route::get('/admin/lop-hoc/sua-lop-hoc/{id}', [LopHocController::class, 'formSuaLopHoc'])->name("sua-lop-hoc");
        Route::post('/admin/lop-hoc/sua-lop-hoc/{id}', [LopHocController::class, 'xlSuaLopHoc'])->name("xl-sua-lop-hoc");
        Route::get('/admin/lop-hoc/xoa-lop-hoc/{id}', [LopHocController::class, 'xlXoaLopHoc'])->name("xl-xoa-lop-hoc");
        
        //thêm - sửa - xoá sinh viên
        Route::get('/admin/sinh-vien/them-sinh-vien',[SinhVienController::class,'formThemMoiSinhVien'])->name("them-sinh-vien");
        Route::post('/admin/sinh-vien/them-sinh-vien',[SinhVienController::class,'xlThemMoiSinhVien'])->name("xl-them-sinh-vien");
        Route::get('/admin/sinh-vien/sua-sinh-vien/{id}', [SinhVienController::class, 'formSuaSinhVien'])->name("sua-sinh-vien");
        Route::post('/admin/sinh-vien/sua-sinh-vien/{id}', [SinhVienController::class, 'xlSuaSinhVien'])->name("xl-sua-sinh-vien");
        Route::get('/admin/sinh-vien/xoa-sinh-vien/{id}',[SinhVienController::class, 'xlXoaSinhVien'])->name("xl-xoa-sinh-vien");
        
        //sửa - xoá giáo viên
        Route::get('/admin/giao-vien/them-giao-vien',[GiaoVienController::class,'formThemMoiGiaoVien'])->name("them-giao-vien");
        Route::post('/admin/giao-vien/them-giao-vien',[GiaoVienController::class,'xlThemMoiGiaoVien'])->name("xl-them-giao-vien");
        Route::get('/admin/giao-vien/sua-giao-vien/{id}', [GiaoVienController::class, 'formSuaGiaoVien'])->name("sua-giao-vien");
        Route::post('/admin/giao-vien/sua-giao-vien/{id}', [GiaoVienController::class, 'xlSuaGiaoVien'])->name("xl-sua-giao-vien");
        Route::get('/admin/giao-vien/xoa-giao-vien/{id}', [GiaoVienController::class,'xlXoaGiaoVien'])->name("xl-xoa-giao-vien");

    });
});
