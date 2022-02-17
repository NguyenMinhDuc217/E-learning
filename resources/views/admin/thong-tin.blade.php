@extends("layouts/layout")
@section("main-content")
<div class="container">
    <div style="display:flex;align-items: flex-start;justify-content: space-evenly;">
        <div class="menu-info">
        <ul class="list-menu">
                <li><a class="btn btn-primary" href="{{route('thong-tin')}}">Thông tin</a></li>
                <li><a class="btn btn-primary" href="{{route('sua-mat-khau')}}">Thay đổi mật khẩu</a></li>
            </ul>
        </div>
        <div style="width:500px">
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
                    <span class="alert-danger">{{empty($messageFail)?'':$messageFail}}</span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection