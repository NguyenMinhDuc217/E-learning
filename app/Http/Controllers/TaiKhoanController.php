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
    function thongTin()
    {
        return view('admin/thong-tin');
    }
    function suaThongTin(ChangeRequest $request)
    { 
        $user = TaiKhoan::find(Auth()->user()->id);
        if(Hash::check($request->password,$user->password)){   
            $user->ho_ten = $request->ho_ten;
            $user->username = $request->ten_dang_nhap;
            $user->email = $request->email;
            $user->sdt = $request->sdt;
            $user->save();
            return redirect()->route('thong-tin');
        }
        else{
            $messageFail="Thay đổi không thành công";
            return  view('admin/thong-tin',compact('messageFail'));
        }
    }    
    function suaMatKhau()
    {  
        return view('admin/thay-doi-mat-khau');
    }
    function xlSuaMatKhau(ChangePassRequest $request)
    { 
        if ($request->new_password != $request->confirm_new_password) {
            $messageFail="Mật khẩu mới không trùng nhau";
            return  view('admin/thay-doi-mat-khau',compact('messageFail'));
        }
            if(Hash::check($request->old_password,Auth()->user()->password)){   
            $user = TaiKhoan::find(Auth()->user()->id);
            $user->password=Hash::make($request->new_password);
            $user->save();
          
            $messageSuccess="Thay đổi thành công";
            return view('admin/thay-doi-mat-khau',compact('messageSuccess'));
        }
        else{
            $messageFail="Thay đổi không thành công";
            return  view('admin/thay-doi-mat-khau',compact('messageFail'));
        }
    }
    function thongTinSV()
    {
        return view('sinh-vien/thong-tin');
    }
    function suaThongTinSV(ChangeRequest $request)
    { 
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
            $messageFail="Thay đổi không thành công";
            return  view('sinh-vien/thong-tin',compact('messageFail'));
        }
    }    
    function suaMatKhauSV()
    { 
       
        return view('sinh-vien/thay-doi-mat-khau');
    }
    function xlSuaMatKhauSV(ChangePassRequest $request)
    { 
        if ($request->new_password != $request->confirm_new_password) {
            $message="Mật khẩu mới không trùng nhau";
            return  view('sinh-vien/thay-doi-mat-khau',compact('message'));
        }
        if(Hash::check($request->old_password,Auth()->user()->password)){   
            $user = TaiKhoan::find(Auth()->user()->id);
            $user->password=Hash::make($request->new_password);
            $user->save();
            $messageSuccess="Thay đổi thành công";
            return view('sinh-vien/thay-doi-mat-khau',compact('messageSuccess'));
        }
        else{
            $messageFail="Thay đổi không thành công";
            return  view('sinh-vien/thay-doi-mat-khau',compact('messageFail'));
        }
    }

    function thongTinGV()
    {
        return view('giang-vien/thong-tin');
    }
    function suaThongTinGV(ChangeRequest $request)
    { 
        $user = TaiKhoan::find(Auth()->user()->id);
        if(Hash::check($request->password,$user->password)){   
            $user->ho_ten = $request->ho_ten;
            $user->username = $request->ten_dang_nhap;
            $user->email = $request->email;
            $user->sdt = $request->sdt;
            $user->save();
            return redirect()->route('thong-tin-gv');
        }else{
            $messageFail="Thay đổi không thành công";
            return  view('giang-vien/thong-tin',compact('messageFail'));
        }
    }    
    function suaMatKhauGV()
    { 
        return view('giang-vien/thay-doi-mat-khau');
    }
    function xlSuaMatKhauGV(ChangePassRequest $request)
    { 
        if ($request->new_password != $request->confirm_new_password) {
            $messageFail="Mật khẩu mới không trùng nhau";
            return  view('giang-vien/thay-doi-mat-khau',compact('messageFail'));
        }
        if(Hash::check($request->old_password,Auth()->user()->password)){   
            $user = TaiKhoan::find(Auth()->user()->id);
            $user->password=Hash::make($request->new_password);
            $user->save();
            $messageSuccess="Thay đổi thành công";
            return view('giang-vien/thay-doi-mat-khau',compact('messageSuccess'));
        }
        else{
            $messageFail="Thay đổi không thành công";
            return  view('giang-vien/thay-doi-mat-khau',compact('messageFail'));
        }
    }
}
