<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-learning</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />

    <!-- FONT AWESOME CSS -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- FLEXSLIDER CSS -->
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet" />

    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img class="logo-custom" src="{{asset('assets/img/logo180-50.png')}}" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('trang-chu-giang-vien')}}">TRANG CHỦ</a></li>
                    <li><a href="{{route('tao-lop')}}">TẠO LỚP HỌC</a></li>
                    <li><a><img src="{{asset('assets/img/faculty/1.jpg')}}">{{Auth()->user()->username}}</a>
                        <ul>
                            <li><a href="#">Thông tin</a></li>
                            <li><a href="{{route('dang-xuat')}}">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="main_content">@yield('main-content')</div>

    <!-- <div id="faculty-sec">
        <div class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR MEMBER </h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/1.jpg" class="img-rounded" />
                        <h3>Minh Đức </h3>
                        <hr />
                        <h4>Desigining <br /> Department</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/2.jpg" class="img-rounded" />
                        <h3>Huy Hoàng</h3>
                        <hr />
                        <h4>Enginering <br /> Department</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/3.jpg" class="img-rounded" />
                        <h3>Văn Nhật</h3>
                        <hr />
                        <h4>Management <br /> Department</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo .

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- CONTACT SECTION END-->

    <!-- FOOTER SECTION END-->

    <!--  Jquery Core Script -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!--  Core Bootstrap Script -->
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <!--  Flexslider Scripts -->
    <script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
    <!--  Scrolling Reveal Script -->
    <script src="{{asset('assets/js/scrollReveal.js')}}"></script>
    <!--  Scroll Scripts -->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <!--  Custom Scripts -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>