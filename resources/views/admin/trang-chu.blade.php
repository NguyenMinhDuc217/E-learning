@extends("layouts/layout")
@section("main-content")
<!--HOME SECTION TAG LINE END-->
<div style="
    text-align: center;">
    <H2>Xin chào {{Auth()->user()->ho_ten}}</H2>
</div>
<!-- <div id="features-sec" class="container set-pad" >
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
</div> -->
@endsection