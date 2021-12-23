@extends("layouts/layout")
@section("menu")
<li><a href="{{route('trang-chu-giang-vien')}}">TRANG CHỦ</a></li>
<li><a href="{{route('tao-lop')}}">TẠO LỚP HỌC</a></li>
<li><a><img src="{{asset('assets/img/contact.jpg')}}">{{Auth()->user()->username}}</a>
    <ul>
        <li><a href="#">Thông tin</a></li>
        <li><a href="{{route('dang-xuat')}}">Đăng xuất</a></li>
    </ul>
</li>
@endsection
@section("main-content")
<div id="ListClass">
    <div class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">DANH SÁCH LỚP</h1>
            </div>
        </div>
        <div class="row">
            <div class="class">
                @foreach($dsLopHoc as $LopHoc)
                <div class="lop-hoc">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('assets/img/building.jpg')}}" class="card-img-top" height="200px" width="100%">
                        <div class="card-body">
                            <h5 class="card-title">{{$LopHoc->ten_lop}}</h5>
                            <a href="#" class="btn btn-success">Vào dạy</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection