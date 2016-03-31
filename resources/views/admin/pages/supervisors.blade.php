@extends('admin.layout.default')

@section('customCss')

@stop

@section('title') Associated Users - Supervisors @stop


@section('content')

        <!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Manage Supervisors</h4>
                <p class="text-muted page-title-alt"> Supervisors /<strong> View Supervisors</strong></p>
            </div>
        </div>

        <div class="content">
            <div class="container">

                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Add New Supervisor</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="control-label">First Name</label>
                                            <input type="text" class="form-control" id="field-1" placeholder="John">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-2" class="control-label">Last name</label>
                                            <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="field-3" class="control-label">Email</label>
                                            <input type="text" class="form-control" id="field-3"
                                                   placeholder="johndoe@apple.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-4" class="control-label">Sex</label>
                                            <select class="form-control">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-5" class="control-label">Mobile Number</label>
                                            <input type="text" class="form-control" id="field-5" placeholder="+234...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="field-6" class="control-label">Staff Id</label>
                                            <input type="text" class="form-control" id="field-6" placeholder="CU013456">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group no-margin">
                                            <label for="field-7" class="control-label">Interest Areas</label>
                                    <textarea class="form-control autogrow" id="field-7"
                                              placeholder="Artificial Intelligence, Bio-informatics, Project Management, Java, Decision Support..."
                                              style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->

                <div class="button-list">
                    <!-- Full width modal -->
                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                            data-target="#con-close-modal"><span class="btn-label"><i class="fa fa-plus"></i>
                </span>Add Supervisor
                    </button>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="m-t-0 header-title"><b>Supervisor Details</b></h4>

                                    <div class="p-20">
                                        <table class="table table table-hover m-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Staff Id</th>
                                                <th>Program</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>CU01556</td>
                                                <td>MIS</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>CU01434</td>
                                                <td>MIS</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>CU013980</td>
                                                <td>Comp. Sci</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div> <!-- container -->

        </div>
        <!-- content -->


    </div> <!-- container -->

</div>
<!-- content -->
@stop

@section('pageScripts')


@stop