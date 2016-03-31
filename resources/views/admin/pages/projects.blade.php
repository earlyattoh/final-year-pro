@extends('admin.layout.default')

@section('customCss')
        <!-- Plugin Css-->
<link rel="stylesheet" href="{{ url('') }}/assets/plugins/magnific-popup/dist/magnific-popup.css" />
<link rel="stylesheet" href="{{ url('') }}/assets/plugins/jquery-datatables-editable/datatables.css" />

@stop



@section('title') Add Project @stop


@section('content')
<?php $n = 1 ?>

        <!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Edit Projects</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Projects</a>
                    </li>
                    <li class="active">
                        Add Project
                    </li>
                </ol>
            </div>
        </div>


        <div class="panel">

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="m-b-30">
                            <button id="addToTable" class="btn btn-default waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>

                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Project Title</th>
                            <th>Owner</th>
                            <th>Supervisor</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr class="gradeX">
                                <td>{{ $n++ }}</td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project->user_id }}</td>
                                <td>Guest</td>
                                <td>Category</td>
                                <td>{{ $project->project_status}}</td>
                                <td class="actions">
                                    <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                    <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                    <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end: page -->

        </div> <!-- end Panel -->
            <div>
                <br>
            </div>

    </div> <!-- container -->

</div> <!-- content -->
<!-- content -->
@stop

@section('pageScripts')
        <!-- Examples -->
<script src="{{ url('') }}/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="{{ url('') }}/assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="{{ url('') }}/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="{{ url('') }}/assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="{{ url('') }}/assets/plugins/tiny-editable/numeric-input-example.js"></script>


<script src="{{ url('') }}/assets/pages/datatables.editable.init.js"></script>

<script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();

</script>
@stop