@extends('layouts.app')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Routes Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('routes.create') }}"> Create New Route</a>
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
<th>No</th>
<th>From</th>
<th>To</th>
<th>Time of Departure</th>
<th>Duration</th>
<th>Cost</th>
<th>Bus</th>
<th width="280px">Action</th>
</tr>
@foreach ($data as $key => $route)
<tr>
<td>{{ ++$i }}</td>
<?php $location = App\Location::where('id', $route->from)->first(); ?>
<td>{{ $location->name }}</td>
<?php $destination = App\Location::where('id', $route->to)->first(); ?>
<td>{{ $destination->name }}</td>
<td>{{ $route->time}}</td>
<td>{{ $route->duration}}</td>
<td>{{ $route->amount}}</td>
<?php $bus = App\Bus::where('id', $route->bus_id)->first(); ?>
<td>{{ $bus->reg_num }}</td>
<td>
<a class="btn btn-info" href="{{ route('routes.show',$route->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('routes.edit',$route->id) }}">Edit</a>
{!! Form::open(['method' => 'DELETE','route' => ['routes.destroy', $route->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
@if($route->active == 0)
<a class="btn btn-primary" href="{{ route('route.activate',$route->id) }}">activate</a>
@else
<a href="{{ route('route.deactivate',$route->id)}}" class="btn btn-danger">deactivate</a>
@endif
</td>
</tr>
@endforeach
</table>
{!! $data->render() !!}
@endsection