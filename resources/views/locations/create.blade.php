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
        <li class="active"><a href="javascript:;">Add Location</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Add Location</h2>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(array('route' => 'locations.store','method'=>'POST', 'class'=>'form-horizontal form-bordered')) !!} 
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Add Location</h4>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                            <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                            <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-sm-4">Name</label>

                            <div class="col-sm-8">
                                <input class="form-control" name="name" id="place_name" type="test" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Code</label>

                            <div class="col-sm-8">
                                <input class="form-control" type="text" id="place_code" name="code" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Place ID</label>

                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="place_id" id="place_id" value="" required>
                            </div>
                        </div>
                        
                                <input class="form-control" type="hidden" name="geometry" id="geometry" value="" required>
                            
                        <div class="form-group">
                            <label class="control-label col-sm-4">Parent</label>

                            <div class="col-sm-8">
                                <select class="form-control form-select2 select2-offscreen" data-placeholder="Choose a parent..." tabindex="-1" title="" name="parent" id="parent">
                                    <option></option>
                                    @foreach($locations as $location)
                                        <option value="{!! $location->id !!}">{!! $location->name!!}</option>
                                    @endforeach
                                    
                                </select>
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
        <div class="col-md-6">
            <div id="map"></div>
            <div id="infowindow-content">
                <span id="place-name"  class="title"></span><br>
                Place ID <span id="place-id"></span><br>
                <span id="place-address"></span>
            </div>
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
            <script>
      // This sample uses the Place Autocomplete widget to allow the user to search
      // for and select a place. The sample then displays an info window containing
      // the place ID and other information about the place that the user has
      // selected.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 9.0764785, lng: 7.398574},
          zoom: 13
        });

        
        var abujaBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(8.4754919, 6.9367289),
            new google.maps.LatLng(9.2857413, 7.3364417)
        );
        var input = document.getElementById('pac-input');
        var options = {
            // types: ['(cities)'],
            bounds: abujaBounds,
            // componentRestrictions: {
            //     country: 'ng'
            // },
            strictBounds: true
        };
        var autocomplete = new google.maps.places.Autocomplete(input, options);
        autocomplete.bindTo('bounds', map);

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        var place_id_form = document.getElementById('place_id');
        var place_name_form = document.getElementById('place_name');
        var place_code_form = document.getElementById('place_code');
        var place_geometry_form = document.getElementById('geometry');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            return;
          }

          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
          }

          // Set the position of the marker using the place ID and location.
          marker.setPlace({
            placeId: place.place_id,
            location: place.geometry.location
          });
          marker.setVisible(true);

          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-id'].textContent = place.place_id;
          infowindowContent.children['place-address'].textContent =
              place.formatted_address;
          infowindow.open(map, marker);
          place_id_form.value = place.place_id;
          place_name_form.value = place.name;
          place_geometry_form.value = place.geometry.location;
          upper = place.name.substring(0,3);
          place_code_form.value = upper.toUpperCase();

        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB56zdHnTuCvhJyLLGjCpR9e8FKSiRPKYc&libraries=places&callback=initMap"
        async defer></script>
@endsection
<body>
    <input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
</body>