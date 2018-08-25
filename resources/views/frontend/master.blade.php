<!doctype html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/libs/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/reponsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <title>Hello, world!</title>
</head>

<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark nav default">
        <!-- Brand -->
        <a class="navbar-brand logo" href="#">
            Blog template
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar1">
                <i class="fa fa-search" id="clickme" aria-hidden="true"></i>

            <form>
                <div class="form-group group">
                    <input class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
            </form>
            <ul class="navbar-nav text-capitalize" id="menu1">
               @foreach ($category as $cate)
                <li class="nav-item">
                    <a class="nav-link" href="#">{{$cate['name']}} </a>
                </li>
               @endforeach


            </ul>
        </div>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  text-capitalize" id="menu2">
                <li class="nav-item">
                    <a class="nav-link" href="#">nature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">people</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">trips</a>
                </li>


            </ul>
        </div>
    </nav>
    <!--menu-->


    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-xs-12 padd0">
                <div class="owl-carousel owl-theme slide">
                    <div class="item">
                    @foreach ($slide as $sli)
                    <img class="slide" src="../image/{{$sli['image']}}" alt="">
                    @endforeach
                        <div class="content">
                            <img src="../image/anh2.jpg" id="anh-slide" alt="">
                            <div class="noidung">
                                Maecenas quis lobortis nunc.Nullam sit
                                <br> vel odio congue vulputate a ut nisi.

                            </div>

                            <div class="slide-info">
                                <span class="people">people</span>
                                <div class="text-right name-people">
                                    14 septemvber 2016 |
                                    <a href="#">John Doe</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end slide-->


    <!--main-->
          @yield('content')
    <!--end main-->



  <div class="footer">
        <div class="container-fluid">
               <div class="row">
                     <div class="col-lg-12 text-center paddTop-79-footer">
                           Cum sociis natoque penatibus et magnis dis parturient montes,nascetur ridiculus mus.<br>
                            try awsome tool for desgners <b>symu.co</b>
                     </div>
               </div>
        </div>
    </div>
    <!--end footer-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/js/libs/jquery.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <!-- Optional JavaScript -->
    <script src="{{asset('frontend/js/main.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('frontend/js/owl.carousel.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/slide.js')}}" type="text/javascript"></script>
</body>

</html>