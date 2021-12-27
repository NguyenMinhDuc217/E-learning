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
                <h2>User Login</h2>
                <form action="{{route('xl-dang-nhap')}}" method="POST">
                @csrf
                    <div class="box-group">
                        <input class="input-text" type="text" placeholder="Tên đăng nhập" name="ten_dang_nhap">
                        @error('ten_dang_nhap')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="box-group">
                        <input class="input-text" type="password" placeholder="Mật khẩu" name="mat_khau">
                        @error('mat_khau')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit">Đăng nhập</button>
                </form>
                <div class="box-footer">
                    <p><a href="{{route('dang-ky')}} ">Đăng ký</a></p>
                    <p><a href="{{route('dang-ky')}}">Quên mặt khẩu</a></p>
                </div>
            </div>
        </div>


    </selection>

</body>

</html>