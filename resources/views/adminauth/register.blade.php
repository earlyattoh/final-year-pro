<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured ">
    <meta name="author" content="EarlyAttoh">

    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon_1.ico">

    <title>@yield('title') Sign Up - Final Year PRO  </title>

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
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Sign Up to <strong class="text-custom">Final Year PRO</strong> </h3>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-20"  role="form" method="post" action="{{ url('admin/login') }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" required=""  id="email" placeholder="Email" value="{{ old('email') ?: '' }}">
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('staff_no') ? ' has-error' : '' }} ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" id="staff_no" placeholder="Staff No." value="{{ old('staff_no') ?: '' }}">
                    </div>
                    @if ($errors->has('staff_no'))
                        <span class="help-block">{{ $errors->first('staff_no') }}</span>
                    @endif
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="First Name">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" id="password" placeholder="Password">
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox" checked="checked">
                            <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                            Register
                        </button>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                Already have account?<a href="{{url('admin/login')}}" class="text-primary m-l-5"><b>Sign In</b></a>
            </p>
        </div>
    </div>

</div>

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