@extends("layouts/layout")
@section("menu")
<li><a href="{{route('trang-chu')}}">TRANG CHỦ</a></li>
<li><a href="{{route('danh-sach-lop-hoc' )}}">LỚP</a></li>
<li><a href="{{route('danh-sach-giao-vien' )}}">GIÁO VIÊN</a></li>
<li><a href="{{route('danh-sach-sinh-vien' )}}">SINH VIÊN</a></li>
<li><a href="{{route('dang-xuat')}}">ĐĂNG XUẤT</a></li>

@endsection

@section("main-content")
<!-- <div id="features-sec" class="container set-pad">

</div> -->

<!-- FEATURES SECTION END-->
<div id="faculty-sec">
    <div class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">DANH SÁCH LỚP</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <div class="row">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <!-- <th>Password</th> -->
                    <th>Email</th>
                    <th>Họ tên</th>
                    <th>SĐT</th>
                    <th>Tài Khoản</th>
                </tr>
                @forelse($dsGiaoVien as $GiaoVien)
                <tr>
                    <td>{{ $GiaoVien->id }}</td>
                    <td>{{ $GiaoVien->username }}</td>
                    <!-- <td>{{ $GiaoVien->password }}</td> -->
                    <td>{{ $GiaoVien->email }}</td>
                    <td>{{ $GiaoVien->ho_ten }}</td>
                    <td>{{ $GiaoVien->sdt }}</td>
                    <td>{{ $GiaoVien->loai_tai_khoan_id }}</td>
                    <td>{{ $GiaoVien->created_at }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Không có dữ liệu</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection