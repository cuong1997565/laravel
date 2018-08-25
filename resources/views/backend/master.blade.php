<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard | Vietpro shop</title>
<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('backend/js/lumino.glyphs.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Admin</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>  <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ asset('backend/logout') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li role="presentation" class="divider"></li>
            <li class="active"><a href="{{asset('backend/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
            <li><a href="{{asset('backend/listslide')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Quan ly slide </a></li>
            <li><a href="{{asset('backend/listcategory')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Quan ly Danh Mục</a></li>
            <li><a href="{{asset('backend/listpost')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Quan Ly Bai Viet </a></li>

            <li role="presentation" class="divider"></li>
        </ul>

    </div><!--/.sidebar-->

    @yield('content')

    <script src="{{ asset('backend/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/chart.min.js') }}"></script>
{{--     <script src="js/chart-data.js"></script>
 --}}    <script src="{{ asset('backend/js/easypiechart.js') }}"></script>
{{--     <script src="js/easypiechart-data.js"></script>
 --}}    <script src="{{ asset('backend/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('backend/js/slide.js') }}"></script>
    <script src="{{ asset('backend/js/category.js') }}"></script>
    <script src="{{ asset('backend/js/post.js') }}"></script>
    @yield('js')
    @yield('edit')
    @yield('addcategory')
    @yield('editcategory')
    @yield('addpost')
</body>
</html>