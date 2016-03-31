@extends('admin.layout.default')

@section('customCss')
        <!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ url('') }}/assets/plugins/morris/morris.css">
@stop

@section('title') Admin Dashboard @stop


@section('content')
@if (!Auth::check())
        <!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Dashboard</h4>
                <p class="text-muted page-title-alt">Welcome to Final Year PRO admin panel!</p>
            </div>
        </div>
        <!-- Page-Title -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-info">
                                    <i class="icon-user"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>180</b></h4>
                                <p class="text-muted m-b-0 m-t-0">Active Students</p>
                            </div>
                            <div class="table-detail text-right">
                                <span data-plugin="peity-donut" data-colors="#34d3eb,#ebeff2" data-width="120" data-height="45">3/5</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-custom">
                                    <i class="icon-folder-alt"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>150</b></h4>
                                <p class="text-muted m-b-0 m-t-0">Active Projects</p>
                            </div>
                            <div class="table-detail text-right">
                                <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45">3/5</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-danger">
                                    <i class="icon-eye"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>32</b></h4>
                                <p class="text-muted m-b-0 m-t-0">Total Supervisors</p>
                            </div>
                            <div class="table-detail text-right">
                                <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45">4/5</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="text-dark header-title m-t-0 m-b-30">Usage Statistics</h4>

                    <div class="widget-chart text-center">
                        <div id="sparkline3"></div>
                        <!--<ul class="list-inline m-t-15">
                            <li>
                                <h5 class="text-muted m-t-20">Target</h5>
                                <h4 class="m-b-0">$1000</h4>
                            </li>
                            <li>
                                <h5 class="text-muted m-t-20">Last week</h5>
                                <h4 class="m-b-0">$523</h4>
                            </li>
                            <li>
                                <h5 class="text-muted m-t-20">Last Month</h5>
                                <h4 class="m-b-0">$965</h4>
                            </li>
                        </ul>-->
                    </div>
                </div>

            </div>


            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="text-dark  header-title m-t-0 m-b-30">Completion Rate</h4>

                    <div class="widget-chart text-center">
                        <div id="sparkline1"></div>
                       <!-- <ul class="list-inline m-t-15">
                            <li>
                                <h5 class="text-muted m-t-20">Target</h5>
                                <h4 class="m-b-0">$1000</h4>
                            </li>
                            <li>
                                <h5 class="text-muted m-t-20">Last week</h5>
                                <h4 class="m-b-0">$523</h4>
                            </li>
                            <li>
                                <h5 class="text-muted m-t-20">Last Month</h5>
                                <h4 class="m-b-0">$965</h4>
                            </li>
                        </ul>-->
                    </div>
                </div>

            </div>



        </div>

        <!-- end row -->

        <div class="row">

            <div class="col-lg-12">

                <div class="portlet"><!-- /primary heading -->
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark text-uppercase">
                            Projects
                        </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                            <span class="divider"></span>
                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="portlet2" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Assign</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Electronic Medical Record System</td>
                                        <td>01/11/2015</td>
                                        <td>2/04/2016</td>
                                        <td><span class="label label-purple">Work in Progess</span></td>
                                        <td>Benjamin Dada</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Decision Support System v1</td>
                                        <td>01/10/2015</td>
                                        <td>6/04/20156/td>
                                        <td><span class="label label-pink">Pending</span></td>
                                        <td>Excel Chukwurah</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Data Mining Tweets</td>
                                        <td>10/09/2015</td>
                                        <td>1/05/2016</td>
                                        <td><span class="label label-default">Completed</span></td>
                                        <td>Jonathan Hacktivist</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Identity Management System</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-purple">Work in Progress</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Time Table Solver using CSP solver algorithm</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-warning">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Ubold Admin v1.3</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-primary">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Ubold Admin v1.3</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-info">Cool</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Ubold Admin v1.3</td>
                                        <td>01/01/2015</td>
                                        <td>31/05/2015</td>
                                        <td><span class="label label-warning">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->


        </div>
        <!-- end row -->

    </div> <!-- container -->
</div>
<!-- content -->
@endif
@stop

@section('pageScripts')

    <script src="{{ url('') }}/assets/plugins/peity/jquery.peity.min.js"></script>

    <script src="{{ url('') }}/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="{{ url('') }}/assets/pages/jquery.dashboard_3.js"></script>

@stop