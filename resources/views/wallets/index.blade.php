@extends('layouts.app')
 
@section('content')
    <script>
    window.onload = function(){
    document.getElementById('submitAmount').onclick = function(){
        document.getElementById('amount').value = document.getElementById('cost').value * 100;   
        }
    }; 
    </script>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Wallet </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
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
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            @if($wallet->first())
            <strong>Wallet ID:</strong>
            {{ $wallet[0]->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Amount:</strong>
            {{ $wallet[0]->amount }}
        </div>
    </div>
    @else
        <a href="wallet/create" type="button" class="btn btn-default">Create Wallet</a>
    @endif
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Credit Wallet:</strong>
            <input type="number" name="cost" id="cost">
            {!! Form::submit('Add',array('id'=>'submitAmount','class'=>'btn btn-info btn-lg', 'data-toggle'=>'modal', 'data-target'=>'#myModal')) !!}

            <!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Proceed With Payment?</h4>
      </div>
      <div class="modal-body">
            {!! Form::open(array('route' => 'pay','method'=>'POST')) !!}
            {!! Form::hidden('amount', '', array('id'=>'amount')) !!}
            {!! Form::hidden('email', Auth::user()->email)!!}
            {!! Form::hidden('reference', Paystack::genTranxRef()) !!}
            {!! Form::hidden('key', config('paystack.secretKey')) !!}
            {!! Form::submit('Confirm',array('id'=>'submitAmount','class'=>'btn btn-info btn-lg', 'data-toggle'=>'modal', 'data-target'=>'#myModal')) !!}
            {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


        </div>
    </div>
</div>
@endsection