@extends('layouts.new')
 
@section('content')
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li class="active">Booked</li>
        </ol>
        {{--  end breadcrumb  --}}
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                <p>{{ $message }}</p>
                </div>
                @endif
                <section class="shadow">
                    <div class="map height-250px" id="map-detail"></div>
                    <!--end map-->
                    <div class="content">
                        <div class="vertical-aligned-elements">
                            {{--  <div class="element"><img src="{{ asset('assets/img/logo-2.png') }}" alt=""></div>  --}}
                            {{--  <div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs">Claim</a></div>  --}}
                        </div>
                        <hr>
                        <div class="content">
                            <div class="form-group">
                                <strong id="time-up">Your bus arrives at: {{ $trip->time }}</strong>
                                <div id="tier"></div>
                                    Ticket No: {{ $trip->code }}
                            </div>
                        </div>
                        {{--  <address>
                            <figure><i class="fa fa-map-marker"></i>3858 Marion Street<br>Morrisville, VT 05661 </figure>
                            <figure><i class="fa fa-envelope"></i><a href="#">email@example.com</a></figure>
                            <figure><i class="fa fa-phone"></i>316-436-8619</figure>
                            <figure><i class="fa fa-globe"></i><a href="#">www.markysrestaurant.com</a></figure>
                        </address>  --}}
                    </div>
                </section>
            </div>
            {{--  end col-sm-6  --}}
        </div>
        {{--  end row  --}}
    </div>
    {{--  end container  --}}
</div>
{{--  end page-content     --}}
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $trip->time;?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    console.log(distance);
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("timer").innerHTML = hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("time-up").innerHTML = "Your bus has arrived";
        document.getElementById("timer").innerHTML = "Hurry Do not miss your bus";
        var audio = new Audio('/audio/ding-dong.wav');
        audio.play()
    }
}, 1000);
</script>

@endsection


{{--  estimated of bus arrival
estimated dropoff Time
... .
a modal with a form call to book bus  --}}
