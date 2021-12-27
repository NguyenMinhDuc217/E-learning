@extends("layouts/layout")
@section("menu")
<li><a href="{{route('trang-chu')}}">TRANG CHỦ</a></li>
<li><a href="{{route('danh-sach-lop-hoc' )}}">LỚP</a></li>
<li><a href="{{route('danh-sach-giao-vien' )}}">GIÁO VIÊN</a></li>
<li><a href="{{route('danh-sach-sinh-vien' )}}">SINH VIÊN</a></li>
<li><a href="{{route('dang-xuat')}}">ĐĂNG XUẤT</a></li>>
           
@endsection

@section("main-content")
<!--HOME SECTION TAG LINE END-->   
<div id="features-sec" class="container set-pad" >
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">QUẢN LÝ LỚP HỌC</h1>
        </div>
    </div>
</div>
<div id="features-sec" class="container set-pad" >
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">QUẢN LÝ GIÁO VIÊN</h1>
        </div>
    </div>
</div>
<div id="features-sec" class="container set-pad" >
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">QUẢN LÝ SINH VIÊN</h1>
        </div>
    </div>
</div>
@endsection