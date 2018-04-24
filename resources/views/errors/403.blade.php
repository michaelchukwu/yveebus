@extends('layouts.new')
 
@section('content')
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">403</li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center error">
                <h1>403</h1>
                <h2>Error</h2>
                <p>Stop! You have gone past your busstop</p>
            </section>
            <!--end page-title-->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 text-center">
                    <a href="/home" class="btn btn-primary width-50">Go Home</a>
                    <!--end form-->
                </div>
            </div>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@endsection