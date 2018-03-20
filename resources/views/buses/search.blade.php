@extends('layouts.app')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Routes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('home') }}"> Search Again</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Pickup</th>
<th>Dropoff</th>
<th>Time of Departure</th>
<th>ETA</th>
<th>Cost</th>
<th width="280px">Action</th>
</tr>
@foreach ($data as $key => $route)
<tr>
<?php $location = App\Location::where('id', $route->from)->first(); ?>
<td>{{ $location->name }}</td>
<?php $destination = App\Location::where('id', $route->to)->first(); ?>
<td>{{ $destination->name }}</td>
<?php $time = \Carbon\Carbon::createFromFormat('H:i:s', $route->time); 
$now = \Carbon\Carbon::now()->format('H:i:s');?>
{{--  {{ \Carbon\Carbon::parse($now)->diffInHours($time) }}  --}}
<td>{{ $route->time}}</td>
<td>{{ $route->duration}} mins</td>
<td>{{ $route->amount}}</td>
<td>
<a class="btn btn-info" href="{{ route('trip',$route->id) }}">Book</a>
</td>
</tr>
@endforeach
</table>
{{--  {!! $data->render() !!}  --}}
@endsection