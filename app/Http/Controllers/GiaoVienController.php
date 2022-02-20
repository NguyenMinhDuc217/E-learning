<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;

class GiaoVienController extends Controller
{
    function layDanhSach()
    {
        $dsGiaoVien = TaiKhoan::where('loai_tai_khoan_id', '=', 2)->get();
        return view('admin/danh-sach-giao-vien', compact('dsGiaoVien'));
    }
    function resetMatKhau($id)
    {
        $user = TaiKhoan::find($id);
        $user->password = Hash::make("123456");
        $user->save();
        return redirect()->route('danh-sach-giao-vien');
    }
}
