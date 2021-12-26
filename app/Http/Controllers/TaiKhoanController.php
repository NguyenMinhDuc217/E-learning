<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePassRequest;
use App\Http\Requests\ChangeRequest;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TaiKhoanController extends Controller
{
    function thongTinSV()
    {
        return view('sinh-vien/thong-tin');
    }
    function suaThongTinSV(ChangeRequest $request)
    { 
        if ($request->password != $request->confirm_password) {
            return view('sinh-vien/thong-tin');
        }
        $user = TaiKhoan::find(Auth()->user()->id);
        if(Hash::check($request->password,$user->password)){   
            $user->ho_ten = $request->ho_ten;
            $user->username = $request->ten_dang_nhap;
            $user->email = $request->email;
            $user->sdt = $request->sdt;
            $user->save();
            return redirect()->route('thong-tin-sv');
        }
        else{
            abort('404');
        }
    }    
    function suaMatKhauSV()
    { 
       
        return view('sinh-vien/thay-doi-mat-khau');
    }
    function xlSuaMatKhauSV(ChangePassRequest $request)
    { 
       
        if ($request->old_password != $request->confirm_old_password) {
            return view('sinh-vien/thay-doi-mat-khau');
        }
        
        if(Hash::check($request->old_password,Auth()->user()->password)){   
            $user = TaiKhoan::find(Auth()->user()->id);
            $user->password=Hash::make($request->new_password);
            $user->save();
            return redirect()->route('thong-tin-sv');
        }
        else{
            abort('404');
        }
    }

    function thongTinGV()
    {
        return view('giang-vien/thong-tin');
    }
    function suaThongTinGV(ChangeRequest $request)
    { 
       
        if ($request->password != $request->confirm_password) {
            return view('giang-vien/thong-tin');
        }
        $user = TaiKhoan::find(Auth()->user()->id);
        if(Hash::check($request->password,$user->password)){   
            $user->ho_ten = $request->ho_ten;
            $user->username = $request->ten_dang_nhap;
            $user->email = $request->email;
            $user->sdt = $request->sdt;
            $user->save();
            return redirect()->route('thong-tin-gv');
        }
    }    
    function suaMatKhauGV()
    { 
        return view('giang-vien/thay-doi-mat-khau');
    }
    function xlSuaMatKhauGV(ChangePassRequest $request)
    { 
       
        if ($request->old_password != $request->confirm_old_password) {
            return view('giang-vien/thay-doi-mat-khau');
        }
        
        if(Hash::check($request->old_password,Auth()->user()->password)){   
            $user = TaiKhoan::find(Auth()->user()->id);
            $user->password=Hash::make($request->new_password);
            $user->save();
            return redirect()->route('thong-tin-gv');
        }
        else{
            abort('404');
        }
    }
}
