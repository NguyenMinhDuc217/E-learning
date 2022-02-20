<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DuyetThamGia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\LopHoc;
use App\Models\ThamGiaLop;
use App\Models\Bai;

class LopHocController extends Controller
{
    function layDanhSach()
    {
        $dsLopHoc = LopHoc::all();
        return view('admin/lop-hoc', compact('dsLopHoc'));
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
    function formThemMoiLopHoc(){
        return view('admin/them-moi-lop-hoc');
    }
    function xlThemMoiLopHoc(Request $request){
        $lh = new LopHoc();
        $lh->ma_lop = Str::random(6);
        $lh->ten_lop = $request->ten_lop;
        $lh->banner = '';
        $lh->tai_khoan_id = Auth()->user()->id;
        $lh->save();
        return redirect()-> route('danh-sach-lop-hoc');
    }
    function formSuaLopHoc($id){
        $lh = LopHoc::find($id);
        return view('admin/sua-lop-hoc', compact('lh'));
    }
    function xlSuaLopHoc(Request $request, $id){
        $lh = LopHoc::find($id);
        $lh->ten_lop=$request->ten_lop;
        $lh->save();
        return redirect()-> route('danh-sach-lop-hoc');
    }
    function xlXoaLopHoc($id){
        $lh = LopHoc::find($id);
        $thamgia = ThamGiaLop::where('lop_hoc_id','=',$id)->delete();
        $duyetthamgia = DuyetThamGia::where('lop_hoc_id','=',$id)->delete();
        $lh->delete();
        return redirect()-> route('danh-sach-lop-hoc');
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
    function suaLop($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('giang-vien/sua-lop-hoc',compact('lopHoc'));
    }
   
    function xlSuaLop(Request $request,$id)
    {

        $lh = LopHoc::find($id);
        $lh->ten_lop = $request->ten_lop;
        $lh->save();

        return redirect()-> route('trang-chu-giang-vien');
    }
    function xoaLop($id)
    {
        $dtg=DuyetThamGia::where('lop_hoc_id',"=",$id )->delete();
        $tgl=ThamGiaLop::where('lop_hoc_id',"=",$id )->delete();
        $lopHoc=LopHoc::find($id);
        $lopHoc->delete();
        return redirect()-> route('trang-chu-giang-vien');
    }
    function thamGiaLop()
    {
        return view('sinh-vien/tham-gia-lop');
    }
    function xlThamGiaLop(Request $request)
    {
        $lopHoc=LopHoc::where('ma_lop',"=",$request->ma_lop)->first();
        $dtg = new DuyetThamGia();
        $dtg->tai_khoan_id = Auth()->user()->id;
        $dtg->lop_hoc_id =$lopHoc->id;
        $dtg->save();
        return redirect()-> route('trang-chu-sinh-vien');
    }
    function xlDuyetThamGia($idLop,$idSv)
    {
        $dtg=DuyetThamGia::where('tai_khoan_id',"=",$idSv )->where('lop_hoc_id',"=",$idLop)->first();
        $tgl = new ThamGiaLop();
        $tgl->tai_khoan_id = $dtg->tai_khoan_id;
        $tgl->lop_hoc_id =$dtg->lop_hoc_id;
        $tgl->save();
        $dtg->delete();
        return redirect()-> route('ds-sinh-vien-gv',['id'=>$idLop]);
    }
    function xlXoaDuyetThamGia($idLop,$idSv)
    {
        $dtg=DuyetThamGia::where('tai_khoan_id',"=",$idSv )->where('lop_hoc_id',"=",$idLop)->first();
        $dtg->delete();
        return redirect()-> route('ds-sinh-vien-gv',['id'=>$idLop]);
    }
    function xlXoaThamGia($idLop,$idSv)
    {
        $tgl=ThamGiaLop::where('tai_khoan_id',"=",$idSv )->where('lop_hoc_id',"=",$idLop)->first();
        $tgl->delete();
        return redirect()-> route('ds-sinh-vien-gv',['id'=>$idLop]);
    }
    function chiTietLopHocGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->get();
        return view('giang-vien/chi-tiet-lop-hoc',compact('lopHoc','bai'));
    }
    function dsBaiGiangGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',1)->get();
        return view('giang-vien/danh-sach-bai-giang',compact('lopHoc','bai'));
    }
    function dsBaiTapGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',2)->get();
        return view('giang-vien/danh-sach-bai-tap',compact('lopHoc','bai'));
    }function dsBaiKiemTraGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',3)->get();
        return view('giang-vien/danh-sach-bai-kiem-tra',compact('lopHoc','bai'));
    }
    function dsThongBaoGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',4)->get();
        return view('giang-vien/danh-sach-thong-bao',compact('lopHoc','bai'));
    }
    function dsSinhVienGV($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('giang-vien/danh-sach-sinh-vien',compact('lopHoc'));
    }
    function chiTietLopHocSV($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('sinh-vien/chi-tiet-lop-hoc',compact('lopHoc'));
    }
    function dsSinhVienSV($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('sinh-vien/danh-sach-sinh-vien',compact('lopHoc'));
    }
    function chiTietLopHocAD($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('admin/chi-tiet-lop-hoc',compact('lopHoc'));
    }
    function dsSinhVienAD($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('admin/danh-sach-sinh-vien-theo-lop',compact('lopHoc'));
    }
}
