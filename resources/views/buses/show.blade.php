@extends('layouts.app')
@section('content')
<style>
a {
	color: #b71a4c;
}
.front-indicator {
	width: 145px;
	margin: 5px 32px 15px 32px;
	background-color: #f6f6f6;	
	color: #adadad;
	text-align: center;
	padding: 3px;
	border-radius: 5px;
}


div.seatCharts-cell {
	color: #182C4E;
	height: 20px;
	width: 20px;
	line-height: 20px;
	
}
div.seatCharts-seat {
	color: #FFFFFF;
	cursor: pointer;	
}
div.seatCharts-row {
	height: 35px;
}
div.seatCharts-seat.available {
	background-color: #B9DEA0;

}
div.seatCharts-seat.available.first-class {
/* 	background: url(vip.png); */
	background-color: #3a78c3;
}
div.seatCharts-seat.focused {
	background-color: #76B474;
}
div.seatCharts-seat.selected {
	background-color: #E6CAC4;
}
div.seatCharts-seat.unavailable {
	background-color: #472B34;
}
div.seatCharts-container {
	border-right: 1px dotted #adadad;
	width: 200px;
	padding: 20px;
	float: left;
}
div.seatCharts-legend {
	padding-left: 0px;
	position: absolute;
	bottom: 16px;
}
ul.seatCharts-legendList {
	padding-left: 0px;
}
span.seatCharts-legendDescription {
	margin-left: 5px;
	line-height: 30px;
}
#selected-seats {
	max-height: 90px;
	overflow-y: scroll;
	overflow-x: none;
	width: 170px;
}
</style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Confirm Trip</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> cancel</a>
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
    <div class="col-md-6">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>From:</strong>
                        <?php $location = App\Location::where('id', $route->from)->first(); ?>
                        {{ $location->name }} - {{ $location->code}}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>To:</strong>
                        <?php $destination = App\Location::where('id', $route->to)->first(); ?>
                            {{ $destination->name }} - {{ $destination->code }}
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Departure Time:</strong>
                        {{ $route->time }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Duration:</strong>
                        {{ $route->duration }} mins
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Amount:</strong>
                        {{ $route->amount }}
                        </div>
                    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bus Reg Number:</strong>
                        <?php $bus = App\Bus::where('id', $route->bus_id)->first(); ?>
                        {{ $bus->reg_num }}
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {!! Form::open(array('route' => 'book','method'=>'POST')) !!}
                            {!! Form::text('promo_code',null,array('placeholder'=>'Promo Code')) !!}
                            {!! Form::hidden('route_id', $route->id) !!}
                            {!! Form::hidden('amount', $route->amount) !!}
                            {!! Form::hidden('bus_id', $route->bus_id) !!}
                            {!! Form::submit('Confirm Booking') !!}
                            {!! Form::close() !!}
                            
                        </div>
                    </div>
                </div>
            </div>
    <div class="col-md-6">
    <div class="row">
        <h2>Select Seat</h2>
        <div class="col-md-6">
            <div id="seat-map">	
		    </div>
        </div>
    </div>
    </div>
</div>


@endsection
{{--  estimated of bus arrival
estimated dropoff Time
... .
a modal with a form call to book bus  --}}
