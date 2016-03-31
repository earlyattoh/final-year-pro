<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured final year project management system">
    <meta name="author" content="Early Attoh">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Final Year Pro - Final Year Project Management System</title>

    <link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>

<body>
<div class="bg-image"></div>
<div class="clearfix"></div>

<!-- HOME -->
<section class="home bg-dark" id="home">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="home-wrapper">
                    <h1 class="icon-main text-custom"><i class="md md-album"></i></h1>
                    <h1 class="home-text"><span class="rotate">Welcome to Final Year PRO,Made with <a class="text-custom">You</a> in mind,Built from the Ground-Up</span>
                    </h1>
                    <p class="m-t-30 text-muted-e">
                        A web-platform for managing your entire final year project, from start to finish.
                        <br/>
                        Its Simple, Easy-to-Use and Powerful.
                    </p>

                    <br>

                    <div class="text-center">
                        <a href="{{ url('login')}}" type="button" class="btn btn-default btn-lg btn-custom btn-rounded waves-effect waves-light">Get Started</a>
                    </div>

                   <!--  Modal 
                    <div id="custom-modal" class="modal-demo">
                        <button type="button" class="close" onclick="Custombox.close();">
                            <span>&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="custom-modal-title">User Roles</h4>
                        <div class="custom-modal-text">
                            <h3 class="">Which among these are you?</h3>

                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                                    data-target="#con-close-modal"><span class="btn-label"><i class="fa fa-graduation-cap"></i>
                </span><a href="{{url('user/login')}}">Student</a></button>

                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                                    data-target="#con-close-modal"><span class="btn-label"><i class="fa fa-eye"></i>
                </span><a href="{{url('supervisor/login')}}">Supervisor</a></button>



                           <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                            data-target="#con-close-modal"><span class="btn-label"><i class="fa fa-gear"></i>
                </span><a href="{{url('admin/login')}}">Admin</a></button>


                        </div>
                    </div> -->
                   
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- Countdown -->
<script src="assets/plugins/countdown/dest/jquery.countdown.min.js"></script>
<script src="assets/plugins/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        // Text rotate
        $(".home-text .rotate").textrotator({
            animation: "fade",
            speed: 3000
        });
    });

</script>

<!-- Modal-Effect -->
<script src="assets/plugins/custombox/dist/custombox.min.js"></script>
<script src="assets/plugins/custombox/dist/legacy.min.js"></script>


</body>
</html>
