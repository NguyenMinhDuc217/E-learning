@extends("layouts/layout")

@section("main-content")
<div class="class">
    <div class="navbar-collapse collapse move-me">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('chi-tiet-lop-hoc-ad',['id'=>$lopHoc->id]) }}">BẢNG TIN</a></li>
            <li>
                <a href="{{ route('ds-sinh-vien-ad',['id'=>$lopHoc->id]) }}">MỌI NGƯỜI</a>
            </li>
            <li><a href="{{ route('ds-bai-giang-ad',['id'=>$lopHoc->id]) }}">BÀI GIẢNG</a></li>
            <li><a href="{{ route('ds-bai-tap-ad',['id'=>$lopHoc->id]) }}">BÀI TẬP</a></li>
            <li><a href="{{ route('ds-bai-kiem-tra-ad',['id'=>$lopHoc->id]) }}">BÀI KIỂM TRA</a></li>    
            <li><a href="{{ route('ds-thong-bao-ad',['id'=>$lopHoc->id]) }}">THÔNG BÁO</a></li>
        </ul>
    </div>
    <div class="banner-class">
        <div class="banner">
            <div class="banner-img" >
            <img src="{{asset('assets/img/banner.jpg')}}">
            </div>
            <div class="banner-text">
                <h3>{{$lopHoc->ten_lop}}</h3>
            </div>
        </div>
    </div>
    <div class="show-group">
        <!-- <div class="form-show">
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Thông báo nội dung nào đó cho lớp học của bạn"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Đăng</button>
                <button class="btn btn-primary">Đính kèm tệp</button>
            </div>
        </div> -->
        <div class="post-show">
        @foreach($bai as $b) <div class="post">
                <div class="main-post">
                    <div class="header-post">
                        <div class="title-post">
                            <div class="name-title-post">{{$b->lopHoc->taiKhoan->ho_ten}}</div>
                            <span class="time-title-post">{{$b->ngay_tao}}</span>
                        </div>
                        <div style="flex: 1 0 1rem;"></div>
                        <div class="icon-title-post">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu ">
                                <a class="dropdown-item btn ">Sửa</a>
                                <a class="dropdown-item btn">Xóa tin</a>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 15px 10px">
                        <div class="text-post">
                            <span>
                               {{$b->noi_dung}}
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
        @endforeach
    </div>
</div>
</div>

@endsection