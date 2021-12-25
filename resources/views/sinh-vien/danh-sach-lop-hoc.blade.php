@extends("layouts/layout-sinhvien")
@section("main-content")
<div class="container set-pad">
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">DANH SÁCH LỚP</h1>
        </div>
    </div>
    <div class="row">
       @foreach($taiKhoan->dsLop as $lopHoc)
         <div class="col-md-3 mb-2">
            <div class="card h-100">
                <img src="{{asset('assets/img/contact.jpg')}}" class="card-img-top" height="150px" width="100%">
                <div class="card-body">
                    <h4 class="card-title">{{$lopHoc->ten_lop}}</h4>
                    <h5 class="card-title">{{$lopHoc->taiKhoan->ho_ten}}</h5>

                </div>
                <div class="card-footer border-0 bg-white">
                    <a href="#" class="btn btn-success">Vào dạy</a>
                </div>
            </div>
         </div>
        @endforeach
    </div>
</div>
@endsection