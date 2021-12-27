@extends("layouts/layout-giangvien")

@section("main-content")
<div class="class">
    <div class="navbar-collapse collapse move-me">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('chi-tiet-lop-hoc-gv',['id'=>$lopHoc->id])}}">BẢNG TIN</a></li>
            <li>
                <a href="{{route('ds-sinh-vien-gv',['id'=>$lopHoc->id])}}">MỌI NGƯỜI</a>
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
        <div class="form-show">
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Thông báo nội dung nào đó cho lớp học của bạn"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Đăng</button>
                <button class="btn btn-primary">Đính kèm tệp</button>
            </div>
        </div>
        <div class="post-show">
            @for($i=1;$i<=5;$i++) <div class="post">
                <div class="main-post">
                    <div class="header-post">
                        <div class="title-post">
                            <div class="name-title-post">{{Auth()->user()->ho_ten}}</div>
                            <span class="time-title-post">12:50 </span>
                        </div>
                        <div style="flex: 1 0 1rem;"></div>
                        <div class="icon-title-post">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu ">
                                <a class="dropdown-item btn ">Sửa lớp</a>
                                <a class="dropdown-item btn">Xóa tin</a>
                            </div>
                        </div>
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