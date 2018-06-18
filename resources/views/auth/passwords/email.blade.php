@extends('layouts.new')

@section('content')


    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li class="active">Reset Password</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <section class="page-title">
                        <h1>Reset Your Password</h1>
                    </section>
                    <!--end page-title-->
                    <section>
                        <form class="form inputs-underline" action="{{ route('password.email') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--end form-group-->
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100">Send Password Reset Link</button>
                            </div>
                            <!--end form-group-->
                        </form>

                        <hr>

                        <a href="/login">Return to login</a>
                    </section>
                </div>
                <!--col-md-4-->
            </div>
            <!--end ro-->
        </div>
        <!--end container-->
    </div>
@endsection
