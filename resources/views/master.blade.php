<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Student Management System solution for student overview">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>
        @yield('title', 'Student Management System')
    </title>

    <!--Morris Chart CSS -->
{{--    <link rel="stylesheet" href="../plugins/morris/morris.css">--}}

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

{{--    <script src="assets/js/modernizr.min.js"></script>--}}


</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="" class="logo"><i class="icon-magnet icon-c-logo"></i><span>SMS</span></a>
                <!-- Image Logo here -->
                <!--<a href="index.html" class="logo">-->
                <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                <!--</a>-->
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
{{--                <li class="list-inline-item dropdown notification-list">--}}
{{--                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"--}}
{{--                       aria-haspopup="false" aria-expanded="false">--}}
{{--                        <i class="dripicons-bell noti-icon"></i>--}}
{{--                        <span class="badge badge-pink noti-icon-badge">4</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">--}}
{{--                        <!-- item-->--}}
{{--                        <div class="dropdown-item noti-title">--}}
{{--                            <h5><span class="badge badge-danger float-right">5</span>Notification</h5>--}}
{{--                        </div>--}}

{{--                        <!-- item-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                            <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>--}}
{{--                            <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>--}}
{{--                        </a>--}}

{{--                        <!-- item-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                            <div class="notify-icon bg-info"><i class="icon-user"></i></div>--}}
{{--                            <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>--}}
{{--                        </a>--}}

{{--                        <!-- item-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                            <div class="notify-icon bg-danger"><i class="icon-like"></i></div>--}}
{{--                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>--}}
{{--                        </a>--}}

{{--                        <!-- All-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">--}}
{{--                            View All--}}
{{--                        </a>--}}

{{--                    </div>--}}
{{--                </li>--}}

                <li class="list-inline-item notification-list">
                    <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                        <i class="dripicons-expand noti-icon"></i>
                    </a>
                </li>

{{--                <li class="list-inline-item notification-list">--}}
{{--                    <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">--}}
{{--                        <i class="dripicons-message noti-icon"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="list-inline-item dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow"><small>Welcome ! {{Auth::user()->name}}</small> </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="md md-account-circle"></i> <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="md md-settings"></i> <span>Settings</span>
                        </a>

                        <!-- item-->
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                            <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>--}}
{{--                        </a>--}}

                        <!-- item-->
                        <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="md md-settings-power"></i> <span>Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                        </form>

                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-light waves-effect">
                        <i class="dripicons-menu"></i>
                    </button>
                </li>
{{--                <li class="hide-phone app-search">--}}
{{--                    <form role="search" class="">--}}
{{--                        <input type="text" placeholder="Search..." class="form-control">--}}
{{--                        <a href=""><i class="fa fa-search"></i></a>--}}
{{--                    </form>--}}
{{--                </li>--}}
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>

                    <li class="text-muted menu-title">Navigation</li>

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="index.html">Dashboard 1</a></li>--}}
{{--                            <li><a href="dashboard_2.html">Dashboard 2</a></li>--}}
{{--                            <li><a href="dashboard_3.html">Dashboard 3</a></li>--}}
{{--                            <li><a href="dashboard_4.html">Dashboard 4</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Student </span> <span class="menu-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('create')}}">Add Student</a></li>
                            <li><a href="{{route('index')}}">Student List</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Subject </span> <span class="menu-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('create-subject')}}">Add Subject</a></li>
                            <li><a href="{{route('subject-index')}}">Subject List</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Department </span> <span class="menu-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('create-department')}}">Add Department</a></li>
                            <li><a href="{{route('department-index')}}">Department List</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Post </span> <span class="menu-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('create.post')}}">Add Student Post</a></li>
                            <li><a href="{{route('post.index')}}">Student Post List</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @yield('content')
        </div> <!-- content -->

        <footer class="footer text-right">
            &copy; 2020. All rights reserved.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar nicescroll">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-10.jpg" alt="">
                        </div>
                        <span class="name">Sortino</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
<script src="{{asset('assets/js/jquery.app.js')}}"></script>

<script>
    $(".select2").select2({
        tags: true
    });
</script>

{{--<script type="text/javascript">--}}
{{--    jQuery(document).ready(function($) {--}}
{{--        $('.counter').counterUp({--}}
{{--            delay: 100,--}}
{{--            time: 1200--}}
{{--        });--}}

{{--        $(".knob").knob();--}}

{{--    });--}}
{{--</script>--}}

</body>
</html>
