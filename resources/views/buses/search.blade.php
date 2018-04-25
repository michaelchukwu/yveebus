@extends('layouts.new')
 
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<?php //$time = \Carbon\Carbon::createFromFormat('H:i:s', $route->time); 
//$now = \Carbon\Carbon::now()->format('H:i:s');?>
{{--  {{ \Carbon\Carbon::parse($now)->diffInHours($time) }}  --}}


    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li class="active">Search</li>
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section class="page-title">
                        <h1>Available Routes</h1>
                    </section>
                    <!--end section-title-->

                    <section>
                        @if($data->count() == 0)
                            <h1>No Bus Available at the moment</h1>
                        @endif
                        @foreach ($data as $key => $route)
                        <div class="item item-row" data-id="1" data-latitude="40.72807182" data-longitude="-73.85735035">
                            <figure class="ribbon">&#8358;{{-- $route->amount --}}</figure>
                            <?php $seats = DB::table('seats')->where('bus_id', $route->bus_id)->where('free',0)->count(); ?>
                            @if ($seats > 0)
                            <a href="{{ route('trip',$route->id) }}">
                            @else
                            <a href="#">
                            @endif
                                <div class="image bg-transfer">
                                    <figure>Leaves: {{-- $route->time --}} </figure>
                                    <img src="assets/img/items/1.jpg" alt="">
                                </div>
                                <!--end image-->
                                <div class="map"></div>
                                <div class="description">
                                    <?php $location = App\Location::where('id', $route->from)->first(); ?>
                                    <?php $destination = App\Location::where('id', $route->to)->first(); ?>
                                    <h3>{{ $location->name }} - {{ $destination->name }}</h3>
                                    <h4>{{-- $route->duration --}} mins</h4>
                                    
                                    <div class="label label-default">
                                           @if($seats > 0)
                                                {{ $seats }} left
                                            @else
                                                No seats available
                                            @endif
                                            
                                            <?php $bus = App\Bus::where('id', $route->bus_id)->first(); ?>
                                            {{ $bus->reg_num }}
                                    </div>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="4">
                                        <span class="stars"></span>
                                        <span class="reviews">6</span>
                                    </div>
                                </div>
                                <!--end additional-info-->
                            </a>

                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">save this route</a></li>
                                    <li><a href="#" class="quick-detail">Details</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        @endforeach
                        <!--end item.row-->
                    </section>
                </div>
                <!--end col-md-9-->

                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                        <section>
                            <h2>Search Again</h2>
                            <form class="form inputs-underline" action="/available" method="POST">
                                {!! Form::token() !!}
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="from">
                                        <option value="">From</option>
                                        <?php $locations = App\Location::get(); ?>
                                           @foreach($locations as $key=>$value)
                                                    <option value="{!! $value->id !!}"> {!! $value->name !!} - {!! $value->code !!}</option>
                                                @endforeach
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="to">
                                        <option value="">To</option>
                                        @foreach($locations as $key=>$value)
                                            <option value="{!! $value->id !!}"> {!! $value->name !!} - {!! $value->code !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end form-group-->
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Search Now<i class="fa fa-search"></i></button>
                                </div>
                                <!--end form-group-->
                            </form>
                        </section>
                        <section>
                            <h2>Trip History</h2>
                            @if($trips->count() == 0)
                                <p>No trips made</p>
                            @else
                                @foreach($trips as $trip)
                                    <div class="item" data-id="1">
                                        <figure class="ribbon">Top</figure>
                                        <a href="detail.html">
                                            <div class="description">
                                            <figure>{{ $trip->id}}Average Price: $8 - $30</figure>
                                                <div class="label label-default">Restaurant</div>
                                                <h3>Marky’s Restaurant</h3>
                                                <h4>63 Birch Street</h4>
                                            </div>
                                            <!--end description-->
                                            <div class="image bg-transfer">
                                                <img src="assets/img/items/1.jpg" alt="">
                                            </div>
                                            <!--end image-->
                                        </a>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </section>
                    </aside>
                    <!--end sidebar-->
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@endsection