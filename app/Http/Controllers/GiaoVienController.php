<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use App\Models\ThamGiaLop;
use App\Models\DuyetThamGia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GiaoVienController extends Controller
{
    function layDanhSach()
    {
        $dsGiaoVien = TaiKhoan::where('loai_tai_khoan_id', '=', 2)->get();
        return view('admin/danh-sach-giao-vien', compact('dsGiaoVien'));
    }
    function formThemMoiGiaoVien(){
        return view('admin/them-moi-giao-vien');
    }
    function xlThemMoiGiaoVien(Request $request){
        $tk = new TaiKhoan();
        $tk->username = $request->username;
        $tk->password = Hash::make($request->password);
        $tk->email=$request->email;
        $tk->ho_ten=$request->ho_ten;
        $tk->sdt=$request->sdt;
        $tk->loai_tai_khoan_id=2;
        $tk->save();
        return redirect()-> route('danh-sach-giao-vien');
    }
    function formSuaGiaoVien($id){
        $tk = TaiKhoan::where('loai_tai_khoan_id','=',2)->find($id);
        return view('admin/sua-giao-vien', compact('tk'));
    }
    function xlSuaGiaoVien(Request $request, $id){
        $tk = TaiKhoan::where('loai_tai_khoan_id','=',2)->find($id);
        $tk->ho_ten=$request->ho_ten;
        $tk->sdt=$request->sdt;
        $tk->save();
        return redirect()-> route('danh-sach-giao-vien'); 
    }
    function xlXoaGiaoVien($id){
        $tk = TaiKhoan::where('loai_tai_khoan_id','=',2)->find($id);
        // dd($tk->id);
        // $thamgia = ThamGiaLop::where('tai_khoan_id','=',$id)->delete();
        // $duyetthamgia = DuyetThamGia::where('tai_khoan_id','=',$id)->delete();
        $tk->delete();
        return redirect()-> route('danh-sach-giao-vien');
    }
    function resetMatKhau($id)
    {
        $user = TaiKhoan::find($id);
        $user->password = Hash::make("123456");
        $user->save();
        return redirect()->route('danh-sach-giao-vien');
    }
}