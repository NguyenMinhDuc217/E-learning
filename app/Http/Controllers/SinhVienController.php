<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Models\ThamGiaLop;
use App\Models\DuyetThamGia;

class SinhVienController extends Controller
{
    function layDanhSach(){
        $dsSinhVien=TaiKhoan::where('loai_tai_khoan_id','=',3)->get();
        return view('admin/danh-sach-sinh-vien', compact('dsSinhVien'));
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
}
