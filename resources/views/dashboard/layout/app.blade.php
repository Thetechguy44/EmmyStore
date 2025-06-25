<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<!-- body start -->

<body data-menu-color="light" data-sidebar="default" <!-- Begin page -->
    <div id="app-layout">


        <!-- Topbar Start -->
        <div class="app-sidebar-menu">
            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <div class="logo-box">
                        <a class='logo logo-light' href='index.html'>
                            <span class="logo-sm">
                                    <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="backend/assets/images/logo-light.png" alt="" height="24">
                                </span>
                        </a>
                        <a class='logo logo-dark' href='index.html'>
                            <span class="logo-sm">
                                    <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="backend/assets/images/logo-dark.png" alt="" height="24">
                                </span>
                        </a>
                    </div>

                    <ul id="side-menu">

                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="#sidebarDashboards" data-bs-toggle="collapse">
                                <i data-feather="home"></i>
                                <span> Dashboard </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='index.html'>CRM</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='forms-elements.html'>Uploads</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='tables-basic.html'>View works</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        <div class="app-sidebar-menu">
            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <div class="logo-box">
                        <a class='logo logo-light' href='index.html'>
                            <span class="logo-sm">
                                    <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="backend/assets/images/logo-light.png" alt="" height="24">
                                </span>
                        </a>
                        <a class='logo logo-dark' href='index.html'>
                            <span class="logo-sm">
                                    <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="backend/assets/images/logo-dark.png" alt="" height="24">
                                </span>
                        </a>
                    </div>

                    <ul id="side-menu">

                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="#sidebarDashboards" data-bs-toggle="collapse">
                                <i data-feather="home"></i>
                                <span> Dashboard </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='index.html'>CRM</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='forms-elements.html'>Uploads</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='tables-basic.html'>View works</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            @yield('content')

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col fs-13 text-muted text-center">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> - Made with <span class="mdi mdi-heart text-danger"></span> by <a href="#!" class="text-reset fw-semibold">Emma</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- Apexcharts JS -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- for basic area chart -->
    <script src="../../../apexcharts.com/samples/assets/stock-prices.js"></script>

    <!-- Widgets Init Js -->
    <script src="{{ asset('backend/assets/js/pages/crm-dashboard.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>