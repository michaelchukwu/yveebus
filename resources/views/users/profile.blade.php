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
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                        <form class="form inputs-underline" method="post" action="/profile" enctype="multipart/form-data">
                            {!! Form::token() !!}
                            <section>
                                <div class="user-details box">
                                    <div class="user-image">
                                        <div class="image">
                                            <div class="bg-transfer">
                                                @if($user->avatar == Null)
                                                    <img src="assets/img/person-01.jpg" alt="">
                                                @else
                                                    <img src="{{ asset('/img/avatar/'.$user->avatar) }}" alt="">
                                                @endif
                                                </div>
                                            <!--end bg-transfer-->
                                            <div class="single-file-input">
                                                <input type="file" id="user_image" name="avatar" accept="image/*">
                                                <div>Upload a picture<i class="fa fa-upload"></i></div>
                                            </div>
                                        </div>
                                        <!--end image-->

                                    </div>
                                    <!--end user-image-->
                                    <div class="description clearfix">
                                        <h3>Your current plan</h3>
                                        <h2>Silver</h2>
                                        {{-- <a href="#" class="btn btn-default btn-rounded btn-xs"></a> --}}
                                        <hr>
                                        <figure>
                                            <div class="pull-left"><strong>Date Joined:</strong></div>
                                            <div class="pull-right">{{ $user->created_at->format('d M Y') }}</div>
                                        </figure>
                                    </div>
                                    <!--end description-->
                                </div>
                            </section>
                            <!--end user-details-->
                            <section>
                                <h3>About You</h3>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="first_name">Full Name</label>
                                            <input type="text" class="form-control" name="name" id="first_name" value={{ $user->name }}>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="last_name">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" value="{{ $user->phone }}">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                            </section>
                           
                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded">Save Changes</button>
                                </div>
                                <!--end form-group-->
                            </section>
 
                        <!--end form-->
                        <hr>
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
            <section>
                <section>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                            <h3 class="center">Change Your Password</h3>
                            
                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input type="password" class="form-control" name="current_password" id="current_password" value="******">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control" name="password" id="new_password" placeholder="New Password">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="confirm_new_password">Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirm-password" id="confirm_new_password" placeholder="Confirm New Password">
                                </div>
                                <!--end form-group-->
                                <div class="form-group center">
                                    <button type="submit" class="btn btn-primary btn-framed btn-rounded btn-light-frame">Change Password</button>
                                </div>
                                <!--end form-group-->
                            </form>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
    @endsection