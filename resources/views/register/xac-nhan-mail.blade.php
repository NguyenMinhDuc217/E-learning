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
                <h2>Xác nhận</h2>
                <form action="{{route('xl-xac-nhan-mail')}}" method="POST">
                    @csrf
                    <!-- Email -->
                    <div class="box-group">
                        <input class="input-text" type="text" placeholder="Mã xác nhận" name="ma_xac_nhan">
                        <!-- @error('email')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror -->
                    </div>
                    {{}}
                    <button type="submit">Xác nhận</button>
                </form>
                <!-- <div class="box-footer">
                    <p><a href="{{asset('dang-nhap')}}">Quay lại</a></p>
                </div> -->
            </div>
        </div>


    </selection>

</body>

</html>