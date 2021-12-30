@extends("layouts/layout")

@section("main-content")
<div class="container">
    <div style="display:flex;align-items: flex-start;justify-content: space-evenly;">
        <div class="menu-info">
            <h2>Thông tin</h2>
            <form action="{{route('xl-thong-tin')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" value="{{Auth()->user()->username}}" name="ten_dang_nhap">
                    @error('ten_dang_nhap')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Họ tên</label>
                    <input class="form-control" type="text" value="{{Auth()->user()->ho_ten}}" name="ho_ten">
                    @error('ho_ten')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" value="{{Auth()->user()->email}}" name="email">
                    @error('email')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>SDT</label>
                    <input class="form-control" type="text" value="{{Auth()->user()->sdt}}" name="sdt">
                    @error('sdt')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input class="form-control" type="password" name="password">
                    @error('password')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Thay đổi</button>
                </div>
            </form>

        </div>
        <div style="width:500px">
            <h2>Đổi mật khẩu</h2>
            <form action="{{route('xl-sua-mat-khau')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Mật khẩu mới</label>
                    <input class="form-control" type="password" name="new_password">
                    @error('new_password')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Mật khẩu cũ</label>
                    <input class="form-control" type="password" name="old_password">
                    @error('old_password')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Thay đổi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection