@extends('layouts.new')

@section('content')
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Profile</li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center">
                <h1>Your Profile</h1>
            </section>
            <!--end page-title-->         
         <section>
                <div class="section-title">
                    <h2>Tabs</h2>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#trips" aria-controls="trips" role="tab" data-toggle="tab">Trips</a></li>
                    <li role="presentation"><a href="#payments" aria-controls="payments" role="tab" data-toggle="tab">Payments</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="trips">
                        <h3>Content 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia odio sed lorem ultricies feugiat. </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="payments">
                        <h3>Content 2</h3>
                        <div class="my-items table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Listings</th>
                            <th>Featured</th>
                            <th>Views</th>
                            <th>Reviews</th>
                            <th>Rating</th>
                            <th>Last Edited</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="my-item">
                            <td>
                                <div class="image-wrapper">
                                    <div class="circle" data-toggle="tooltip" data-placement="right" title="Top Listing"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="edit-listing.html" class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/items/1.jpg">
                                        </div>
                                    </a>
                                </div>
                                <div class="info">
                                    <a href="detail.html"><h2>Spring Hotel</h2></a>
                                    <figure class="location">Montenegro</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <div class="additional-info">
                                        <span><i class="fa fa-bed"></i>12</span>
                                        <span class="price-info">From <span class="price">$32</span><span class="appendix">/night</span></span>
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end info-->
                            </td>
                            <td><div class="featured yes"><i class="fa fa-check"></i><aside></aside></div></td>
                            <td class="views">426</td>
                            <td class="reviews">45</td>
                            <td class="rating">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                            </td>
                            <td class="last-edited">Today 15:32
                                <span class="last-edit">Last edited: Today 12:35</span>
                                <div class="edit-options">
                                    <a href="edit-listing.html" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                    <a href="reviews.html" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                    <a href="#" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                </div>
                                <!--end edit-options-->
                            </td>
                        </tr>
                        <!--end my-item-->
                        <tr class="my-item">
                            <td>
                                <div class="image-wrapper">
                                    <a href="edit-listing.html" class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/items/2.jpg">
                                        </div>
                                    </a>
                                </div>
                                <div class="info">
                                    <a href="detail.html"><h2>Iron Apple</h2></a>
                                    <figure class="location">4209 Glenview Drive</figure>
                                    <figure class="label label-info">Restaurant</figure>
                                    <div class="additional-info"></div>
                                    <!--end additional-info-->
                                </div>
                                <!--end info-->
                            </td>
                            <td class="featured"><i class="fa fa-times"></i></td>
                            <td class="views">230</td>
                            <td class="reviews">28</td>
                            <td class="rating">
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">19</span>
                                </div>
                            </td>
                            <td class="last-edited">Yesterday 10:45
                                <span class="last-edit">Last edited: Today 12:35</span>
                                <div class="edit-options">
                                    <a href="edit-listing.html" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                    <a href="reviews.html" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                    <a href="#" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                </div>
                                <!--end edit-options-->
                            </td>
                        </tr>
                        <!--end my-item-->
                        <tr class="my-item">
                            <td>
                                <div class="image-wrapper">
                                    <figure class="ribbon">Top</figure>
                                    <a href="edit-listing.html" class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/items/3.jpg">
                                        </div>
                                    </a>
                                </div>
                                <div class="info">
                                    <a href="detail.html"><h2>Bamby Planet Houseboat Bar & Grill</h2></a>
                                    <figure class="location">3857 Josh Lane</figure>
                                    <figure class="label label-info">Bar & Grill</figure>
                                    <div class="additional-info">
                                        <span class="price-info">Happy Hour 18:00 - 19:00</span>
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end info-->
                            </td>
                            <td class="featured"><i class="fa fa-times"></i></td>
                            <td class="views">230</td>
                            <td class="reviews">28</td>
                            <td class="rating">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">12</span>
                                </div>
                            </td>
                            <td class="last-edited">12.05.2016 11:05
                                <span class="last-edit">Last edited: Today 12:35</span>
                                <div class="edit-options">
                                    <a href="edit-listing.html" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                    <a href="reviews.html" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                    <a href="#" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                </div>
                                <!--end edit-options-->
                            </td>
                        </tr>
                        <!--end my-item-->
                        <tr class="my-item">
                            <td>
                                <div class="image-wrapper">
                                    <a href="edit-listing.html" class="image">
                                        <div class="bg-transfer">
                                            <img src="assets/img/items/4.jpg">
                                        </div>
                                    </a>
                                </div>
                                <div class="info">
                                    <a href="detail.html"><h2>Food Festival</h2></a>
                                    <figure class="location">840 My Drive</figure>
                                    <figure class="label label-info">Event</figure>
                                    <div class="additional-info">
                                        <span class="price-info">Free Entry</span>
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end info-->
                            </td>
                            <td class="featured"><i class="fa fa-times"></i></td>
                            <td class="views">230</td>
                            <td class="reviews">28</td>
                            <td class="rating">
                                <div class="rating-passive" data-rating="3">
                                    <span class="stars"></span>
                                    <span class="reviews">3</span>
                                </div>
                            </td>
                            <td class="last-edited">12.02.2016 08:50
                                <span class="last-edit">Last edited: Today 12:35</span>
                                <div class="edit-options">
                                    <a href="edit-listing.html" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                    <a href="reviews.html" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                    <a href="#" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                </div>
                                <!--end edit-options-->
                            </td>
                        </tr>
                        <!--end my-item-->
                        </tbody>
                    </table>
                </div>
                <!--end my-items-->
            </section>
            <section>
                <div class="center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="disabled previous">
                                <a href="#" aria-label="Previous">
                                    <i class="arrow_left"></i>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
                                    <i class="arrow_right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection