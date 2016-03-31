<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="EarlyAttoh">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Responsive Search</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="{{url('start')}}" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Final Year PR<i class="md md-album"></i></span></a>
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    {{--<div class="pull-left">--}}
                        {{--<button class="button-menu-mobile open-left">--}}
                            {{--<i class="ion-navicon"></i>--}}
                        {{--</button>--}}
                        {{--<span class="clearfix"></span>--}}
                    {{--</div>--}}

                    <form role="search" class="navbar-left app-search pull-left hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>


                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown hidden-xs">
                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                <li class="list-group nicescroll notification-list">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond fa-2x text-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-cog fa-2x text-custom"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-bell-o fa-2x text-danger"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">Updates</h5>
                                                <p class="m-0">
                                                    <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-user-plus fa-2x text-info"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New user registered</h5>
                                                <p class="m-0">
                                                    <small>You have 10 unread messages</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond fa-2x text-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-cog fa-2x text-custom"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="list-group-item text-right">
                                        <small class="font-600">See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    {{--<div class="left side-menu">--}}
        {{--<div class="sidebar-inner slimscrollleft">--}}
            {{--<!--- Divider -->--}}
            {{--<div id="sidebar-menu">--}}
                {{--<ul>--}}

                    {{--<li class="text-muted menu-title">Navigation</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> </a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="index.html">Dashboard 1</a></li>--}}
                            {{--<li><a href="dashboard_2.html">Dashboard 2</a></li>--}}
                            {{--<li><a href="dashboard_3.html">Dashboard 3</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-paint-bucket"></i> <span> UI Kit </span> </a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="ui-buttons.html">Buttons</a></li>--}}
                            {{--<li><a href="ui-panels.html">Panels</a></li>--}}
                            {{--<li><a href="ui-portlets.html">Portlets</a></li>--}}
                            {{--<li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>--}}
                            {{--<li><a href="ui-tabs.html">Tabs</a></li>--}}
                            {{--<li><a href="ui-modals.html">Modals</a></li>--}}
                            {{--<li><a href="ui-progressbars.html">Progress Bars</a></li>--}}
                            {{--<li><a href="ui-notification.html">Notification</a></li>--}}
                            {{--<li><a href="ui-images.html">Images</a></li>--}}
                            {{--<li><a href="ui-carousel.html">Carousel</a>--}}
                            {{--<li><a href="ui-bootstrap.html">Bootstrap UI</a></li>--}}
                            {{--<li><a href="ui-typography.html">Typography</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-light-bulb"></i><span class="label label-primary pull-right">6</span><span> Components </span> </a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="components-grid.html">Grid</a></li>--}}
                            {{--<li><a href="components-widgets.html">Widgets</a></li>--}}
                            {{--<li><a href="components-nestable-list.html">Nesteble</a></li>--}}
                            {{--<li><a href="components-range-sliders.html">Range sliders</a></li>--}}
                            {{--<li><a href="components-animation.html">Animation</a></li>--}}
                            {{--<li><a href="components-sweet-alert.html">Sweet Alerts</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-spray"></i> <span> Icons </span> </a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="icons-glyphicons.html">Glyphicons</a></li>--}}
                            {{--<li><a href="icons-materialdesign.html">Material Design</a></li>--}}
                            {{--<li><a href="icons-ionicons.html">Ion Icons</a></li>--}}
                            {{--<li><a href="icons-fontawesome.html">Font awesome</a></li>--}}
                            {{--<li><a href="icons-themifyicon.html">Themify Icons</a></li>--}}
                            {{--<li><a href="icons-simple-line.html">Simple line Icons</a></li>--}}
                            {{--<li><a href="icons-weather.html">Weather Icons</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forms </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="form-elements.html">General Elements</a></li>--}}
                            {{--<li><a href="form-advanced.html">Advanced Form</a></li>--}}
                            {{--<li><a href="form-validation.html">Form Validation</a></li>--}}
                            {{--<li><a href="form-pickers.html">Form Pickers</a></li>--}}
                            {{--<li><a href="form-wizard.html">Form Wizard</a></li>--}}
                            {{--<li><a href="form-mask.html">Form Masks</a></li>--}}
                            {{--<li><a href="form-summernote.html">Summernote</a></li>--}}
                            {{--<li><a href="form-wysiwig.html">Wysiwig Editors</a></li>--}}
                            {{--<li><a href="form-uploads.html">Multiple File Upload</a></li>--}}
                            {{--<li><a href="form-xeditable.html">X-editable</a></li>--}}
                            {{--<li><a href="form-image-crop.html">Image Crop</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-menu-alt"></i><span>Tables </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="tables-basic.html">Basic Tables</a></li>--}}
                            {{--<li><a href="tables-datatable.html">Data Table</a></li>--}}
                            {{--<li><a href="tables-editable.html">Editable Table</a></li>--}}
                            {{--<li><a href="tables-responsive.html">Responsive Table</a></li>--}}
                            {{--<li><a href="tables-foo-tables.html">FooTable</a></li>--}}
                            {{--<li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-bar-chart"></i><span class="label label-pink pull-right">10</span><span> Charts </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="chart-flot.html">Flot Chart</a></li>--}}
                            {{--<li><a href="chart-morris.html">Morris Chart</a></li>--}}
                            {{--<li><a href="chart-chartjs.html">Chartjs</a></li>--}}
                            {{--<li><a href="chart-peity.html">Peity Charts</a></li>--}}
                            {{--<li><a href="chart-chartist.html">Chartist Charts</a></li>--}}
                            {{--<li><a href="chart-c3.html">C3 Charts</a></li>--}}
                            {{--<li><a href="chart-nvd3.html"> Nvd3 Charts</a></li>--}}
                            {{--<li><a href="chart-sparkline.html">Sparkline charts</a></li>--}}
                            {{--<li><a href="chart-radial.html">Radial charts</a></li>--}}
                            {{--<li><a href="chart-other.html">Other Chart</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-location-pin"></i><span> Maps </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="map-google.html"> Google Map</a></li>--}}
                            {{--<li><a href="map-vector.html"> Vector Map</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="text-muted menu-title">More</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-files"></i><span> Pages </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="page-starter.html">Starter Page</a></li>--}}
                            {{--<li><a href="page-login.html">Login</a></li>--}}
                            {{--<li><a href="page-login-v2.html">Login v2</a></li>--}}
                            {{--<li><a href="page-register.html">Register</a></li>--}}
                            {{--<li><a href="page-register-v2.html">Register v2</a></li>--}}
                            {{--<li><a href="page-signup-signin.html">Signin - Signup</a></li>--}}
                            {{--<li><a href="page-recoverpw.html">Recover Password</a></li>--}}
                            {{--<li><a href="page-lock-screen.html">Lock Screen</a></li>--}}
                            {{--<li><a href="page-400.html">Error 400</a></li>--}}
                            {{--<li><a href="page-403.html">Error 403</a></li>--}}
                            {{--<li><a href="page-404.html">Error 404</a></li>--}}
                            {{--<li><a href="page-404_alt.html">Error 404-alt</a></li>--}}
                            {{--<li><a href="page-500.html">Error 500</a></li>--}}
                            {{--<li><a href="page-503.html">Error 503</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect active"><i class="ti-gift"></i><span> Extras </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="extra-profile.html">Profile</a></li>--}}
                            {{--<li><a href="extra-timeline.html">Timeline</a></li>--}}
                            {{--<li><a href="extra-sitemap.html">Site map</a></li>--}}
                            {{--<li><a href="extra-invoice.html">Invoice</a></li>--}}
                            {{--<li><a href="extra-email-template.html">Email template</a></li>--}}
                            {{--<li><a href="extra-maintenance.html">Maintenance</a></li>--}}
                            {{--<li><a href="extra-coming-soon.html">Coming-soon</a></li>--}}
                            {{--<li><a href="extra-faq.html">FAQ</a></li>--}}
                            {{--<li class="active"><a href="extra-search-result.html">Search result</a></li>--}}
                            {{--<li><a href="extra-gallery.html">Gallery</a></li>--}}
                            {{--<li><a href="extra-pricing.html">Pricing</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-crown"></i><span class="label label-success pull-right">3</span><span> Apps </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="apps-inbox.html"> Email</a></li>--}}
                            {{--<li><a href="apps-calendar.html"> Calendar</a></li>--}}
                            {{--<li><a href="apps-contact.html"> Contact</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-widget"></i><span> Layouts </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="layout-leftbar_2.html"> Leftbar with User</a></li>--}}
                            {{--<li><a href="layout-menu-collapsed.html"> Menu Collapsed</a></li>--}}
                            {{--<li><a href="layout-menu-small.html"> Small Menu</a></li>--}}
                            {{--<li><a href="layout-header_2.html"> Header style</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Level </span></a>--}}
                        {{--<ul>--}}
                            {{--<li class="has_sub">--}}
                                {{--<a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> </a>--}}
                                {{--<ul style="">--}}
                                    {{--<li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>--}}
                                    {{--<li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>--}}
                                    {{--<li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="javascript:void(0);"><span>Menu Level 1.2</span></a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="text-muted menu-title">Extra</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-user"></i><span> Crm </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="crm-dashboard.html"> Dashboard </a></li>--}}
                            {{--<li><a href="crm-contact.html"> Contacts </a></li>--}}
                            {{--<li><a href="crm-opportunities.html"> Opportunities </a></li>--}}
                            {{--<li><a href="crm-leads.html"> Leads </a></li>--}}
                            {{--<li><a href="crm-customers.html"> Customers </a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li class="has_sub">--}}
                        {{--<a href="#" class="waves-effect"><i class="ti-shopping-cart"></i><span> eCommerce </span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="ecommerce-dashboard.html"> Dashboard</a></li>--}}
                            {{--<li><a href="ecommerce-products.html"> Products</a></li>--}}
                            {{--<li><a href="ecommerce-product-detail.html"> Product Detail</a></li>--}}
                            {{--<li><a href="ecommerce-orders.html"> Orders</a></li>--}}
                            {{--<li><a href="ecommerce-sellers.html"> Sellers</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                {{--</ul>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Left Sidebar End -->--}}

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div>
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Search</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Ubold</a>
                            </li>
                            <li class="active">
                                Search result
                            </li>
                        </ol>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="input-group m-t-10">
                            <input type="text" id="" name="" class="form-control input-lg" placeholder="Search...">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn waves-effect waves-light btn-default btn-lg"><i class="fa fa-search m-r-5"></i> Search</button>
                                    </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center m-t-30">
                        <h3 class="h4"><b>Search Results For "Decision Support System"</b></h3>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-result-box m-t-40">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#home" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                                        <span class="hidden-xs"><b>All results</b> <span class="badge badge-primary m-l-10">77</span></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#users" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs"><b>Users</b> <span class="badge badge-pink m-l-10">9</span> </span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#other-tab" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs"><b>Other result</b> <span class="badge badge-info m-l-10">16</span> </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="search-item">
                                                <h3 class="h5 font-600 m-b-5"><a href="#">UBold - Responsive Admin Dashboard</a></h3>
                                                <div class="font-13 text-success m-b-10">
                                                    http://ubold.coderthemes.com/
                                                </div>
                                                <p>
                                                    Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
                                                </p>
                                            </div>

                                            <div class="search-item">
                                                <h3 class="h5 font-600 m-b-5"><a href="#">Moltran - Responsive Admin Dashboard</a></h3>
                                                <div class="font-13 text-success m-b-10">
                                                    http://themeforest.net/user/coderthemes/portfolio?ref=coderthemes
                                                </div>
                                                <p>
                                                    Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
                                                </p>
                                            </div>


                                            <ul class="pagination pagination-split pull-right">
                                                <li class="disabled">
                                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#">4</a>
                                                </li>
                                                <li>
                                                    <a href="#">5</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- end All results tab -->


                                <!-- Users tab -->
                                <div class="tab-pane" id="users">
                                    <div class="search-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"> <img class="media-object img-circle" alt="64x64" src="assets/images/users/avatar-1.jpg" style="width: 64px; height: 64px;"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Chadengle</a></h4>
                                                <p>
                                                    <b>Email:</b>
                                                    <br/>
                                                    <span><a href="#" class="text-muted">mediaheader@mail.com</a></span></p>
                                                <p>
                                                    <b>Bio:</b>
                                                    <br/>
                                                    <span class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="search-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"> <img class="media-object img-circle" alt="64x64" src="assets/images/users/avatar-2.jpg" style="width: 64px; height: 64px;"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Tomaslau</a></h4>
                                                <p>
                                                    <b>Email:</b>
                                                    <br/>
                                                    <span><a href="#" class="text-muted">mediaheader@mail.com</a></span></p>
                                                <p>
                                                    <b>Bio:</b>
                                                    <br/>
                                                    <span class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <ul class="pagination pagination-split pull-right">
                                        <li class="disabled">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">5</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>

                                    <div class="clearfix"></div>


                                </div>
                                <!-- end Users tab -->

                                <div class="tab-pane" id="other-tab">
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                    </p>
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                    </p>
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            2015 © Ubold.
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

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>


<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>