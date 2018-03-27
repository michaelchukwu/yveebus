@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="/activate">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Activation Code</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" required>

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Activate Account
                                </button>
                            </div>
                        </div>
                        <span>Check your phone for an activation code</span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection