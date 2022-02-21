<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DuyetThamGia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\LopHoc;
use App\Models\ThamGiaLop;
use App\Models\Bai;
use Carbon\Carbon;

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
    // admin
    function chiTietLopHocAD($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->get();
        return view('admin/chi-tiet-lop-hoc',compact('lopHoc','bai'));
    }
    function dsBaiGiangAD($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',1)->get();
        return view('admin/danh-sach-bai-giang',compact('lopHoc','bai'));
    }
    function dsBaiTapAD($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',2)->get();
        return view('admin/danh-sach-bai-tap',compact('lopHoc','bai'));
    }function dsBaiKiemTraAD($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',3)->get();
        return view('admin/danh-sach-bai-kiem-tra',compact('lopHoc','bai'));
    }
    function dsThongBaoAD($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',4)->get();
        return view('admin/danh-sach-thong-bao',compact('lopHoc','bai'));
    }
    function dsSinhVienAD($id)
    {
        $lopHoc=LopHoc::find($id);
        return view('admin/danh-sach-sinh-vien-theo-lop',compact('lopHoc'));
    }
    // giáo viên
    function chiTietLopHocGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->orderbydesc('ngay_tao')->get();
        return view('giang-vien/chi-tiet-lop-hoc',compact('lopHoc','bai'));
    }
    function dsBaiGiangGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',1)->orderbydesc('ngay_tao')->get();
        return view('giang-vien/danh-sach-bai-giang',compact('lopHoc','bai'));
    }
    function dsBaiTapGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',2)->orderbydesc('ngay_tao')->get();
        return view('giang-vien/danh-sach-bai-tap',compact('lopHoc','bai'));
    }function dsBaiKiemTraGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',3)->orderbydesc('ngay_tao')->get();
        return view('giang-vien/danh-sach-bai-kiem-tra',compact('lopHoc','bai'));
    }
    function dsThongBaoGV($id)
    {
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',4)->orderbydesc('ngay_tao')->get();
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
   //bài giảng
    function xlThemBaiGiangGV(Request $request, $id)
    {   
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',1)->orderbydesc('ngay_tao')->get();
        if($request->noi_dung!=""){           
            $bai= new Bai();
            $bai->ngay_tao=Carbon::now();
            $bai->han_nop='2022-02-25';
            $bai->diem=10;
            $bai->noi_dung=$request->noi_dung;
            $bai->lop_hoc_id=$lopHoc->id;
            $bai->loai_bai_id=1;
            $bai->save();
            return redirect()-> route('ds-bai-giang-gv',['id'=>$id]);
        }
        return view('giang-vien/danh-sach-bai-giang',compact('lopHoc','bai'));
    }
    function formSuaBaiGiangGV($id,$idbg){
        $lopHoc = LopHoc::find($id);
        $bai=Bai::find($idbg);
        return view('giang-vien/sua-bai-giang', compact('lopHoc','bai'));
    }
    function xlSuaBaiGiangGV(Request $request, $id, $idbg){
        $lopHoc = LopHoc::find($id);
        $bai=Bai::find($idbg);
        $bai->noi_dung=$request->noi_dung;
        $bai->save();
        return redirect()-> route('ds-bai-giang-gv',['id'=>$id]);
    }
    function xoaBaiGiangGV($id, $idbg)
    {
        $bai=Bai::find($idbg)->delete();
        return redirect()-> route('ds-bai-giang-gv',['id'=>$id]);
    }
    //bài tập
    function xlThemBaiTapGV(Request $request, $id)
    {   
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',2)->orderbydesc('ngay_tao')->get();
        if($request->noi_dung!=""){           
            $bai= new Bai();
            $bai->ngay_tao=Carbon::now();
            $bai->han_nop='2022-02-25';
            $bai->diem=10;
            $bai->noi_dung=$request->noi_dung;
            $bai->lop_hoc_id=$lopHoc->id;
            $bai->loai_bai_id=2;
            $bai->save();
            return redirect()-> route('ds-bai-tap-gv',['id'=>$id]);
        }
        return view('giang-vien/danh-sach-bai-tap',compact('lopHoc','bai'));
    }
    function formSuaBaiTapGV($id,$idbt){
        $lopHoc = LopHoc::find($id);
        $bai=Bai::find($idbt);
        return view('giang-vien/sua-bai-tap', compact('lopHoc','bai'));
    }
    function xlSuaBaiTapGV(Request $request, $id, $idbt){
        $lopHoc = LopHoc::find($id);
        $bai=Bai::find($idbt);
        $bai->noi_dung=$request->noi_dung;
        $bai->save();
        return redirect()-> route('ds-bai-tap-gv',['id'=>$id]);
    }
    function xoaBaiTapGV($id, $idbg)
    {
        $bai=Bai::find($idbg)->delete();
        return redirect()-> route('ds-bai-tap-gv',['id'=>$id]);
    }
    //bài kiểm tra
    function xlThemBaiKTGV(Request $request, $id)
    {   
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',3)->orderbydesc('ngay_tao')->get();
        if($request->noi_dung!=""){           
            $bai= new Bai();
            $bai->ngay_tao=Carbon::now();
            $bai->han_nop='2022-02-25';
            $bai->diem=10;
            $bai->noi_dung=$request->noi_dung;
            $bai->lop_hoc_id=$lopHoc->id;
            $bai->loai_bai_id=3;
            $bai->save();
            return redirect()-> route('ds-bai-kiem-tra-gv',['id'=>$id]);
        }
        return view('giang-vien/danh-sach-bai-kiem-tra',compact('lopHoc','bai'));
    }
    function formSuaBaiKTGV($id,$idkt){
        $lopHoc = LopHoc::find($id);
        $bai=Bai::find($idkt);
        return view('giang-vien/sua-bai-kt', compact('lopHoc','bai'));
    }
    function xlSuaBaiKTGV(Request $request, $id, $idkt){
        $lopHoc = LopHoc::find($id);
        $bai=Bai::find($idkt);
        $bai->noi_dung=$request->noi_dung;
        $bai->save();
        return redirect()-> route('ds-bai-kiem-tra-gv',['id'=>$id]);
    }
    function xoaBaiKTGV($id, $idkt)
    {
        $bai=Bai::find($idkt)->delete();
        return redirect()-> route('ds-bai-kiem-tra-gv',['id'=>$id]);
    }
    //thông báo
    function xlThemBaiTBGV(Request $request, $id)
    {   
        $lopHoc=LopHoc::find($id);
        $bai=Bai::where('lop_hoc_id','=',$lopHoc->id)->where('loai_bai_id','=',4)->orderbydesc('ngay_tao')->get();
        if($request->noi_dung!=""){           
            $bai= new Bai();
            $bai->ngay_tao=Carbon::now();
            $bai->han_nop='2022-02-25';
            $bai->diem=10;
            $bai->noi_dung=$request->noi_dung;
            $bai->lop_hoc_id=$lopHoc->id;
            $bai->loai_bai_id=4;
            $bai->save();
            return redirect()-> route('ds-thong-bao-gv',['id'=>$id]);
        }
        return view('giang-vien/danh-sach-bai-thong-bao',compact('lopHoc','bai'));
    }
    function formSuaBaiTBGV($id,$idkt){
        $lopHoc = LopHoc::find($id);
        $bai=Bai::find($idkt);
        return view('giang-vien/sua-thong-bao', compact('lopHoc','bai'));
    }
    function xlSuaBaiTBGV(Request $request, $id, $idtb){
        $lopHoc = LopHoc::find($id);
        $bai=Bai::find($idtb);
        $bai->noi_dung=$request->noi_dung;
        $bai->save();
        return redirect()-> route('ds-thong-bao-gv',['id'=>$id]);
    }
    function xoaBaiTBGV($id, $idtb)
    {
        $bai=Bai::find($idtb)->delete();
        return redirect()-> route('ds-thong-bao-gv',['id'=>$id]);
    }
}
