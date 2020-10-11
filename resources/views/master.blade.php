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
                            <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
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
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="md md-settings-power"></i> <span>Logout</span>
                        </a>

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

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-light-bulb"></i><span class="label label-primary pull-right">10</span><span> Components </span> </a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="components-grid.html">Grid</a></li>--}}
{{--                            <li><a href="components-widgets.html">Widgets</a></li>--}}
{{--                            <li><a href="components-nestable-list.html">Nesteble</a></li>--}}
{{--                            <li><a href="components-range-sliders.html">Range sliders</a></li>--}}
{{--                            <li><a href="components-masonry.html">Masonry</a></li>--}}
{{--                            <li><a href="components-animation.html">Animation</a></li>--}}
{{--                            <li><a href="components-sweet-alert.html">Sweet Alert</a></li>--}}
{{--                            <li><a href="components-sweet-alert_2.html">Sweet Alert 2</a></li>--}}
{{--                            <li><a href="components-treeview.html">Treeview</a></li>--}}
{{--                            <li><a href="components-tour.html">Tour</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-spray"></i> <span> Icons </span> <span class="menu-arrow"></span> </a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="icons-materialdesign.html">Material Design</a></li>--}}
{{--                            <li><a href="icons-ionicons.html">Ion Icons</a></li>--}}
{{--                            <li><a href="icons-fontawesome.html">Font awesome</a></li>--}}
{{--                            <li><a href="icons-themifyicon.html">Themify Icons</a></li>--}}
{{--                            <li><a href="icons-simple-line.html">Simple line Icons</a></li>--}}
{{--                            <li><a href="icons-weather.html">Weather Icons</a></li>--}}
{{--                            <li><a href="icons-typicons.html">Typicons</a></li>--}}
{{--                            <li><a href="icons-dripicons.html">Dripicons</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forms </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="form-elements.html">General Elements</a></li>--}}
{{--                            <li><a href="form-advanced.html">Advanced Form</a></li>--}}
{{--                            <li><a href="form-validation.html">Form Validation</a></li>--}}
{{--                            <li><a href="form-pickers.html">Form Pickers</a></li>--}}
{{--                            <li><a href="form-wizard.html">Form Wizard</a></li>--}}
{{--                            <li><a href="form-mask.html">Form Masks</a></li>--}}
{{--                            <li><a href="form-summernote.html">Summernote</a></li>--}}
{{--                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>--}}
{{--                            <li><a href="form-code-editor.html">Code Editor</a></li>--}}
{{--                            <li><a href="form-uploads.html">Multiple File Upload</a></li>--}}
{{--                            <li><a href="form-xeditable.html">X-editable</a></li>--}}
{{--                            <li><a href="form-image-crop.html">Image Crop</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span>Tables </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="tables-basic.html">Basic Tables</a></li>--}}
{{--                            <li><a href="tables-datatable.html">Data Table</a></li>--}}
{{--                            <li><a href="tables-editable.html">Editable Table</a></li>--}}
{{--                            <li><a href="tables-responsive.html">Responsive Table</a></li>--}}
{{--                            <li><a href="tables-foo-tables.html">FooTable</a></li>--}}
{{--                            <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>--}}
{{--                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>--}}
{{--                            <li><a href="tables-jsgrid.html">JsGrid Tables</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span class="label label-pink pull-right">11</span><span> Charts </span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="chart-flot.html">Flot Chart</a></li>--}}
{{--                            <li><a href="chart-morris.html">Morris Chart</a></li>--}}
{{--                            <li><a href="chart-chartjs.html">Chartjs</a></li>--}}
{{--                            <li><a href="chart-peity.html">Peity Charts</a></li>--}}
{{--                            <li><a href="chart-chartist.html">Chartist Charts</a></li>--}}
{{--                            <li><a href="chart-c3.html">C3 Charts</a></li>--}}
{{--                            <li><a href="chart-nvd3.html"> Nvd3 Charts</a></li>--}}
{{--                            <li><a href="chart-sparkline.html">Sparkline charts</a></li>--}}
{{--                            <li><a href="chart-radial.html">Radial charts</a></li>--}}
{{--                            <li><a href="chart-other.html">Other Chart</a></li>--}}
{{--                            <li><a href="chart-ricksaw.html">Ricksaw Chart</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-location-pin"></i><span> Maps </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="map-google.html"> Google Map</a></li>--}}
{{--                            <li><a href="map-vector.html"> Vector Map</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="text-muted menu-title">More</li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Pages </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="page-starter.html">Starter Page</a></li>--}}
{{--                            <li><a href="page-login.html">Login</a></li>--}}
{{--                            <li><a href="page-login-v2.html">Login v2</a></li>--}}
{{--                            <li><a href="page-register.html">Register</a></li>--}}
{{--                            <li><a href="page-register-v2.html">Register v2</a></li>--}}
{{--                            <li><a href="page-signup-signin.html">Signin - Signup</a></li>--}}
{{--                            <li><a href="page-recoverpw.html">Recover Password</a></li>--}}
{{--                            <li><a href="page-lock-screen.html">Lock Screen</a></li>--}}
{{--                            <li><a href="page-400.html">Error 400</a></li>--}}
{{--                            <li><a href="page-403.html">Error 403</a></li>--}}
{{--                            <li><a href="page-404.html">Error 404</a></li>--}}
{{--                            <li><a href="page-404_alt.html">Error 404-alt</a></li>--}}
{{--                            <li><a href="page-500.html">Error 500</a></li>--}}
{{--                            <li><a href="page-503.html">Error 503</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-gift"></i><span> Extras </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="extra-profile.html">Profile</a></li>--}}
{{--                            <li><a href="extra-timeline.html">Timeline</a></li>--}}
{{--                            <li><a href="extra-sitemap.html">Site map</a></li>--}}
{{--                            <li><a href="extra-invoice.html">Invoice</a></li>--}}
{{--                            <li><a href="extra-email-template.html">Email template</a></li>--}}
{{--                            <li><a href="extra-maintenance.html">Maintenance</a></li>--}}
{{--                            <li><a href="extra-coming-soon.html">Coming-soon</a></li>--}}
{{--                            <li><a href="extra-faq.html">FAQ</a></li>--}}
{{--                            <li><a href="extra-search-result.html">Search result</a></li>--}}
{{--                            <li><a href="extra-gallery.html">Gallery</a></li>--}}
{{--                            <li><a href="extra-gallery_2.html">Gallery 2</a></li>--}}
{{--                            <li><a href="extra-pricing.html">Pricing</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-crown"></i><span class="label label-success pull-right">3</span><span> Apps </span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="apps-calendar.html"> Calendar</a></li>--}}
{{--                            <li><a href="apps-contact.html"> Contact</a></li>--}}
{{--                            <li><a href="apps-taskboard.html"> Taskboard</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Email </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="email-inbox.html"> Inbox</a></li>--}}
{{--                            <li><a href="email-read.html"> Read Mail</a></li>--}}
{{--                            <li><a href="email-compose.html"> Compose Mail</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-widget"></i><span> Layouts </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="layout-leftbar_2.html"> Leftbar with User</a></li>--}}
{{--                            <li><a href="layout-menu-collapsed.html"> Menu Collapsed</a></li>--}}
{{--                            <li><a href="layout-menu-small.html"> Small Menu</a></li>--}}
{{--                            <li><a href="layout-header_2.html"> Header style</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul>--}}
{{--                            <li class="has_sub">--}}
{{--                                <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span></a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>--}}
{{--                                    <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>--}}
{{--                                    <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="text-muted menu-title">Extra</li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Crm </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="crm-dashboard.html"> Dashboard </a></li>--}}
{{--                            <li><a href="crm-contact.html"> Contacts </a></li>--}}
{{--                            <li><a href="crm-opportunities.html"> Opportunities </a></li>--}}
{{--                            <li><a href="crm-leads.html"> Leads </a></li>--}}
{{--                            <li><a href="crm-customers.html"> Customers </a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart"></i><span class="label label-warning pull-right">6</span><span> eCommerce </span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="ecommerce-dashboard.html"> Dashboard</a></li>--}}
{{--                            <li><a href="ecommerce-products.html"> Products</a></li>--}}
{{--                            <li><a href="ecommerce-product-detail.html"> Product Detail</a></li>--}}
{{--                            <li><a href="ecommerce-product-edit.html"> Product Edit</a></li>--}}
{{--                            <li><a href="ecommerce-orders.html"> Orders</a></li>--}}
{{--                            <li><a href="ecommerce-sellers.html"> Sellers</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

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
