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
                <h2>Thay đổi mật khẩu</h2>
                <form action="{{ route('xl-thay-doi-mat-khau',['id'=>$taikhoan->id]) }}" method="POST">
                    @csrf
                    <!--Email-->
                    <div class="box-group">
                        <input class="input-text" type="text" placeholder="Nhập mật khẩu" name="new_password" value="{{$taikhoan->id}}">
                    </div>
                    <div class="box-group">
                        <input class="input-text" type="text" placeholder="Nhập lại mật khẩu" name="confirm_new_password">
                    </div>
                    <button type="submit">Thay đổi</button>
                </form>
                <div class="box-footer">
                    <p><a href="{{asset('dang-nhap')}}">Quay lại</a></p>
                </div>
            </div>
        </div>


    </selection>

</body>

</html>