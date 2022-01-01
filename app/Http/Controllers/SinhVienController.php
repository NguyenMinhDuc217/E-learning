<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;

class SinhVienController extends Controller
{
    function layDanhSach(){
        $dsSinhVien=TaiKhoan::where('loai_tai_khoan_id','=',3)->get();
        return view('admin/danh-sach-sinh-vien', compact('dsSinhVien'));
    }
}
