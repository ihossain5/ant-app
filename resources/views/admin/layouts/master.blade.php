<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Ant App Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('admin.layouts.css')
    @yield('pageCss')

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        @include('admin.layouts.left_sidebar')


        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                @include('admin.layouts.navbar')
                <!-- Top Bar End -->

                <!-- ==================
                             PAGE CONTENT START
                             ================== -->

                @yield('main')
                <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class="footer">
                © 2018 Fonik - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.
            </footer>

        </div>
        <!-- End Right content here -->



    </div>
    <!-- END wrapper -->


    @include('admin.layouts.scripts')
    @yield('pageScripts')

</body>

</html>
