<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Michael Chukwu">
        
            <title>MoluePro Janitor Room</title>
            @yield('links')
    </head>
    <body class="">
        <header>
            <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
                <div class="navbar-brand-group">
                    <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                        <i class="fa fa-lg fa-fw fa-bars"></i>
                    </a>
                    <a class="navbar-brand hidden-xxs" href="/janitor">
                        <span class="sc-visible">
                            m
                        </span>
                        <span class="sc-hidden">
                            molue<span class="bold">pro</span>
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
                    <li class="hidden-xs" style="display:none;">
                        <form class="navbar-form">
                            <div class="navbar-search">
                                <input type="text" placeholder="Search &hellip;" class="form-control">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown" style="display:none;">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <span class="badge badge-up badge-dark badge-small">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title bg-inverse">New Messages</li>
                            <li class="unread">
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="{{ asset('admin/images/avatars/1.jpg') }}">

                                    <div class="message-body">
                                        <strong>Ernest Kerry</strong><br>
                                        Hello, You there?<br>
                                        <small class="text-muted">8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="{{ asset('admin/images/avatars/3.jpg') }}">

                                    <div class="message-body">
                                        <strong>Don Mark</strong><br>
                                        I really appreciate your &hellip;<br>
                                        <small class="text-muted">21 hours</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="{{ asset('admin/images/avatars/8.jpg') }}">

                                    <div class="message-body">
                                        <strong>Jess Ronny</strong><br>
                                        Let me know when you free<br>
                                        <small class="text-muted">5 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="{{ asset('admin/images/avatars/7.jpg') }}">

                                    <div class="message-body">
                                        <strong>Wilton Zeph</strong><br>
                                        If there is anything else &hellip;<br>
                                        <small class="text-muted">06/10/2014 5:31 pm</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="javascript:;"><i class="fa fa-share"></i> See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown" style="display:none;">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                            <i class="glyphicon glyphicon-globe"></i>
                            <span class="badge badge-up badge-danger badge-small">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-notifications pull-right">
                            <li class="dropdown-title bg-inverse">Notifications (3)</li>
                            <li>
                                <a href="javascript:;" class="notification">
                                    <div class="notification-thumb pull-left">
                                        <i class="fa fa-clock-o fa-2x text-info"></i>
                                    </div>
                                    <div class="notification-body">
                                        <strong>Call with John</strong><br>
                                        <small class="text-muted">8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="notification">
                                    <div class="notification-thumb pull-left">
                                        <i class="fa fa-life-ring fa-2x text-warning"></i>
                                    </div>
                                    <div class="notification-body">
                                        <strong>New support ticket</strong><br>
                                        <small class="text-muted">21 hours ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="notification">
                                    <div class="notification-thumb pull-left">
                                        <i class="fa fa-exclamation fa-2x text-danger"></i>
                                    </div>
                                    <div class="notification-body">
                                        <strong>Running low on space</strong><br>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="notification">
                                    <div class="notification-thumb pull-left">
                                        <i class="fa fa-user fa-2x text-muted"></i>
                                    </div>
                                    <div class="notification-body">
                                        New customer registered<br>
                                        <small class="text-muted">06/18/2014 12:31 am</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="javascript:;"><i class="fa fa-share"></i> See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="javascript:;">
                            <img class="img-circle" src="{{ asset('admin/images/profile.jpg') }}">
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right-xs">
                            <li class="arrow"></li>
                            <li style="display:none;"><a href="pages-profile.html">Profile</a></li>
                            <li style="display:none;"><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                            <li style="display:none;"><a href="javascript:;">Messages</a></li>
                            <li style="display:none;"><a href="javascript:;">Settings</a></li>
                            <li class="divider"></li>
                            <li>{!! Form::open(['url' => '/logout']) !!}
                                {!! Form::token() !!}
                                <button type="submit" class="btn btn-link">Logout</button>
                            {!! Form::close() !!}</li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
        </header>
        <div class="page-wrapper">
            <aside class="sidebar sidebar-default">
                <div class="sidebar-profile">
                    <img class="img-circle profile-image" src="{{ asset('admin/images/profile.jpg') }}">

                    <div class="profile-body">
                    <h4>{{ Auth::user()->name }}</h4>

                        <div class="sidebar-user-links">
                            {{--  <a class="btn btn-link btn-xs" href="pages-profile.html" data-placement="bottom" data-toggle="tooltip" data-original-title="Profile"><i class="fa fa-user"></i></a>
                            <a class="btn btn-link btn-xs" href="javascript:;"       data-placement="bottom" data-toggle="tooltip" data-original-title="Messages"><i class="fa fa-envelope"></i></a>
                            <a class="btn btn-link btn-xs" href="javascript:;"       data-placement="bottom" data-toggle="tooltip" data-original-title="Settings"><i class="fa fa-cog"></i></a>  --}}
                            {{--  <a class="btn btn-link btn-xs" href="pages-sign-in.html" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout"><i class="fa fa-sign-out"></i></a>  --}}
                             {!! Form::open(['url' => '/logout']) !!}
                                {!! Form::token() !!}
                                <button type="submit" class="btn btn-link btn-xs" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout"><i class="fa fa-sign-out"></i></button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <nav>
                    <h5 class="sidebar-header">Janitor</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-dropdown">
                            <a href="#" title="Users">
                                <i class="fa fa-lg fa-fw fa-user"></i> Users
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{ route('users.create') }}" title="New User">
                                        <i class="fa fa-fw fa-caret-right"></i> New User
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index') }}" title="Users">
                                        <i class="fa fa-fw fa-caret-right"></i> Users
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Roles">
                                <i class="fa fa-lg fa-fw fa-suitcase"></i> Roles
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{ route('roles.index') }}" title="All Roles">
                                        <i class="fa fa-fw fa-caret-right"></i> All Roles
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.create') }}" title="Create Role">
                                        <i class="fa fa-fw fa-caret-right"></i> Create Role
                                    </a>
                                </li>
                            </ul>
                        </li>
                       <li class="nav-dropdown">
                            <a href="#" title="Locations"> 
                                <i class="fa fa-lg fa-fw fa-map-marker"></i> Locations
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{ route('locations.index') }}" title="All Locations">
                                        <i class="fa fa-fw fa-caret-right"></i> All Locations
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('locations.create') }}" title="Create Location">
                                        <i class="fa fa-fw fa-caret-right"></i> Create Location
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Routes">
                                <i class="fa fa-lg fa-fw fa-road"></i> Routes
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{ route('routes.index') }}" title="Routes">
                                        <i class="fa fa-fw fa-caret-right"></i> All Routes
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('routes.create') }}" title="Create Route">
                                        <i class="fa fa-fw fa-caret-right"></i> Create Route
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Promos">
                                <i class="fa fa-lg fa-fw fa-tags"></i> Promos
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{ route('promos.index') }}" title="Promos">
                                        <i class="fa fa-fw fa-caret-right"></i> All Promos
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('promos.create') }}" title="Create Promo">
                                        <i class="fa fa-fw fa-caret-right"></i> Create Promo
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown" style="display:none;">
                            <a href="#" title="Roles">
                                for busses
                                <i class="fa fa-lg fa-fw fa-suitcase"></i> Roles
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{ route('roles.index') }}" title="Roles">
                                        <i class="fa fa-fw fa-caret-right"></i> All Roles
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.create') }}" title="Create Role">
                                        <i class="fa fa-fw fa-caret-right"></i> Create Role
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
            @yield('content')
        </div>
            @yield('scripts')

    </body>
</html>
