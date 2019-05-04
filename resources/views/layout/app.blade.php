<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Magang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/calendar/fullcalendar.print.min.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/data-table/bootstrap-editable.css') }}">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/modals.css') }}">
    <!-- forms CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/form/all-type-forms.css') }}">
    <!-- summernote CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/summernote/summernote.css') }}">
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/chosen/bootstrap-chosen.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/"><img class="main-logo" src="img/logo/logosmk.png" alt="" /></a>
                <strong><a href="/"><img src="img/logo/logosmk.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="@yield('status-beranda')">
                            <a class="has-arrow" href="/">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Beranda</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Info Magang" href="/"><span class="mini-sub-pro">Info Magang</span></a>
                                </li>
                                @if (Route::has('login'))
                                @if (Auth::check())
                                @if(Auth::user()->level=="admin")
                                <li><a title="Kelola Magang" href="/bukti-pembayaran/verifikasi"><span
                                            class="mini-sub-pro">verifikasi berkas</span></a></li>
                                <li><a title="Kelola Magang" href="/magang"><span class="mini-sub-pro">Kelola
                                            Magang</span></a></li>

                                <li><a title="Nilai" href="/nilai"><span class="mini-sub-pro">Nilai</span></a></li>

                                @endif @endif @endif
                                @if (Route::has('login'))
                                @if (Auth::check())
                                @if(Auth::user()->level=="siswa")
                                <li><a title="Magang Saya" href="/siswa/magang/saya"><span class="mini-sub-pro">Magang
                                            Saya</span></a></li>


                            </ul>
                        </li>@endif @endif @endif
                        @if (Route::has('login'))
                        @if (Auth::check())
                        @if(Auth::user()->level=="guru")
                        <li><a title="Magang Saya" href="/pembimbing/mysiswa"><span class="mini-sub-pro">Siswa
                                    Saya</span></a></li>


                    </ul>
                    </li>@endif @endif @endif

                    @if (Route::has('login'))
                    @if (Auth::check())
                    @if(Auth::user()->level=="admin")
                    <li class="@yield('pembimbing')">
                        <a class="has-arrow" href="/pembimbing" aria-expanded="false"><span
                                class="educate-icon educate-professor icon-wrap"></span> <span
                                class="mini-click-non">Pembimbing</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="/pembimbing"><span class="mini-sub-pro">All
                                        Pembimbing</span></a></li>
                            <li><a title="Add Professor" href="/pembimbing/add"><span class="mini-sub-pro">Add
                                        Pembimbing</span></a></li>
                        </ul>
                    </li>
                    <li class="@yield('siswa')">
                        <a class="has-arrow" href="/siswa" aria-expanded="false"><span
                                class="educate-icon educate-student icon-wrap"></span> <span
                                class="mini-click-non">Siswa</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="/siswa"><span class="mini-sub-pro">Data siswa</span></a>
                            </li>
                            <li><a title="Add Students" href="/siswa/add"><span class="mini-sub-pro">Add
                                        Student</span></a></li>
                        </ul>
                    </li>
                    <li class="@yield('tempat')">
                        <a class="has-arrow" href="/tempat-magang" aria-expanded="false"><span
                                class="educate-icon educate-course icon-wrap"></span> <span
                                class="mini-click-non">Tempat Magang</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Courses" href="/tempat-magang"><span class="mini-sub-pro">All
                                        Tempat</span></a></li>
                            <li><a title="Add Courses" href="/tempat-magang/add"><span class="mini-sub-pro">Add
                                        Tempat</span></a></li>
                        </ul>
                    </li>
                    @endif @endif @endif
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <!-- <img src="img/product/pro4.jpg" alt="" /> -->
                                                        <span class="admin-name">{{ Auth::user()->name }}</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" style="display: none;">
                                                                "?;l.,k" @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Data Siswa</a></li>
                                                <li><a href="index-1.html">Data Pembimbing</a></li>
                                                <li><a href="index-3.html">Permohonan Baru</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                                <li><a href="add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">

                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                    @if ($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        Gagal
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                {{-- Konten Start --}}
                @yield('header')
                {{-- Konten End --}}
            </div>





            {{-- FOOTER --}}
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © 2018. All rights reserved. Template by <a
                                        href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- jquery
		============================================ -->
        <script src="{{ URL::asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <!-- wow JS
		============================================ -->
        <script src="{{ URL::asset('js/wow.min.js') }}"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="{{ URL::asset('js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="{{ URL::asset('js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
		============================================ -->
        <script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
        <!-- counterup JS
		============================================ -->
        <script src="{{ URL::asset('js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ URL::asset('js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ URL::asset('js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS
		============================================ -->
        <script src="{{ URL::asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ URL::asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
		============================================ -->
        <script src="{{ URL::asset('js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ URL::asset('js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
		============================================ -->
        <script src="{{ URL::asset('js/morrisjs/raphael-min.js') }}"></script>
        <script src="{{ URL::asset('js/morrisjs/morris.js') }}"></script>
        <script src="{{ URL::asset('js/morrisjs/morris-active.js') }}"></script>
        <!-- morrisjs JS
		============================================ -->
        <script src="{{ URL::asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ URL::asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <script src="{{ URL::asset('js/sparkline/sparkline-active.js') }}"></script>
        <!-- calendar JS
		============================================ -->
        <script src="{{ URL::asset('js/calendar/moment.min.js') }}"></script>
        <script src="{{ URL::asset('js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('js/calendar/fullcalendar-active.js') }}"></script>
        <!-- plugins JS
		============================================ -->
        <script src="{{ URL::asset('js/plugins.js') }}"></script>
        <!-- summernote JS
    ============================================ -->
        <script src="{{ URL::asset('js/summernote/summernote.min.js') }}"></script>
        <script src="{{ URL::asset('js/summernote/summernote-active.js') }}"></script>

        <!-- data table JS
		============================================ -->
        <script src="{{ URL::asset('js/data-table/bootstrap-table.js') }}"></script>
        <script src="{{ URL::asset('js/data-table/tableExport.js') }}"></script>
        <script src="{{ URL::asset('js/data-table/data-table-active.js') }}"></script>
        <script src="{{ URL::asset('js/data-table/bootstrap-table-editable.js') }}"></script>
        <script src="{{ URL::asset('js/data-table/bootstrap-editable.js') }}"></script>
        <script src="{{ URL::asset('js/data-table/bootstrap-table-resizable.js') }}"></script>
        <script src="{{ URL::asset('js/data-table/colResizable-1.5.source.js') }}"></script>
        <script src="{{ URL::asset('js/data-table/bootstrap-table-export.js') }}"></script>
        <!-- chosen JS
		============================================ -->
        <script src="{{ URL::asset('js/chosen/chosen.jquery.js') }}"></script>
        <script src="{{ URL::asset('js/chosen/chosen-active.js') }}"></script>
        <!-- select2 JS
		============================================ -->
        <script src="{{ URL::asset('js/select2/select2.full.min.js') }}"></script>
        <script src="{{ URL::asset('js/select2/select2-active.js') }}"></script>
        <!-- main JS
		============================================ -->
        <script src="{{ URL::asset('js/main.js') }}"></script>
</body>

</html>
