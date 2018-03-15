@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    {!! Form::open(['url' => '/searchBus']) !!}
                    {!! Form::token() !!}
                    {!! Form::label('from', 'From') !!}
                    {!! Form::select('from', 
                        [ 'ABV' => 'Abuja',
                        'LOS' => 'Lagos',
                        ]) !!}
                        {!! Form::label('to', 'To') !!}
                    {!! Form::select('to', 
                        [ 'ABV' => 'Abuja',
                        'LOS' => 'Lagos',
                        ]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
