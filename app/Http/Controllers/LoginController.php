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
            
            return redirect()-> route('trang-chu');
        }else{
            echo"khong thanh cong";
        }
    }
    public function dangXuat(){
        Auth::logout();
        return redirect()-> route('login');
    }
}
