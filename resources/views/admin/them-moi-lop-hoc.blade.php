@extends("layouts/layout")
@section("main-content")
<div class="container set-pad">
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Thêm mới</h1>
        </div>
    </div>
    <form action="{{route('xl-them-moi-lop-hoc')}}" method="POST">
        @csrf
        <div class="md-3">
            <label for="txt-ten " class="form-label h2">Tên lớp</label>
            <input type="text" class="form-control  h3" name="ten_lop" placeholder="Tên lớp">
        </div>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </form>
</div>
@endsection