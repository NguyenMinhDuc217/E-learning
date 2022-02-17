@extends("layouts/layout")
@section("main-content")
<div class="container set-pad">
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Thêm mới</h1>
        </div>
    </div>
    <form action="{{route('xl-them-giao-vien')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txt-ten " class="form-label h2">Username</label>
            <input type="text" class="form-control  h3" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="txt-ten " class="form-label h2">Password</label>
            <input type="text" class="form-control  h3" name="password" placeholder="Password">
        </div>
        <div class="form-group3">
            <label for="txt-ten " class="form-label h2">Email</label>
            <input type="text" class="form-control  h3" name="email" placeholder="Email">
        </div>
        <div class="md-3">
            <label for="txt-ten " class="form-label h2">Họ tên</label>
            <input type="text" class="form-control  h3" name="ho_ten" placeholder="Họ tên">
        </div>
        <div class="md-3">
            <label for="txt-ten " class="form-label h2">SĐT</label>
            <input type="text" class="form-control  h3" name="sdt" placeholder="SĐT">
        </div>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </form>
</div>
@endsection