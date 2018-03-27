@extends('layouts.new')
@section('content')
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li class="active">Trip</li>
        </ol>
        <div class="row">
            <div class="col-sm-5">
                <div class="box">
                <section class="page-title">
                    <h1> Confirm Trip</h1>
                </section>
                {{--  end section title  --}}
                <section>
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
                    <div class="form-group">
                        <strong>From:</strong>
                        <?php $location = App\Location::where('id', $route->from)->first(); ?>
                        {{ $location->name }} - {{ $location->code}}
                    </div>
                    <div class="form-group">
                        <strong>To:</strong>
                        <?php $destination = App\Location::where('id', $route->to)->first(); ?>
                            {{ $destination->name }} - {{ $destination->code }}
                    </div>
                    <div class="form-group">
                        <strong>Departure Time:</strong>
                        {{ $route->time }}
                    </div>
                    <div class="form-group">
                        <strong>Duration:</strong>
                        {{ $route->duration }} mins
                    </div>
                    <div class="form-group">
                        <strong>Amount:</strong>
                        {{ $route->amount }}
                    </div>
                    <div class="form-group">
                        <strong>Bus Reg Number:</strong>
                        <?php $bus = App\Bus::where('id', $route->bus_id)->first(); ?>
                        {{ $bus->reg_num }}
                    </div>
                    {!! Form::open(array('route' => 'book','method'=>'POST', 'class'=>'form inputs-underline')) !!}
                            <div class="form-group width-30">
                                {!! Form::text('promo_code',null,array('placeholder'=>'Promo Code')) !!}
                            </div><br>
                            {!! Form::hidden('route_id', $route->id) !!}
                            {!! Form::hidden('amount', $route->amount) !!}
                            {!! Form::hidden('bus_id', $route->bus_id) !!}
                            <div class="form-group">
                                {!! Form::submit('Confirm Trip', array('class'=>'btn btn-primary')) !!}
                            </div>
                            {!! Form::close() !!}
                </section>
                </div>
            </div>
            {{--  end col-sm-4  --}}
            <div class="col-sm-7 border-left">
                <section>
                    <h1>Select Seat</h1>
                </section>
            </div>
            {{--  end col-md-6  --}}
        </div>
        {{--  end row  --}}                 
    </div>
    {{--  end container  --}}
</div>
{{--  end page-content  --}}
@endsection
{{--  estimated of bus arrival
estimated dropoff Time
... .
a modal with a form call to book bus  --}}
