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
                        <?php //$location = App\Location::where('id', $route->from)->first(); ?>
                        {{-- {{ $location->name }} - {{ $location->code}} --}}
                        {{  $data['from']}}
                    </div>
                    <div class="form-group">
                        <strong>To:</strong>
                        <?php //$destination = App\Location::where('id', $route->to)->first(); ?>
                            {{-- {{ $destination->name }} - {{ $destination->code }} --}}
                            {{  $data['to']}}
                    </div>
                    <div class="form-group">
                        <strong>Departure Time:</strong>
                        {{-- {{ $route->time }} --}}
                    </div>
                    <div class="form-group">
                        <strong>Duration:</strong>
                        {{-- {{ $route->duration }} mins --}}
                        {{ $data['duration']}}
                    </div>
                    <div class="form-group">
                        <strong>Estimated Fare:</strong>
                        {{-- {{ $route->amount }} --}}
                        {{ (int)(($data['distance_value']/1000)*(int)$data['price_per_km'][0])+$data['base_amount'][0]}}
                    </div>
                    <div class="form-group">
                        <strong>Base Fare:</strong>
                        {{-- {{ $route->amount }} --}}
                        {{str_replace('"', '', $data['base_amount'])}}NGN
                    </div>
                    <div class="form-group">
                        {{-- <strong>Bus Reg Number:</strong> --}}
                        <?php //$bus = App\Bus::where('id', $route->bus_id)->first(); ?>
                        {{-- {{ $bus->reg_num }} --}}
                    </div>
                    {!! Form::open(array('route' => 'book','method'=>'POST', 'class'=>'form inputs-underline')) !!}
                            <div class="form-group width-30">
                                {!! Form::text('promo_code',null,array('placeholder'=>'Promo Code')) !!}
                            </div><br>
                            {!! Form::hidden('from', $data['from']) !!}
                            {!! Form::hidden('amount', (int)(($data['distance_value']/1000)*(int)$data['price_per_km'][0])+$data['base_amount'][0]) !!}
                            {!! Form::hidden('to', $data['to']) !!}
                            {!! Form::hidden('duration', $data['duration']) !!}
                            {!! Form::hidden('distance', $data['distance']) !!}                                                        
                            {!! Form::hidden('distance_value', $data['distance_value']) !!}                                                        
                            {!! Form::hidden('duration_value', $data['duration_value']) !!}                                                        
                            {!! Form::hidden('from_id', $data['from_id']) !!}                                                        
                            {!! Form::hidden('to_id', $data['to_id']) !!}                                                        
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
                    <h1>Select Seat<sub>Alpha testing</sub></h1>
                </section>
                <div id="seat-map">

                </div>
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
@section('scripts')
<script>
    $(document).ready(function() {

        var sc = $('#seat-map').seatCharts({
            map: [
                'aaaaaaaaaaaa',
                'aaaaaaaaaaaa',
                'bbbbbbbbbb__',
                'bbbbbbbbbb__',
                'bbbbbbbbbbbb',
                'cccccccccccc'
            ],
            seats: {
                a: {
                    price   : 99.99,
                    classes : 'front-seat' //your custom CSS class
                }
            
            },
            click: function () {
                if (this.status() == 'available') {
                    //do some stuff, i.e. add to the cart
                    return 'selected';
                } else if (this.status() == 'selected') {
                    //seat has been vacated
                    return 'available';
                } else if (this.status() == 'unavailable') {
                    //seat has been already booked
                    return 'unavailable';
                } else {
                    return this.style();
                }
            }
        });

        //Make all available 'c' seats unavailable
        sc.find('c.available').status('unavailable');
        
        /*
        Get seats with ids 2_6, 1_7 (more on ids later on),
        put them in a jQuery set and change some css
        */
        sc.get(['2_6', '1_7']).node().css({
            color: '#ffcfcf'
        });
        


    });
</script>
@endsection