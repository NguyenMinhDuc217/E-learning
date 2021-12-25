<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
</head>

<body>
    <selection>
        <div class="container">
            <div class="box">
                <h2>Đăng kí</h2>
                <form action="{{route('xl-dang-ky')}}" method="POST">
                    @csrf
                    <!-- Tên đăng nhập -->
                    <div class="box-group">
                        <input class="input-text" type="text" placeholder="Tên đăng nhập" name="ten_dang_nhap">
                        @error('ten_dang_nhap')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                     <!-- Họ tên -->
                    <div class="box-group">
                        <input class="input-text" type="text" placeholder="Họ tên" name="ho_ten">
                        @error('ho_ten')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Email -->
                    <div class="box-group">
                        <input class="input-text" type="email" placeholder="Email" name="email">
                        @error('email')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Số điện thoại -->
                    <div class="box-group">
                        <input class="input-text" type="text" placeholder="Số điện thoại" name="sdt">
                        @error('sdt')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Mật khẩu -->
                    <div class="box-group">
                        <input class="input-text" type="password" placeholder="Mật khẩu" name="mat_khau">
                        @error('mat_khau')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Nhập lại mật khảu -->
                    <div class="box-group">
                        <input class="input-text" type="password" placeholder="Nhập lại mật khẩu" name="confirm_mat_khau">
                        @error('confirm_mat_khau')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Loại tài khoản -->
                    <div class="box-group" >
                        <select class="select" name="loai_tai_khoan_id">
                            <option value="1" selected>Giảng viên</option>
                            <option value="2">Sinh viên</option>
                        </select>
                    </div>

                    <button type="submit">Đăng kí</button>
                </form>
                <div class="box-footer">
                    <p><a href="{{asset('dang-nhap')}}">Quay lại</a></p>
                </div>
            </div>
        </div>


    </selection>

</body>

</html>