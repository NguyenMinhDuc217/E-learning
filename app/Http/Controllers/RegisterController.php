<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return View('register');
    }

    public function xuLyRegister(Request $request){
        if($request->mat_khau==$request->confirm_mat_khau){
            $taiKhoan = new TaiKhoan;
            $taiKhoan->ho_ten=$request->ho_ten;
            $taiKhoan->email=$request->email;
            $taiKhoan->sdt=$request->sdt;
            $taiKhoan->username=$request->ten_dang_nhap;
            $taiKhoan->password=Hash::make($request->mat_khau);
            $taiKhoan->loai_tai_khoan_id=($request->loai_tai_khoan_id==1)?2:3;
            $taiKhoan->save();
            return redirect()->route('dang-nhap');
        }
    }
}
