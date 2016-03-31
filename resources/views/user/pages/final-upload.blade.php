@extends('user.layout.user-default')

@section('customCss')
        <!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ url('') }}/assets/plugins/morris/morris.css">
@stop

@section('title') Final Upload @stop


@section('content')
    <!-- Start right Content here -->
<!-- ============================================================== -->
<!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b> Congratulations!</b></h4>
                    <p class="text-muted m-b-15 font-13">
                        Upload your final project documentation for evaluation and storage.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-20">
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Submit your file here </label>
                                        <input type="file" class="filestyle" data-buttonname="btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


@section('pageScripts')

<script src="{{ url('') }}/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{ url('') }}/assets/plugins/switchery/dist/switchery.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="{{ url('') }}/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="{{ url('') }}/assets/plugins/select2/select2.min.js" type="text/javascript"></script>
<script src="{{ url('') }}/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="{{ url('') }}/assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="{{ url('') }}/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="{{ url('') }}/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

@stop