@extends('admin.layout.default')

@section('customCss')
        <!-- Plugins css-->
<link href="{{url('')}}/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
<link href="{{url('')}}/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
<link href="{{url('')}}/assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
<link href="{{url('')}}/assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
<link href="{{url('')}}/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

@stop

@section('title') Topic Allocation @stop


@section('content')

        <!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <!-- <h4 class="page-title">New Allocation</h4>-->
                <p class="text-muted page-title-alt"> Topic Allocation /<strong> New Topic Allocation</strong></p>
            </div>
        </div>

        <div class="row">


            <div class="col-lg-6 ">
                <div class="panel panel-border panel-custom">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Topic</h3>
                    </div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Topic Title</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Enter topic here...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Matric</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Matric Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Department</label>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <select class="form-control">
                                                        <option>Select department</option>
                                                        <option>CIS</option>
                                                        <option>EIE</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Session</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="2015-2016">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                                        
                                        <select class="selectpicker" multiple data-style="btn-white">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-8">
                                            <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light">
                                                Add
                                            </button>
                                            <button type="reset"
                                                    class="btn btn-default waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- container -->

        </div>
    </div>
</div>
<!-- content -->

@stop

@section('pageScripts')

        <!-- jQuery  -->

<script src="{{url('')}}/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{url('')}}/assets/plugins/switchery/dist/switchery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="{{url('')}}/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="{{url('')}}/assets/plugins/select2/select2.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>


<script>
        jQuery(document).ready(function() {

            //advance multiselect start
            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

            // Select2
            $(".select2").select2();
            
            $(".select2-limiting").select2({
              maximumSelectionLength: 2
            });
            
           $('.selectpicker').selectpicker();
            $(":file").filestyle({input: false});
            });
            
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ion-plus-round',
                verticaldownclass: 'ion-minus-round'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
    
            $("input[name='demo1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='demo2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='demo3']").TouchSpin();
            $("input[name='demo3_21']").TouchSpin({
                initval: 40
            });
            $("input[name='demo3_22']").TouchSpin({
                initval: 40
            });
    
            $("input[name='demo5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            $("input[name='demo0']").TouchSpin({});
            
            
            //Bootstrap-MaxLength
            $('input#defaultconfig').maxlength()
            
            $('input#thresholdconfig').maxlength({
            threshold: 20
        });

        $('input#moreoptions').maxlength({
            alwaysShow: true,
            warningClass: "label label-success",
            limitReachedClass: "label label-danger"
        });

        $('input#alloptions').maxlength({
            alwaysShow: true,
            warningClass: "label label-success",
            limitReachedClass: "label label-danger",
            separator: ' out of ',
            preText: 'You typed ',
            postText: ' chars available.',
            validate: true
        });

        $('textarea#textarea').maxlength({
            alwaysShow: true
        });

        $('input#placement') .maxlength({
                alwaysShow: true,
                placement: 'top-left'
            });
</script>


@stop