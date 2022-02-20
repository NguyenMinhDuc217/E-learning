@extends("layouts/layout-giangvien")
@section("main-content")
<div class="container set-pad">
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">DANH SÁCH LỚP</h1>
        </div>
    </div>
    <div class="row">
        @foreach($dsLopHoc as $lopHoc)
        <div class="col-md-3 mb-2">
            <div class="card h-100">
                <img src="{{asset('assets/img/contact.jpg')}}" class="card-img-top" height="150px" width="100%">
                <div class="card-body">
                    <h4 class="card-title">{{$lopHoc->ten_lop}}</h4>
                    <h5>{{$lopHoc->taiKhoan->ho_ten}}</h5>
                    <div class="copy-text">
                        <input class="text" type="text" id="copy_{{ $lopHoc->ma_lop }}" value="{{ $lopHoc->ma_lop }}" >
                        <button id="copy" onclick="copyToClipboard('copy_{{ $lopHoc->ma_lop }}')"><i class="fa fa-clone"></i></button>
                    </div>
                </div>
                <div class="card-footer border-0 bg-white">
                    <a href="{{route('chi-tiet-lop-hoc-gv',['id'=>$lopHoc->id])}}" class="btn btn-success">Vào dạy</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item btn " href="{{route('sua-lop',['id'=>$lopHoc->id])}}">Sửa lớp</a>
                            <a class="dropdown-item btn"  href="{{route('xoa-lop',['id'=>$lopHoc->id])}}">Xóa lớp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('script-content')
<script>
    function copyToClipboard(id) {
        document.getElementById(id).select();
        document.execCommand('copy');
        
    }
</script>
@endsection