<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\LopHoc;
use App\Models\ThamGiaLop;

class LopHocController extends Controller
{
    function layDanhSach()
    {
        $index=1;
        $dsLopHoc = LopHoc::all();
        return view('admin/lop-hoc', compact('dsLopHoc','index'));
    }
    function layDanhSachLopGV()
    {
        $dsLopHoc = LopHoc::where('tai_khoan_id','=',Auth()->user()->id)->get();
        return view('giang-vien/danh-sach-lop-hoc', compact('dsLopHoc'));
    }function layDanhSachLopSV()
    {
        $taiKhoan = Auth()->user();
        return view('sinh-vien/danh-sach-lop-hoc', compact('taiKhoan'));

    }
    function taoLop()
    {
        return view('giang-vien/tao-lop');
    }
   
    function xlTaoLop(Request $request)
    {
        $lh = new LopHoc();
        $lh->ma_lop = Str::random(6);
        $lh->ten_lop = $request->ten_lop;
        $lh->banner = '';
        $lh->tai_khoan_id = Auth()->user()->id;
        $lh->save();

        return redirect()-> route('trang-chu-giang-vien');
    }
    function thamGiaLop()
    {
        return view('sinh-vien/tham-gia-lop');
    }
    function xlThamGiaLop(Request $request)
    {
        $lopHoc=LopHoc::where('ma_lop',"=",$request->ma_lop)->first();
        $tgl = new ThamGiaLop();
        $tgl->tai_khoan_id = Auth()->user()->id;
        $tgl->lop_hoc_id =$lopHoc->id;
        $tgl->save();
        return redirect()-> route('trang-chu-sinh-vien');
    }
    function chiTietLopHocGV($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('giang-vien/chi-tiet-lop-hoc',compact('lopHoc'));
    }
    function dsSinhVienGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $soLuongSV=$lopHoc->dstaiKhoan->count();
        return view('giang-vien/danh-sach-sinh-vien',compact('lopHoc','soLuongSV'));
    }
    function chiTietLopHocSV($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('sinh-vien/chi-tiet-lop-hoc',compact('lopHoc'));
    }
    function dsSinhVienSV($id)
    {
        $lopHoc=LopHoc::find($id);
        $soLuongSV=$lopHoc->dstaiKhoan->count();
        return view('sinh-vien/danh-sach-sinh-vien',compact('lopHoc','soLuongSV'));
    }
}
