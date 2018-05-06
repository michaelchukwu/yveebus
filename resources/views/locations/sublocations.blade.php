@extends('layouts.new')
@section('content')

<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/home"></a>Home</li>
            <li class="active">Select Location</li>
        </ol>
        <div class="row">
            <div class="col-md-4">
                <h3>{{ strtoupper($location_from) }}</h3>
                <select name="from" id="from">
                    <option>Select Pick Up</option>
                    @foreach($from as $from1)
                        <option value="{{ $from1->lng }}">{{$from1->name}}</option>
                    @endforeach
                </select>
                @foreach($from as $from1)
                    <input type="hidden" value="{{ $from1->lat }}" id="from_lat">
                    <input type="hidden" value="{{ $from1->id }}" id="from_id">
                @endforeach
                
            </div>
            <div class="col-md-4">
                <h3>{{ strtoupper($location_to) }}</h3>
                <select onchange="val()" name="to" id="to">
                    <option>Select DropOff </option>
                    @foreach($to as $to1)
                        <option value="{{ $to1->lng }}">{{$to1->name}}</option>
                    @endforeach
                </select>
                 
                @foreach($from as $from1)
                    <input type="hidden" value="{{ $to1->lat }}" id="to_lat">
                    <input type="hidden" value="{{ $to1->id }}" id="to_id">
                @endforeach               
            </div>
            <div class="col-md-4">
                <div class="map height-250px" id="map"></div>
                
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="output"></div>
            </div>
            
        </div>
    </div>
</div>   
@endsection
@section('scripts')
<script>
function val() {
    var a = parseFloat(document.getElementById("from_lat").value);
    var b = parseFloat(document.getElementById("from").value);
    var c = parseFloat(document.getElementById("to_lat").value);
    var d = parseFloat(document.getElementById("to").value);
    var e = parseInt(document.getElementById('to_id').value);
    var f = parseInt(document.getElementById('from_id').value);
    initMap(a, b, c, d, e, f);
}
</script>
<script>
          // This function is called when the user clicks the UI button requesting
      // a geocode of a place ID.
      function geocodePlaceId(geocoder, map, infowindow) {
        var placeId = document.getElementById('place-id').value;
        geocoder.geocode({'placeId': placeId}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
              map.setZoom(11);
              map.setCenter(results[0].geometry.location);
              var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
              });
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }

    function initMap(a, b, c, d, e, f) {
        var bounds = new google.maps.LatLngBounds;
        var markersArray = [];
        var origin = {lat: b, lng: a};
        var destination = {lat: d, lng: c};
        console.log(typeof a);
        var destinationIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=D|FF0000|000000';
        var originIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=O|FFFF00|000000';
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 55.53, lng: 9.4},
          zoom: 10
        });
        var geocoder = new google.maps.Geocoder;

        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: [origin],
          destinations: [destination],
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status !== 'OK') {
            alert('Error was: ' + status);
          } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';
            deleteMarkers(markersArray);

            var showGeocodedAddressOnMap = function(asDestination) {
              var icon = asDestination ? destinationIcon : originIcon;
              return function(results, status) {
                if (status === 'OK') {
                  map.fitBounds(bounds.extend(results[0].geometry.location));
                  markersArray.push(new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: icon
                  }));
                } else {
                  alert('Geocode was not successful due to: ' + status);
                }
              };
            };

            for (var i = 0; i < originList.length; i++) {
              var results = response.rows[i].elements;
              geocoder.geocode({'address': originList[i]},
                  showGeocodedAddressOnMap(false));
              for (var j = 0; j < results.length; j++) {
                geocoder.geocode({'address': destinationList[j]},
                    showGeocodedAddressOnMap(true));
                outputDiv.innerHTML += '<form method="post" action="trip">'
                +' {!! Form::token() !!}'+'<input type="hidden" name="from" value="'+originList[i]+'">'
                +'<input type="hidden" name="to" value="'+destinationList[j]+'">'
                +'<input type="hidden" name="distance_value" value="'+results[j].distance.value+'">'
                +'<input type="hidden" name="duration_value" value="'+results[j].duration.value+'">'
                +'<input type="hidden" name="distance" value="'+results[j].distance.text+'">'
                +'<input type="hidden" name="duration" value="'+results[j].duration.text+'">'
                +'<input type="hidden" name="to_id" value="'+e+'">'
                +'<input type="hidden" name="from_id" value="'+f+'">'
                +'<input type="submit" class="btn" value="Book Ticket">'
                +'{!! Form::close() !!}';
                
              }
            }
          }
        });
      }

      function deleteMarkers(markersArray) {
        for (var i = 0; i < markersArray.length; i++) {
          markersArray[i].setMap(null);
        }
        markersArray = [];
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB56zdHnTuCvhJyLLGjCpR9e8FKSiRPKYc&callback=initMap">
    </script>
@endsection