@extends("layouts/layout")
@section("main-content")
<div class="container">

    <div style="margin: 0 auto;
    max-width: 47.5rem;
    padding: 1.5rem 1.5rem;">
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('chi-tiet-lop-hoc-ad',['id'=>$lopHoc->id]) }}">BẢNG TIN</a></li>
            <li>
                <a href="{{ route('ds-sinh-vien-ad',['id'=>$lopHoc->id]) }}">MỌI NGƯỜI</a>
            </li>
            <li><a href="{{ route('ds-bai-giang-ad',['id'=>$lopHoc->id]) }}">BÀI GIẢNG</a></li>
            <li><a href="{{ route('ds-bai-tap-ad',['id'=>$lopHoc->id]) }}">BÀI TẬP</a></li>
            <li><a href="{{ route('ds-bai-kiem-tra-ad',['id'=>$lopHoc->id]) }}">BÀI KIỂM TRA</a></li>    
            <li><a href="{{ route('ds-thong-bao-ad',['id'=>$lopHoc->id]) }}">THÔNG BÁO</a></li>
            </ul>
        </div>
        <div style="margin-bottom: 2rem;">
            <div class="title-header">
                <h2>Giáo Viên</h2>
            </div>
            <hr class="hr-ds">
            <table class="info-user">
                <tbody>
                    <tr class="list-info">
                        <td class="info">
                            <div style="display:flex">
                                <span>{{$lopHoc->taiKhoan->ho_ten}}</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-bottom: 2rem;">
            <div class="title-header">
                <h2>Sinh Viên</h2>
                <h4>{{$lopHoc->dstaiKhoan->count()}} sinh viên</h4>
            </div>
            <hr class="hr-ds">
            <table class="info-user">
                <tbody>
                    @foreach($lopHoc->dstaiKhoan as $lh)
                    <tr class="list-info-sv">
                        <td class="info">
                            <div style="display:flex">
                                <span>{{$lh->ho_ten}}</span>
                            </div>
                        </td>
                        <!-- <td class="function">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdownn-menu-left">
                                <a class="dropdown-item btn" href="{{route('xl-xoa-sv-tham-gia',['idLop'=>$lopHoc->id,'idSv'=>$lh->id])}}">Kick</a>
                            </div>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection