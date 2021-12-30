@extends("layouts/layout")
@section("main-content")
<!-- <div id="features-sec" class="container set-pad">

</div> -->

<!-- FEATURES SECTION END-->
<div class="container set-pad">
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">DANH SÁCH LỚP</h1>
        </div>
    </div>
    <!--/.HEADER LINE END-->
    <div><a class="btn btn-primary">Thêm mới</a></div>
    <div class="row">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Mã lớp</th>
                <th>Tên lớp</th>
                <th>Ngày tạo</th>
                <th>Chức năng</th>
            </tr>
            @forelse($dsLopHoc as $LopHoc)
            <tr>
                <!-- <td>{{ $LopHoc->id }}</td> -->
                <td>{{ $index++ }}</td>
                <td>{{ $LopHoc->ma_lop }}</td>
                <td>{{ $LopHoc->ten_lop }}</td>
                <td>{{ $LopHoc->created_at }}</td>
                <td>
                        <a class="btn btn-warning">Sửa</a>
                        <a class="btn btn-danger">Xóa</a>
                    </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Không có dữ liệu</td>
            </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection