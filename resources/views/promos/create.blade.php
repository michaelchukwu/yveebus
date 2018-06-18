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


            <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        background-color: #fff;
        border-radius: 2px;
        border: 1px solid transparent;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        box-sizing: border-box;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        height: 29px;
        margin-left: 17px;
        margin-top: 10px;
        outline: none;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      .controls:focus {
        border-color: #4d90fe;
      }
      .title {
        font-weight: bold;
      }
      #infowindow-content {
        display: none;
      }
      #map #infowindow-content {
        display: inline;
      }

    </style>

@endsection

@section('content')






            <div class="page-content">
                <div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="/janitor">Janitor</a></li>
        <li><a href="{{ route('promos.index') }}">Promos</a></li>
        <li class="active"><a href="javascript:;">New Promo</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>New Promo</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(array('route' => 'promos.store','method'=>'POST', 'class'=>'form-horizontal form-bordered')) !!}    
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">New Promo</h4>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                            <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                            <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-sm-4">Code</label>

                            <div class="col-sm-8">
                                {!! Form::text('code', null, array('placeholder' => 'Promo Code','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Amount</label>

                            <div class="col-sm-8">
                                <input type="number" name="amount" placeholder="Amount" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Type</label>

                            <div class="col-sm-8">
                                {!! Form::select('type', ['discount'=>'Discount', 'credit'=>'Credit'], null,['placeholder' => 'Select a Promo type','class' => 'form-control']) !!}
                            </div>
                        </div>
                        
                               
                        <div class="form-group">
                            <label class="control-label col-sm-4">Description</label>

                            <div class="col-sm-8">
                               {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
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
{!! Form::close() !!}
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