@extends('layouts.app')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Routes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('routes.index') }}"> Back</a>
        </div>
    </div>
</div>
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
{!! Form::model($route, ['method' => 'PATCH','route' => ['routes.update', $route->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>From:</strong>
                <select name="from" class="form-control">
                    <?php ?>
                    <?php $current_from = App\Location::where('id', $route->from)->first(); ?>
                    <option selected value="{!!$current_from->id!!}">{!! $current_from->name!!} - {!! $current_from->code !!}</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>To:</strong>
                <select name="to" class="form-control">
                        <?php $current_to = App\Location::where('id', $route->to)->first(); ?>
                        <option selected value="{!!$current_to->id!!}">{!! $current_to->name!!} - {!! $current_to->code !!}</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time of Departure:</strong>
                <input class="form-control" value={!! $route->time !!} type="time" name="time">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duration:</strong>
                <div class="input-group-addon">minutes</div>
                <input type="number" name="duration" value={!! $route->duration !!} class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount:</strong>
                <input type="number" name="amount" value={!! $route->amount !!} class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bus:</strong>
                <select name="bus_id" class="form-control">
                   <?php $bus = App\Bus::where('id', $route->bus_id)->first(); ?>
                        <option selected value="{!!$bus->id!!}">{!! $bus->reg_num !!}</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
{!! Form::close() !!}
@endsection