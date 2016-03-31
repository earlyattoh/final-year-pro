@extends('admin.layout.default')

@section('customCss')

@stop

@section('title') Topic Allocation @stop


@section('content')
<?php $n = 1 ?>
        <!-- Start content -->
        
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <!-- <h4 class="page-title">New Allocation</h4>-->
                <p class="text-muted page-title-alt"> Topic Allocation /<strong> View Topic Allocation</strong></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="row m-t-10 m-b-10">
                        <div class="col-sm-6 col-lg-8">
                            <form role="form">
                                <div class="form-group contact-search m-b-30">
                                    <input type="text" id="search" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                </div> <!-- form-group -->
                            </form>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="h5 m-0">
                                <span class="vertical-middle">Sort By:</span>
                                <div class="btn-group vertical-middle" data-toggle="buttons">
                                    <label class="btn btn-white btn-md waves-effect active">
                                        <input type="radio" autocomplete="off" checked=""> Title
                                    </label>
                                    <label class="btn btn-white btn-md waves-effect">
                                        <input type="radio" autocomplete="off"> Supervisor
                                    </label>
                                    <label class="btn btn-white btn-md waves-effect">
                                        <input type="radio" autocomplete="off"> Status
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-actions-bar">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Topic Title</th>
                                <th>Topic Id</th>
                                <th>Student Owner</th>
                                <th>Status</th>
                                <th>Supervisor</th>
                                <th style="min-width: 80px;">Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($projects as $project)
                            <tr>
                                <td><b>{{ $n++ }}</b></td>
                                <td>{{ $project->project_name }}</td>
                                <td><a href="#">{{ $project->project_id }}</a></td>
                                <td>
                                    <a href="" class="text-dark"><b>Yemi Dudu</b></a>
                                </td>
                                <td>
                                    <span class="label label-success">{{ $project->project_status}}</span>
                                </td>
                                <td>Oluranti</td>
                                <td>
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </td>
                            </tr>
                            @endforeach    

                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- end col -->


        </div>

    </div>

</div>
<!-- content -->

@stop

@section('pageScripts')

        <!-- Modal-Effect -->
<script src="assets/plugins/custombox/dist/custombox.min.js"></script>
<script src="assets/plugins/custombox/dist/legacy.min.js"></script>

@stop