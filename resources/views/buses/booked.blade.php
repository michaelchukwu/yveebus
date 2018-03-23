@extends('layouts.app')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Trip Confirmed</h2>
        </div>
    </div>
</div>
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
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong id="time-up">Your bus arrives in:</strong>
                <div id="timer"></div>
                Ticket No: {{ $trip->time }}
            </div>
        </div>
</div>


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
