<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DangNhapRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return View('login');
    }

    public function xuLyLogin(DangNhapRequest $request){
        if(Auth::attempt(['username'=>$request->ten_dang_nhap,'password'=>$request->mat_khau])){
            $user=Auth()->user()->loai_tai_khoan_id;
            if($user==1){
                return redirect()-> route('trang-chu');
            }
            else{
                return redirect()-> route('trang-chu');
            }
        }else{
            echo"khong thanh cong";
        }
    }
    public function dangXuat(){
        Auth::logout();
        return redirect()-> route('dang-nhap');
    }
}
