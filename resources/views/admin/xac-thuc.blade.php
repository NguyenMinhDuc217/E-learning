@extends("layouts/layout")
@section("main-content")
<div class="container set-pad">
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Sửa sinh viên</h1>
        </div>
    </div>
    <form action="{{route('xl-xac-thuc',['id'=>$tk->id])}}" method="POST">
        @csrf
        <div class="md-3">
            <label for="txt-ten " class="form-label h2">Mã xác thực</label>
            <input type="text" class="form-control  h3" name="ho_ten" value="{{$tk->ho_ten}}" placeholder="Họ tên">
        </div>
        <button type="submit" class="btn btn-success">Xác thực</button>
    </form>
</div>
@endsection