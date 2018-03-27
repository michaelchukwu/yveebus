@extends('layouts.new')
 
@section('content')
    <script>
    window.onload = function(){
    document.getElementById('submitAmount').onclick = function(){
        document.getElementById('amount').value = document.getElementById('cost').value * 100;
        document.getElementById('amount-warning').innerHTML = "You are about to pay a sum of &#8358;"+document.getElementById('cost').value;
        }
    }; 
    </script>


   <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li class="active">Wallet</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <section class="page-title">
                        <h1>Wallet</h1>
                    </section>
                    <!--end page-title-->
                    <section>
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
                        <div class="form inputs-underline">
                            {{ csrf_field() }}
                            <div class="form-group">
                                @if($wallet->first())
                                    <strong>Wallet ID:</strong>
                                    {{ $wallet[0]->id }}
                            </div>
                            <div class="form-group">
                                    <strong>Balance:</strong>
                                    &#8358;{{ $wallet[0]->amount }}
                            </div>
                            @else
                                <a href="wallet/create" type="button" class="btn btn-primary width-100">Create Wallet</a>
                            @endif
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="cost">Credit Wallet:</label>
                                <input type="number" name="cost" id="cost" class="form-control" placeholder="Add Amount">                          
                            </div>
                            <div class="form-group center">
                                <button type="submit" id="submitAmount" class="btn btn-primary width-100" data-toggle="modal" data-target="#myModal">Add</button>
                            </div>
                            <!--end form-group-->
                        </div>
                    </section>
                </div>
                <!--col-md-4-->
            </div>
            <!--end ro-->
        </div>
        <!--end container-->
    </div>

            
            

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
          <span id="amount-warning"></span>
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