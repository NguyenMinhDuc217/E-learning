@extends("layouts/layout-giangvien")
@section("main-content")
<div class="container set-pad">
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">SỬA BÀI GIẢNG</h1>
        </div>
    </div>
    <form action="{{ route('xl-sua-bai-giang',['id'=>$lopHoc->id, 'idbg'=>$bai->id]) }}" method="POST">
        @csrf
        <div class="md-3">
            <label for="txt-ten " class="form-label h2">Nội dung</label>
            <input type="text" class="form-control  h3" name="noi_dung" placeholder="Nội dung" value="{{$bai->noi_dung}}">
        </div>
        <button type="submit" class="btn btn-success">Sửa bài giảng</button>
    </form>
</div>
@endsection