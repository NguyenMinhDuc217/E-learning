@extends("layouts/layout-giangvien")

@section("main-content")
<div class="container">
    <div style="display:flex;align-items: flex-start;justify-content: center;">
        <div class="menu-info">
            <ul class="list-menu">
                <li><a class="btn btn-primary" href="{{route('thong-tin')}}">Thông tin</a></li>
                <li><a class="btn btn-primary" href="{{route('sua-mat-khau')}}">Thay đổi mật khâu</a></li>
            </ul>
        </div>
        <div style="width:500px">
            <form action="{{route('xl-sua-mat-khau')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Mật khẩu cũ</label>
                    <input class="form-control" type="password"  name="old_password">
                    @error('old_password')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Mật khẩu mới</label>
                    <input class="form-control" type="password" name="new_password">
                    @error('new_password')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu mới</label>
                    <input class="form-control" type="password"  name="confirm_new_password">
                    @error('confirm_new_password')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Thay đổi</button>
                    <span class="alert-danger">{{empty($messageFail)?'':$messageFail}}</span>
                    <span class="alert-success">{{empty($messageSuccess)?'':$messageSuccess}}</span>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection