@extends('user.layout.user-default')

@section('customCss')
        <!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ url('') }}/assets/plugins/morris/morris.css">
@stop

@section('title') ToDo @stop


@section('content')
<!-- Start right Content here -->
<!-- ============================================================== -->
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Todos app -->
            <div class="col-lg-4">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-20 header-title"><b>Todo</b></h4>
                    <div class="todoapp">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4>
                            </div>
                            <div class="col-sm-6">
                                <a href="" class="pull-right btn btn-primary btn-sm waves-effect waves-light" id="btn-archive">Archive</a>
                            </div>
                        </div>

                        <ul class="list-group no-margn nicescroll todo-list" style="height: 280px" id="todo-list"></ul>

                        <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                            <div class="row">
                                <div class="col-sm-9 todo-inputbar">
                                    <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                </div>
                                <div class="col-sm-3 todo-send">
                                    <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div> <!-- end col -->
        </div> <!-- container -->
    </div> <!-- content -->

<!-- ============================================================== -->
<!-- End Right content here -->
@stop


@section('pageScripts')

<!-- Todojs  -->
<script src="assets/pages/jquery.todo.js"></script>

@stop

