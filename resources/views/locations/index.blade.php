@extends('layouts.app')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Locations Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('locations.create') }}"> Create New Location</a>
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
<th>Name</th>
<th>Code</th>
<th width="280px">Action</th>
</tr>
@foreach ($locations as $key => $location)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $location->name }}</td>
<td>{{ $location->code }}</td>
<td>
<a class="btn btn-info" href="{{ route('locations.show',$location->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('locations.edit',$location->id) }}">Edit</a>
{!! Form::open(['method' => 'DELETE','route' => ['locations.destroy', $location->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</td>
</tr>
@endforeach
</table>
{!! $locations->render() !!}
@endsection