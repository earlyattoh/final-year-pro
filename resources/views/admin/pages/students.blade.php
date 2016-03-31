@extends('admin.layout.default')

@section('customCss')

@stop

@section('title') Associated Users - Students @stop


@section('content')

        <!-- Start content -->
        <?php $n = 1 ?>
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Manage Students</h4>
                <p class="text-muted page-title-alt"> Students /<strong> View Students</strong></p>
            </div>
        </div>

        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add New Student</h4>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="{{ url('/students/add')}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">First Name</label>
                                    <input type="text" name="firstname" class="form-control" id="field-1" placeholder="John">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Surname</label>
                                    <input type="text" name="surname" class="form-control" id="field-2" placeholder="Doe">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="field-3"
                                           placeholder="johndoe@apple.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">Phone No.</label>
                                    <input type="text" name="phone" class="form-control" id="field-4"
                                           placeholder="+234...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Sex</label>
                                    <select name="sex" class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Program</label>
                                    <input type="text" name="program" class="form-control" id="field-6" placeholder="Computer Science">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-7" class="control-label">Matric</label>
                                    <input type="text" name="matricno" class="form-control" id="field-7" placeholder="12ch013456">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group no-margin">
                                    <label for="field-8" class="control-label">Comments</label>
                                    <textarea name="comment" class="form-control autogrow" id="field-8"
                                              placeholder="Write something about this student"
                                              style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                    <input type="hidden" name="_Token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
        </div><!-- /.modal -->

        <div class="button-list">
            <!-- Full width modal -->
            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                    data-target="#con-close-modal"><span class="btn-label"><i class="fa fa-plus"></i>
                </span>Add Student
            </button>
        </div>

        <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="m-t-0 header-title"><b>Student Details</b></h4>

                            <div class="p-20">
                                <table class="table table table-hover m-0">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Matric Number</th>
                                        <th>Program</th>
                                        <th>Email</th>
                                        <th>Sex</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $student)
                                    <tr>
                                        <th scope="row">{{$n++}}</th>
                                        <td> {{$student->first_name}}</td>
                                        <td>{{$student->last_name}}</td>
                                        <td>{{$student->matric_no}}</td>
                                        <td>{{$student->program}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->sex}}</td>
                                    </tr>
                                    @endforeach
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
@stop

@section('pageScripts')


@stop
