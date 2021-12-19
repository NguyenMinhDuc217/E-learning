<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return View('login');
    }

    public function xuLyLogin(Request $request){
        if(Auth::attempt(['username'=>$request->ten_dang_nhap,'password'=>$request->mat_khau])){
            return redirect()->route('trang-chu');
        }
        return View('login');
    }
    public function dangXuat(){
        Auth::logout();
        return redirect()-> route('login');
    }
}
