<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;

class SinhVienController extends Controller
{
    function layDanhSach(){
        $dsSinhVien=TaiKhoan::where('loai_tai_khoan_id','=',3)->get();
        return view('admin/danh-sach-sinh-vien', compact('dsSinhVien'));
    }

    function resetMatKhau($id){
        $user = TaiKhoan::find($id);
            $user->password=Hash::make("123456");
            $user->save();
            return redirect()->route('danh-sach-sinh-vien');
    }
}
