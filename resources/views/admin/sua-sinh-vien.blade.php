@extends("layouts/layout")
@section("main-content")
<div class="container set-pad">
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Sửa sinh viên</h1>
        </div>
    </div>
    <form action="{{route('xl-sua-sinh-vien',['id'=>$tk->id])}}" method="POST">
        @csrf
        <div class="md-3">
            <label for="txt-ten " class="form-label h2">Họ tên</label>
            <input type="text" class="form-control  h3" name="ho_ten" value="{{$tk->ho_ten}}" placeholder="Họ tên">
        </div>
        <div class="md-3">
            <label for="txt-ten " class="form-label h2">SDT</label>
            <input type="text" class="form-control  h3" name="sdt" value="{{$tk->sdt}}" placeholder="Số điện thoại">
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection