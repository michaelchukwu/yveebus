@extends('layouts.new')

@section('content')

@yield('content')
    <div id="page-content">
        <div class="hero-section has-background full-screen">
            <div class="wrapper">
                <div class="inner">
                    <div class="center">
                        <div class="page-title">
                            <h1>Book a bus now!</h1>
                            <h2>Routes All over, at the best rates</h2>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form search-form horizontal no-background">
                        <div class="container">
                            <form action="/available" method="POST">
                                {!! Form::token() !!}
                                <div class="row">
                                    <div class="col-md-6 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="from">
                                                @foreach($location as $key=>$value)
                                                    <option value="{!! $value->id !!}"> {!! $value->name !!} - {!! $value->code !!}</option>
                                                @endforeach
                                            </select>
                                            {{--  <input type="text" class="form-control" name="keyword" placeholder="Enter Location" id="address-autocomplete">  --}}
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-5 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="to">
                                                @foreach($location as $key=>$value)
                                                    <option value="{!! $value->id !!}"> {!! $value->name !!} - {!! $value->code !!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-3 col-sm-4" style="display:none">
                                        <div class="form-group">
                                            {{--  <input type="text" class="form-control date-picker" name="min-price" placeholder="Event Date">  --}}
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-1 col-sm-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i></button>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </form>
                            <!--end form-hero-->
                        </div>
                        <!--end container-->
                    </div>
                    <!--end search-form-->
                </div>
                <!--end element-->
            </div>
            <!--end vertical-aligned-elements-->

            <div class="slider">
                <div class="owl-carousel opacity-40" data-owl-nav="0" data-owl-dots="0" data-owl-autoplay="1" data-owl-fadeout="1" data-owl-loop="1">
                    <div class="image">
                        <div class="bg-transfer"><img src="assets/img/background-05.jpg" alt=""></div>
                    </div>
                    <div class="image">
                        <div class="bg-transfer"><img src="assets/img/background-06.jpg" alt=""></div>
                    </div>
                    <div class="image">
                        <div class="bg-transfer"><img src="assets/img/background-03.jpg" alt=""></div>
                    </div>
                </div>
                <!--end owl-carousel-->
                <div class="background-wrapper">
                    <div class="background-color background-color-black"></div>
                </div>
                <!--end background-wrapper-->
            </div>
            <!--end slider-->
        </div>
        <!--end hero-section-->

        <section class="block" style="display:none">
            <div class="container">
                <div class="center">
                    <div class="section-title">
                        <div class="center">
                            <h2>Recent Places</h2>
                            <h3 class="subtitle">Fusce eu mollis dui, varius convallis mauris. Nam dictum id</h3>
                        </div>
                    </div>
                    <!--end section-title-->
                </div>
                <!--end center-->
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="1">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Average Price: $8 - $30</figure>
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
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="2">
                            <a href="detail.html">
                                <div class="description">
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Ironapple</h3>
                                    <h4>4209 Glenview Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/2.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="3">
                                    <span class="stars"></span>
                                    <span class="reviews">13</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                    <div class="col-md-6 col-sm-6">
                        <div class="item" data-id="15">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Happy hour: 18:00 - 19:00</figure>
                                    <div class="label label-default">Bar & Grill</div>
                                    <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                    <h4>3857 Losh Lane</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/3.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">56</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                    <div class="col-md-4 col-sm-4">
                        <div class="item" data-id="3">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Starts at: 19:00</figure>
                                    <div class="label label-default">Event</div>
                                    <h3>Food Festival</h3>
                                    <h4>840 My Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/4.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">12</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-4-->
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="4">
                            <a href="detail.html">
                                <div class="description">
                                    <div class="label label-default">Lounge</div>
                                    <h3>Cosmopolit</h3>
                                    <h4>2896 Ripple Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/5.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">43</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                    <div class="col-md-5 col-sm-5">
                        <div class="item" data-id="6">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Free entry</figure>
                                    <div class="label label-default">Concert</div>
                                    <h3>Stand Up Show</h3>
                                    <h4>371 Kinney Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/6.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="0">
                                    <span class="stars"></span>
                                    <span class="reviews">0</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                </div>
                <!--end row-->
                <div class="center">
                    <a href="listing.html" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
                </div>
            <!--end center-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <div class="container" style="display:none"><hr></div>
        <section class="block" style="display:none">
            <div class="container">
                <div class="section-title">
                    <div class="center">
                        <h2>Browse Our Listings</h2>
                    </div>
                </div>
                <!--end section-title-->
                <div class="categories-list">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-paint-brush"></i></div>
                                    <h3><a href="#">Arts & Humanities</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Photography</a><figure class="count">3</figure></li>
                                    <li><a href="">History</a><figure class="count">2</figure></li>
                                    <li><a href="">Literature</a><figure class="count">4</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-suitcase"></i></div>
                                    <h3><a href="#">Business & Economy</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Business to Business</a><figure class="count">6</figure></li>
                                    <li><a href="">Finance</a><figure class="count">4</figure></li>
                                    <li><a href="">Shopping</a><figure class="count">3</figure></li>
                                    <li><a href="">Jobs</a><figure class="count">5</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-desktop"></i></div>
                                    <h3><a href="#">Computer & Internet</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Hardware</a><figure class="count">10</figure></li>
                                    <li><a href="">Software</a><figure class="count">4</figure></li>
                                    <li><a href="">Websites</a><figure class="count">6</figure></li>
                                    <li><a href="">Games</a><figure class="count">7</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                                    <h3><a href="#">Education</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Colleges</a><figure class="count">8</figure></li>
                                    <li><a href="">K-12</a><figure class="count">7</figure></li>
                                    <li><a href="">Distance Learning </a><figure class="count">2</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-television"></i></div>
                                    <h3><a href="#">Entertainment</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Movies</a><figure class="count">6</figure></li>
                                    <li><a href="">TV Shows</a><figure class="count">9</figure></li>
                                    <li><a href="">Music</a><figure class="count">1</figure></li>
                                    <li><a href="">Humor </a><figure class="count">4</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-university"></i></div>
                                    <h3><a href="#">Government</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Elections</a><figure class="count">3</figure></li>
                                    <li><a href="">Military</a><figure class="count">2</figure></li>
                                    <li><a href="">Law</a><figure class="count">6</figure></li>
                                    <li><a href="">Taxes</a><figure class="count">7</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-heart"></i></div>
                                    <h3><a href="#">Health</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Disease</a><figure class="count">1</figure></li>
                                    <li><a href="">Drugs</a><figure class="count">5</figure></li>
                                    <li><a href="">Fitness</a><figure class="count">4</figure></li>
                                    <li><a href="">Nutrition </a><figure class="count">8</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-newspaper-o"></i></div>
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Newspapers</a><figure class="count">5</figure></li>
                                    <li><a href="">Radio</a><figure class="count">9</figure></li>
                                    <li><a href="">Weather</a><figure class="count">3</figure></li>
                                    <li><a href="">Blogs</a><figure class="count">4</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end categories-list-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <section class="block big-padding" style="display:none">
            <div class="container">
                <div class="vertical-aligned-elements">
                    <div class="element width-50">
                        <h3>Subscribe and be notified about new locations</h3>
                    </div>
                    <!--end element-->
                    <div class="element width-50">
                        <form class="form form-email inputs-underline" id="form-subscribe">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Your email" required="">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end element-->
                </div>
                <!--end vertical-aligned-elements-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->
        <section class="block background-is-dark" style="display:none">
            <div class="container">
                <div class="section-title vertical-aligned-elements">
                    <div class="element">
                        <h2>Promoted Locations</h2>
                    </div>
                    <div class="element text-align-right">
                        <a href="#" class="btn btn-framed btn-rounded btn-default invisible-on-mobile">Promote yours</a>
                        <div id="gallery-nav"></div>
                    </div>
                </div>
                <!--end section-title-->
            </div>
            <div class="gallery featured">
                <div class="owl-carousel" data-owl-items="6" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">
                    <div class="item featured" data-id="1">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
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
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="4">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="23">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Starts from: $14.99</figure>
                                <div class="label label-default">Trip</div>
                                <h3>Nascar Racing</h3>
                                <h4>london Airport</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/11.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="4">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="3">
                        <a href="detail.html">
                            <div class="description">
                                <figure>
                                    <span><i class="fa fa-calendar"></i>12.08.2016</span>
                                    <span><i class="fa fa-clock-o"></i>08:00</span>
                                </figure>
                                <div class="label label-default">Event</div>
                                <h3>Food Festival</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/4.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="4">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="4">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
                                <div class="label label-default">Lounge</div>
                                <h3>Cosmopolit</h3>
                                <h4>4696 Jim Rosa Lane</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/5.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="4">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="6">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Event</div>
                                <h3>Stand Up Show</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/6.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="4">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="8">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Get to know yor town!</figure>
                                <div class="label label-default">Event</div>
                                <h3>City Tour</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/10.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="4">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="5">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Real Estate</div>
                                <h3>Beautiful Luxury Villa</h3>
                                <h4>59 Water Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/28.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="3">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="7">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
                                <div class="label label-default">Bar</div>
                                <h3>Fiesta Bar</h3>
                                <h4>3524 Bryan Avenue</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/12.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">17</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="1">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Adrenaline</div>
                                <h3>Senior C# Developer</h3>
                                <h4>ERF Solutions</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/16.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="4">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                </div>
            </div>
            <!--end gallery-->
            <div class="background-wrapper">
                <div class="background-color background-color-default"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->

        <section class="block" style="display:none">
            <div class="container">
                <div class="section-title">
                    <h2>Events Near You</h2>
                </div>
                <!--end section-title-->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element event">
                            <div class="date-icon">
                                <figure class="day">22</figure>
                                <figure class="month">Jun</figure>
                            </div>
                            <h4><a href="detail.html">Lorem ipsum dolor sit amet</a></h4>
                            <figure class="date"><i class="icon_clock_alt"></i>08:00</figure>
                            <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque.</p>
                            <a href="detail.html" class="link arrow">More</a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element event">
                            <div class="date-icon">
                                <figure class="day">04</figure>
                                <figure class="month">Jul</figure>
                            </div>
                            <h4><a href="detail.html">Donec mattis mi vitae volutpat</a></h4>
                            <figure class="date"><i class="icon_clock_alt"></i>12:00</figure>
                            <p>Nullam vitae ex ac neque viverra ullamcorper eu at nunc. Morbi imperdiet.</p>
                            <a href="detail.html" class="link arrow">More</a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element event">
                            <div class="date-icon">
                                <figure class="day">12</figure>
                                <figure class="month">Aug</figure>
                            </div>
                            <h4><a href="detail.html">Vivamus placerat</a></h4>
                            <figure class="date"><i class="icon_clock_alt"></i>12:00</figure>
                            <p>Aenean sed purus ut massa scelerisque bibendum eget vel massa.</p>
                            <a href="detail.html" class="link arrow">More</a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
                <div class="background-wrapper">
                    <div class="background-color background-color-black opacity-5"></div>
                </div>
                <!--end background-wrapper-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->

        <section class="block" style="display:none">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="section-title">
                            <h2>Recently Rated Items</h2>
                        </div>
                        <!--end section-title-->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="item" data-id="2">
                                    <a href="detail.html">
                                        <div class="description">
                                            <div class="label label-default">Restaurant</div>
                                            <h3>Ironapple</h3>
                                            <h4>4209 Glenview Drive</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer">
                                            <img src="assets/img/items/2.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="3">
                                            <span class="stars"></span>
                                            <span class="reviews">13</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-4-->
                            <div class="col-md-5 col-sm-5">
                                <div class="item" data-id="3">
                                    <figure class="ribbon">Top</figure>
                                    <a href="detail.html">
                                        <div class="description">
                                            <figure>Starts at: 19:00</figure>
                                            <div class="label label-default">Event</div>
                                            <h3>Food Festival</h3>
                                            <h4>840 My Drive</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer">
                                            <img src="assets/img/items/4.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"></span>
                                            <span class="reviews">12</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-5-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item" data-id="4">
                                    <a href="detail.html">
                                        <div class="description">
                                            <div class="label label-default">Lounge</div>
                                            <h3>Cosmopolit</h3>
                                            <h4>2896 Ripple Street</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer">
                                            <img src="assets/img/items/5.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"></span>
                                            <span class="reviews">43</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-3-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-md-9-->
                    <div class="col-md-3 col-sm-3">
                        <div class="section-title">
                            <h2>Client’s Word</h2>
                        </div>
                        <div class="testimonials center box">
                            <div class="owl-carousel" data-owl-items="1" data-owl-nav="0" data-owl-dots="1">
                                <blockquote>
                                    <div class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/person-01.jpg" alt="">
                                        </div>
                                    </div>
                                    <h3>Jane Woodstock</h3>
                                    <h4>CEO at ArtBrands</h4>
                                    <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque gravida lacus vel.</p>
                                </blockquote>
                                <blockquote>
                                    <div class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/person-04.jpg" alt="">
                                        </div>
                                    </div>
                                    <h3>Peter Doe</h3>
                                    <h4>CEO at ArtBrands</h4>
                                    <p>Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus lectus. Aliquam laoreet purus in iaculis sodales.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <section class="block" style="display:none">
            <div class="container">
                <div class="section-title">
                    <h2>From the Blog</h2>
                </div>
                <!--end section-title-->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Lorem ipsum dolor sit amet</a></h4>
                            <figure class="date">21.06.2015</figure>
                            <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus</p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Sed et justo ut nibh condimentum lacinia</a></h4>
                            <figure class="date">13.06.2015</figure>
                            <p>Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus lectus. Aliquam laoreet purus in iaculis sodales. </p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Suspendisse varius eros id enim </a></h4>
                            <figure class="date">03.04.2015</figure>
                            <p>Nullam nec turpis blandit, sodales risus vitae, tincidunt velit. Vestibulum ac ipsum tincidunt, vestibulum leo eget, </p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->

        <div class="container" style="display:none">
            <hr>
        </div>
        <!--end container-->

        <section class="block" style="display:none;">
            <div class="container">
                <div class="center section-title opacity-40">
                    <h5>Partners</h5>
                </div>
                <div class="logos">
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-1.png" alt=""></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-2.png" alt=""></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-3.png" alt=""></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-4.png" alt=""></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="assets/img/logo-5.png" alt=""></a>
                    </div>
                </div>
                <!--/ .logos-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </div>
    <!--end page-content-->
@endsection
