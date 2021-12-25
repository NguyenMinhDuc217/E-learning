@extends("layouts/layout-sinhvien")
@section("main-content")
<div id="ListClass">
    <div class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">THAM GIA LỚP</h1>
            </div>
        </div>
        <form action="{{route('xl-tham-gia-lop')}}" method="POST">
            @csrf
            <div class="md-3">
                <label for="txt-ten " class="form-label h2">Mã lớp</label>
                <input type="text" class="form-control  h3" name="ma_lop" placeholder="Mã lớp">
            </div>
            <button type="submit" class="btn btn-success">Tham gia lớp học</button>
        </form>
    </div>
</div>
@endsection