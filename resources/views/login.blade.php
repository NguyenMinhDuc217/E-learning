<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link href="{{ asset('theme.css') }}" rel="stylesheet">
</head>

<body>
    <selection>
        <div class="container">
            <div class="box">
                <h2>User Login</h2>
                <form action="{{route('xl-dang-nhap')}}" method="POST">
                @csrf
                    <div class="box-group">
                        <input class="input-text" type="text" placeholder="Username" name="ten_dang_nhap">
                        @error('ten_dang_nhap')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="box-group">
                        <input class="input-text" type="password" placeholder="Password" name="mat_khau">
                        @error('mat_khau')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class=" box-group remember-user">
                        <input class="input-checkbox" type="checkbox" name="remember" value="1">Ghi nhớ tài khoản
                    </div>
                    <button type="submit">Login</button>
                </form>
                <div class="box-footer">
                    <p><a href="#">Forgot Password?</a></p>
                </div>
            </div>
        </div>


    </selection>

</body>

</html>