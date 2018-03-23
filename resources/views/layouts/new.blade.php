<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Michael Chukwu">

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

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
                <a href="{{ url('/home') }}" class="brand"><img src="assets/img/logo.png" alt=""></a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="has-child"><a href="#nav-listing">Listing</a>
                            <div class="wrapper">
                                <div id="nav-listing" class="nav-wrapper">
                                    <ul>
                                        <li class="has-child"><a href="#nav-grid-listing">Grid Listing</a>
                                            <div id="nav-grid-listing" class="nav-wrapper">
                                                <ul>
                                                    <li><a href="listing-grid-right-sidebar.html">With Right Sidebar</a></li>
                                                    <li><a href="listing-grid-left-sidebar.html">With Left Sidebar</a></li>
                                                    <li><a href="listing-grid-full-width.html">Full Width</a></li>
                                                    <li><a href="listing-grid-different-widths.html">Different Widths</a></li>
                                                    <li><a href="listing-grid-3-items.html">3 Items in Row</a></li>
                                                    <li><a href="listing-grid-4-items.html">4 Items in Row</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-child"><a href="#nav-row-listing">Row Listing</a>
                                            <div id="nav-row-listing" class="nav-wrapper">
                                                <ul>
                                                    <li><a href="listing-row-right-sidebar.html">Row Right Sidebar</a></li>
                                                    <li><a href="listing-row-left-sidebar.html">Row Left Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="mega-menu-parent has-child"><a href="#nav-pages">Pages</a>
                            <div class="wrapper">
                                <div class="mega-menu">
                                    <div class="nav-wrapper" id="nav-pages">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3">
                                                    <h4 class="heading">General</h4>
                                                    <ul>
                                                        <li><a href="faq.html">Faq</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="submit.html">Submit Listing</a></li>
                                                        <li><a href="detail.html">Listing Detail</a></li>
                                                        <li><a href="detail-2.html">Listing Detail v2</a></li>
                                                        <li><a href="agents-listing.html">Agents Listing</a></li>
                                                        <li><a href="agent-detail.html">Agent Detail</a></li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-3-->
                                                <div class="col-md-3 col-sm-3">
                                                    <h4 class="heading">User</h4>
                                                    <ul>
                                                        <li><a href="profile.html">Profile Edit</a></li>
                                                        <li><a href="sign-in.html">Sign In</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="reset-password.html">Reset Password</a></li>
                                                        <li><a href="my-listings.html">My Listings</a></li>
                                                        <li><a href="edit-listing.html">Edit Listing</a></li>
                                                        <li><a href="reviews.html">Reviews</a></li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-3-->
                                                <div class="col-md-3 col-sm-3">
                                                    <h4 class="heading">Other</h4>
                                                    <ul>
                                                        <li><a href="elements.html">Elements / Shortcodes</a></li>
                                                        <li><a href="404.html">404 Error Page</a></li>
                                                        <li><a href="sticky-footer.html">Sticky Footer</a></li>
                                                        <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                                        <li><a href="grid-system.html">Grid System</a></li>
                                                        <li><a href="how-it-works.html">How it Works</a></li>
                                                        <li><a href="rtl.html">RTL Support</a></li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-3-->
                                                <div class="col-md-3 col-sm-3">
                                                    <div class="image center overlay">
                                                        <div class="vertical-aligned-elements">
                                                            <div class="element">
                                                                <a href="#" class="btn btn-default btn-framed">Submit Your Listing</a>
                                                            </div>
                                                        </div>
                                                        <div class="bg-transfer"><img src="assets/img/items/10.jpg" alt=""></div>
                                                    </div>
                                                </div>
                                                <!--end col-md-3-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end container-->
                                    </div>
                                    <!--end collapse-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end mega-menu-->
                        </li>
                        <li class="has-child"><a href="#nav-locations">Molue Pro</a>
                            <div class="wrapper">
                                <div id="nav-locations" class="nav-wrapper">
                                    <ul>
                                        <li class="has-child"><a href="#nav-locations-new-york">New York</a>
                                            <div class="nav-wrapper" id="nav-locations-new-york">
                                                <ul>
                                                    <li class="has-child"><a href="#nav-4">Manhattan</a>
                                                        <div class="nav-wrapper" id="nav-4">
                                                            <ul>
                                                                <li><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                                <li><a href="#">4</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                    <li><a href="#">Staten Island</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-child"><a href="#nav-5">London</a>
                                            <div class="nav-wrapper" id="nav-5">
                                                <ul>
                                                    <li><a href="#">Abbey Wood</a></li>
                                                    <li><a href="#">Bayswater</a></li>
                                                    <li><a href="#">Forestdale</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-child"><a href="#nav-6">Paris</a>
                                            <div class="nav-wrapper" id="nav-6">
                                                <ul>
                                                    <li><a href="#">Louvre</a></li>
                                                    <li><a href="#">Bourse</a></li>
                                                    <li><a href="#">Marais</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--end nav-wrapper-->
                            </div>
                            <!--end wrapper-->
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <!-- <form action="{{ url('/logout')}}" method="post"><input type="submit" value="logout"></form> -->
                                <!-- <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a> -->
                                {!! Form::open(['url' => '/logout']) !!}
                                {!! Form::token() !!}
                                {!! Form::submit('Logout!') !!}
                                {!! Form::close() !!}
                                </li>
                            </ul>
                        </li>
					@endif
                </div>
                <!--end secondary-nav-->
                {{--  <a href="#" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-modal-external-file="modal_submit.php" data-target="modal-submit"><i class="fa fa-plus"></i><span>Credit Wallet</span></a>  --}}
                <a href="/wallet" class="btn btn-primary btn-small btn-rounded icon shadow add-listing"><i class="fa fa-plus"></i><span>Credit Wallet</span></a>
                <div class="nav-btn">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
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
                            <img src="assets/img/footer-bg.png" alt="">
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

<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="assets/js/markerclusterer_packed.js"></script>
<script type="text/javascript" src="assets/js/infobox.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.trackpad-scroll-emulator.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/js/maps.js"></script>

<script>
    autoComplete();
</script>

</body>