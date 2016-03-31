@extends('user.layout.user-default')

@section('customCSS')
        <!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
@stop

@section('title') Search Results @stop


@section('content')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Search result</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('user') }}">Home</a>
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
                    <h3 class="h4"><b>Search Results For "How stupid is Excel?"</b></h3>
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
                                            <a href="#"> <img class="media-object img-circle" alt="64x64" src="{{url ('')}}/assets/images/users/avatar-1.jpg" style="width: 64px; height: 64px;"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Excel 'Wasiu' Chukwurah</a></h4>
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
                                            <a href="#"> <img class="media-object img-circle" alt="64x64" src="{{url ('')}}/assets/images/users/avatar-2.jpg" style="width: 64px; height: 64px;"> </a>
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


                                <div class="search-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#"> <img class="media-object img-circle" alt="64x64" src="{{url ('')}}/assets/images/users/avatar-3.jpg" style="width: 64px; height: 64px;"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Stillnotdavid</a></h4>
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
                                            <a href="#"> <img class="media-object img-circle" alt="64x64" src="{{url ('')}}/assets/images/users/avatar-4.jpg" style="width: 64px; height: 64px;"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Kurafire</a></h4>
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
                                            <a href="#"> <img class="media-object img-circle" alt="64x64" src="{{url ('')}}/assets/images/users/avatar-5.jpg" style="width: 64px; height: 64px;"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Shahedk</a></h4>
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
        </div>
    </div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
@stop

@section('pageScripts')


@stop