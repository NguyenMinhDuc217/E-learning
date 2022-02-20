@extends("layouts/layout")
@section("main-content")
<div class="class">
    <div class="navbar-collapse collapse move-me">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('chi-tiet-lop-hoc-ad',['id'=>$lopHoc->id])}}">BẢNG TIN</a></li>
            <li>
                <a href="{{route('ds-sinh-vien-ad',['id'=>$lopHoc->id])}}">MỌI NGƯỜi</a>
            </li>
        </ul>
    </div>
    <div class="banner-class">
        <div class="banner">
            <div class="banner-img" style="background-image: url('https://gstatic.com/classroom/themes/img_learnlanguage.jpg');"></div>
            <div class="banner-text">
                <h3>{{$lopHoc->ten_lop}}</h3>
            </div>
        </div>
    </div>
    <div class="show-group">
        <div class="post-show">
            @for($i=1;$i<=5;$i++) <div class="post">
                <div class="main-post">
                    <div class="header-post">
                        <div class="title-post">
                            <div class="name-title-post">{{$lopHoc->taiKhoan->ho_ten}}</div>
                            <span class="time-title-post">12:45 </span>
                        </div>
                        <div style="flex: 1 0 1rem;"></div>
                    </div>
                    <div style="padding: 15px 10px">
                        <div class="text-post">
                            <span>
                               Chưa có gì
                            </span>
                        </div>
                    </div>
                </div>
                <div class="cmt-post">
                    <div class="cmt-group">
                    <input class="w3-input w3-border w3-round-xxlarge" name="last" type="text" placeholder="Thêm nhận xét trong lớp">
                        <button class="btn btn-primary">Đăng</button>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>
</div>
@endsection