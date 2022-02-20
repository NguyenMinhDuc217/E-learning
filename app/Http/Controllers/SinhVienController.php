<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use App\Models\ThamGiaLop;
use App\Models\DuyetThamGia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SinhVienController extends Controller
{
    function layDanhSach(){
        $dsSinhVien=TaiKhoan::where('loai_tai_khoan_id','=',3)->get();
        return view('admin/danh-sach-sinh-vien', compact('dsSinhVien'));
    }
    function formThemMoiSinhVien(){
        return view('admin/them-moi-sinh-vien');
    }
    function xlThemMoiSinhVien(Request $request){
        $tk = new TaiKhoan();
        $tk->username = $request->username;
        $tk->password = Hash::make($request->password);
        $tk->email=$request->email;
        $tk->ho_ten=$request->ho_ten;
        $tk->sdt=$request->sdt;
        $tk->loai_tai_khoan_id=3;
        $tk->save();
        return redirect()-> route('danh-sach-sinh-vien');
    }
    function formSuaSinhVien($id){
        $tk = TaiKhoan::where('loai_tai_khoan_id','=',3)->find($id);
        return view('admin/sua-sinh-vien', compact('tk'));
    }
    function xlSuaSinhVien(Request $request, $id){
        $tk = TaiKhoan::where('loai_tai_khoan_id','=',3)->find($id);
        $tk->ho_ten=$request->ho_ten;
        $tk->sdt=$request->sdt;
        $tk->save();
        return redirect()-> route('danh-sach-sinh-vien'); 
    }
    function xlXoaSinhVien($id){
        $tk = TaiKhoan::where('loai_tai_khoan_id','=',3)->find($id);
        $thamgia = ThamGiaLop::where('tai_khoan_id','=',$id)->delete();
        $duyetthamgia = DuyetThamGia::where('tai_khoan_id','=',$id)->delete();
        $tk->delete();
        return redirect()-> route('danh-sach-sinh-vien');
    }
    function resetMatKhau($id){
        $user = TaiKhoan::find($id);
            $user->password=Hash::make("123456");
            $user->save();
            return redirect()->route('danh-sach-sinh-vien');
    }
}