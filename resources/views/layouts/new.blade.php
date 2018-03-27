<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Michael Chukwu">

    <link href="{{ asset('assets/fonts/font-awesome.cs') }}s" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/elegant-fonts.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/zabuto_calendar.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/trackpad-scroll-emulator.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">

    <title>Molue Pro</title>

</head>

<body class="nav-btn-only homepage">
	<style>
		.customizer{
			display: none;
		}
	</style>
<div class="page-wrapper">
    <header id="page-header">
        <nav>
            <div class="left">
                <a href="{{ url('/home') }}" class="brand"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li class="active"><a href="{{ url('/home') }}">
                            @if(Auth::guest()){}@else{{ Auth::user()->name }}@endif</a>
                        </li>
                        <li>
                            {!! Form::open(['url' => '/logout']) !!}
                                {!! Form::token() !!}
                                <button type="submit" class="logout">logout</button>
                            {!! Form::close() !!}
                        </li>
                    </ul>
                    <!--end navigation-->
                </div>
				<!--end primary-nav-->
                <div class="secondary-nav">
					@if (Auth::guest())
                    	{{--  <a href="#" data-modal-external-file="modal_sign_in.php" data-target="modal-sign-in">Sign In</a>
						<a href="#" class="promoted" data-modal-external-file="modal_register.php" data-target="modal-register">Register</a>  --}}
                        <a href="/login">Login</a>
                        <a href="/register">Register</a>
                    @else
                </div>
                <!--end secondary-nav-->
                {{--  <a href="#" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-modal-external-file="modal_submit.php" data-target="modal-submit"><i class="fa fa-plus"></i><span>Credit Wallet</span></a>  --}}
                <a href="/wallet" class="btn btn-primary btn-small btn-rounded icon shadow add-listing"><i class="fa fa-plus"></i><span>Credit Wallet</span></a>
                
                <div class="nav-btn">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
				@endif                
                <!--end nav-btn-->
            </div>
            <!--end right-->
        </nav>
        <!--end nav-->
    </header>
    <!--end page-header-->

		@yield('content')

    <footer id="page-footer">
        <div class="footer-wrapper">
            <div class="block">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">
                            <p data-toggle="modal" data-target="#myModal">Molue Pro and other services provided by this company are covered in the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
                        </div>
                        <div class="element width-50 text-align-right">
                            <a href="#" class="circle-icon"><i class="social_twitter"></i></a>
                            <a href="#" class="circle-icon"><i class="social_facebook"></i></a>
                            <a href="#" class="circle-icon"><i class="social_youtube"></i></a>
                        </div>
                    </div>
                    <div class="background-wrapper">
                        <div class="bg-transfer opacity-50">
                            <img src="{{ asset('assets/img/footer-bg.png') }}" alt="">
                        </div>
                    </div>
                    <!--end background-wrapper-->
                </div>
            </div>
            <div class="footer-navigation">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">(C) 2018 Molue Pro, All right reserved</div>
                        <div class="element width-50 text-align-right">
                            <a href="/help-centre">help</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script type="text/javascript" src="{{ asset('assets/js/jquery-2.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="{{ asset('assets/js/richmarker-compiled.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/markerclusterer_packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/infobox.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/icheck.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.trackpad-scroll-emulator.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/maps.js') }}"></script>

<script>
    autoComplete();
</script>

</body>