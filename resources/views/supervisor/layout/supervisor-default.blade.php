<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon_1.ico">

    <title>@yield('title') - Final Year User </title>

    @yield('customCss')

    <link href="{{ url('') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ url('') }}/assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="{{ url('') }}/assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="{{ url('') }}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="{{ url('') }}/assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="{{ url('') }}/assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ url('') }}/assets/js/modernizr.min.js"></script>

</head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            @include('supervisor.layout.supervisor-header')

                    <!-- ========== Left Sidebar Start ========== -->

            @include('supervisor.layout.supervisor-sidebar')

                    <!-- Left Sidebar End -->
                    <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">

                @yield('content')

                <footer class="footer text-right">
                    2016 © Final Year Pro.
                </footer>

            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('') }}/assets/images/users/avatar-10.jpg" alt="">
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


        @yield('pageScripts')
                <!-- jQuery  -->
        <script src="{{ url('') }}/assets/js/jquery.min.js"></script>
        <script src="{{ url('') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ url('') }}/assets/js/detect.js"></script>
        <script src="{{ url('') }}/assets/js/fastclick.js"></script>
        <script src="{{ url('') }}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{ url('') }}/assets/js/jquery.blockUI.js"></script>
        <script src="{{ url('') }}/assets/js/waves.js"></script>
        <script src="{{ url('') }}/assets/js/wow.min.js"></script>
        <script src="{{ url('') }}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{ url('') }}/assets/js/jquery.scrollTo.min.js"></script>

        <script src="{{ url('') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('') }}/assets/plugins/datatables/dataTables.bootstrap.js"></script>



        <script src="{{ url('') }}/assets/js/jquery.core.js"></script>
        <script src="{{ url('') }}/assets/js/jquery.app.js"></script>
    </body>
</html>