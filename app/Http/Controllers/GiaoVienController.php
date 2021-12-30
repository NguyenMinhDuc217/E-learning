<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;

class GiaoVienController extends Controller
{
    function layDanhSach(){
        $index=1;
        $dsGiaoVien=TaiKhoan::where('loai_tai_khoan_id','=',2)->get();
        return view('admin/danh-sach-giao-vien', compact('dsGiaoVien','index'));
    }
}
