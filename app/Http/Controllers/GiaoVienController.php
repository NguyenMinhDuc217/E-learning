<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Models\ThamGiaLop;
use App\Models\DuyetThamGia;

class GiaoVienController extends Controller
{
    function layDanhSach(){
        $dsGiaoVien=TaiKhoan::where('loai_tai_khoan_id','=',2)->get();
        return view('admin/danh-sach-giao-vien', compact('dsGiaoVien'));
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
}
