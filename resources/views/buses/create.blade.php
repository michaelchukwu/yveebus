@extends('layouts.admin')
@section('links')
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/veneto-admin.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/jquery-select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/jquery-selectBoxIt.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/jquery-chosen.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/bootstrap-tagsinput.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/bootstrap-switch.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
        <!--[if lt IE 9]>
        <script src="{{ asset('assets/libs/html5shiv/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets/libs/respond/respond.min.js') }}"></script>
        <![endif]-->




@endsection
@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif


            <div class="page-content">
                <div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="/janitor">Janitor</a></li>
        <li class="active"><a href="javascript:;">Add Bus</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Add Bus</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3">
            <form class="form-horizontal form-bordered" method="POST">
                {{ Form::token() }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Add Bus</h4>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                            <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                            <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-sm-4">No of Seats</label>

                            <div class="col-sm-8">
                                <input class="form-control" name="seats" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Registration</label>

                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="reg_num" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
</div>


@endsection
@section('scripts')
        <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/bs3/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-navgoco/jquery.navgoco.js') }}"></script>
        <script src="{{ asset('admin/js/main.js') }}"></script>

        <!--[if lt IE 9]>
        <script src="{{ asset('admin/assets/plugins/flot/excanvas.min.js') }}"></script>
        <![endif]-->
        <script src="{{ asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
        <script src="{{ asset('admin/js/demo.js') }}"></script>

        <script src="{{ asset('admin/assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admin/js/forms-validation.js') }}"></script>

        <script src="{{ asset('admin/js/demo.js') }}"></script>

        <script src="{{ asset('admin/assets/libs/jquery-ui/minified/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-select2/select2.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-selectboxit/javascripts/jquery.selectBoxIt.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-chosen/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('admin/js/forms-advanced-components.js') }}"></script>

@endsection