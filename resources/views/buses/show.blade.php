@extends('layouts.app')
 
@section('content')
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
                {!! Form::open(array('route' => 'book','method'=>'POST')) !!}
                {!! Form::text('promo_code',null,array('placeholder'=>'Promo Code')) !!}
                {!! Form::hidden('route_id', $route->id) !!}
                {!! Form::hidden('amount', $route->amount) !!}
                {!! Form::submit('Confirm Booking') !!}
                {!! Form::close() !!}
                
            </div>
        </div>
</div>
@endsection


{{--  estimated of bus arrival
estimated dropoff Time
... .
a modal with a form call to book bus  --}}
