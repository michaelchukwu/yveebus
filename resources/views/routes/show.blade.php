@extends('layouts.app')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Route</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('routes.index') }}"> Back</a>
        </div>
    </div>
</div>
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
                <strong>Time:</strong>
               {{ $route->time }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duration:</strong>
               {{ $route->duration }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount:</strong>
               {{ $route->amount }}
            </div>
        </div>
</div>
@endsection