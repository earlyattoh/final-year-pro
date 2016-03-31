@extends('user.layout.user-default')

@section('customCss')
<link href="{{ url('') }}/assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('') }}/assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
@stop

@section('title') Home @stop


@section('content')
<!-- Start right Content here -->
<!-- ============================================================== -->
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Project</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">
                            Overview
                        </li>
                    </ol>
                </div>

                <div class="col-lg-offset-1 col-md-10">

                    <div class="panel panel-default text-center text-white slider-bg m-b-0" style="background: url({{url('')}}/assets/images/big/img1.jpg);">
                        <div class="slider-overlay br-radius"></div>
                        <div class="panel-body p-0">
                            <div class="">
                                <div id="owl-slider-2" class="owl-carousel">
                                    <div class="item">
                                        <h3><a href="#" class="text-white font-600">Hey! Welcome to Final Year PRO</a></h3>
                                        <p class="small">02 April, 2015</p>
                                        <p class="m-t-30"><em>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</em></p>
                                        <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                    </div><!-- /.item -->

                                    <div class="item">
                                        <h3><a href="#" class="text-white font-600">Hey! Welcome back to Final Year PRO</a></h3>
                                        <p class="small">02 April, 2015</p>
                                        <p class="m-t-30"><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</em></p>
                                        <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                    </div><!-- /.item -->

                                    <div class="item">
                                        <h3><a href="#" class="text-white font-600">Hey! Long time no see.</a></h3>
                                        <p class="small">02 April, 2015</p>
                                        <p class="m-t-30"><em>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</em></p>
                                        <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                    </div><!-- /.item -->
                                </div><!-- /#tiles-slide-2 -->
                            </div>
                        </div> <!-- panel-body -->
                    </div><!-- Panel -->
                </div> <!-- col-->


            </div>

        </div> <!-- container -->
    </div> <!-- content -->

<!-- ============================================================== -->
<!-- End Right content here -->
@stop


@section('pageScripts')

    <script src="{{ url('') }}/assets/plugins/owl.carousel/dist/owl.carousel.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            //owl carousel
            $("#owl-slider").owlCarousel({
                loop:true,
                nav:false,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                animateOut: 'fadeOut',
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });

            $("#owl-slider-2").owlCarousel({
                loop:false,
                nav:false,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });

            //Owl-Multi
            $('#owl-multi').owlCarousel({
                loop:true,
                margin:20,
                nav:false,
                autoplay:true,
                responsive:{
                    0:{
                        items:1
                    },
                    480:{
                        items:2
                    },
                    700:{
                        items:4
                    },
                    1000:{
                        items:3
                    },
                    1100:{
                        items:5
                    }
                }
            })
        });

    </script>

@stop

