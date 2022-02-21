@extends("layouts/layout-giangvien")

@section("main-content")
<div class="class">
    <div class="navbar-collapse collapse move-me">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('chi-tiet-lop-hoc-gv',['id'=>$lopHoc->id]) }}">BẢNG TIN</a></li>
            <li>
                <a href="{{ route('ds-sinh-vien-gv',['id'=>$lopHoc->id]) }}">MỌI NGƯỜI</a>
            </li>
            <li><a href="{{ route('ds-bai-giang-gv',['id'=>$lopHoc->id]) }}">BÀI GIẢNG</a></li>
            <li><a href="{{ route('ds-bai-tap-gv',['id'=>$lopHoc->id]) }}">BÀI TẬP</a></li>
            <li><a href="{{ route('ds-bai-kiem-tra-gv',['id'=>$lopHoc->id]) }}">BÀI KIỂM TRA</a></li>    
            <li><a href="{{ route('ds-thong-bao-gv',['id'=>$lopHoc->id]) }}">THÔNG BÁO</a></li>
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
        <div class="form-show">
        <form action="{{route('xl-them-bai-kt-gv',['id'=>$lopHoc->id])}}" method="POST">
                @csrf
                <div class="form-group">
                        <textarea class="form-control" name="noi_dung" placeholder="Thông báo nội dung nào đó cho lớp học của bạn"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="class="btn btn-success">Đăng</button>
                        <button class="btn btn-primary">Đính kèm tệp</button>
                    </div>
            </form>
        </div>
        <div class="post-show">
        @foreach($bai as $b) <div class="post">
                <div class="main-post">
                    <div class="header-post">
                        <div class="title-post">
                            <div class="name-title-post">{{Auth()->user()->ho_ten}}</div>
                            <span class="time-title-post">{{$b->ngay_tao}}</span>
                        </div>
                        <div style="flex: 1 0 1rem;"></div>
                        <div class="icon-title-post">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu ">
                            <a class="dropdown-item btn"  href="{{ route('sua-bai-kt',['id'=>$lopHoc->id, 'idkt'=>$b->id]) }}">Sửa</a>
                            <a class="dropdown-item btn" href="{{ route('xl-xoa-bai-kt',['id'=>$lopHoc->id, 'idkt'=>$b->id]) }}">Xóa</a>
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