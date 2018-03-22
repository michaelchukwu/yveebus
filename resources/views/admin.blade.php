
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
        <link rel="stylesheet" href="/admin/css/veneto-admin.min.css">
        <link rel="stylesheet" href="/admin/css/admin.css">
        <link rel="stylesheet" href="/admin/assets/font-awesome/css/font-awesome.css">

        <link rel="stylesheet" href="/admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css"/>
        <link rel="stylesheet" href="/admin/css/plugins/rickshaw.min.css">
        <link rel="stylesheet" href="/admin/css/plugins/morris.min.css">

        <!--[if lt IE 9]>
        <script src="/admin/assets/libs/html5shiv/html5shiv.min.js"></script>
        <script src="/admin/assets/libs/respond/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="">
        <header>
            <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
                <div class="navbar-brand-group">
                    <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                        <i class="fa fa-lg fa-fw fa-bars"></i>
                    </a>
                    <a class="navbar-brand hidden-xxs" href="index.html">
                        <span class="sc-visible">
                            V
                        </span>
                        <span class="sc-hidden">
                            <span class="bold">Veneto</span>
                            ADMIN
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
                    <li class="hidden-xs">
                        <form class="navbar-form">
                            <div class="navbar-search">
                                <input type="text" placeholder="Search &hellip;" class="form-control">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <span class="badge badge-up badge-dark badge-small">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title bg-inverse">New Messages</li>
                            <li class="unread">
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="/admin/images/avatars/1.jpg">

                                    <div class="message-body">
                                        <strong>Ernest Kerry</strong><br>
                                        Hello, You there?<br>
                                        <small class="text-muted">8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="/admin/images/avatars/3.jpg">

                                    <div class="message-body">
                                        <strong>Don Mark</strong><br>
                                        I really appreciate your &hellip;<br>
                                        <small class="text-muted">21 hours</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="/admin/images/avatars/8.jpg">

                                    <div class="message-body">
                                        <strong>Jess Ronny</strong><br>
                                        Let me know when you free<br>
                                        <small class="text-muted">5 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="/admin/images/avatars/7.jpg">

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
                    <li class="dropdown">
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
                            <img class="img-circle" src="/admin/images/profile.jpg">
                            <span class="hidden-xs">Marlon Brice</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right-xs">
                            <li class="arrow"></li>
                            <li><a href="pages-profile.html">Profile</a></li>
                            <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                            <li><a href="javascript:;">Messages</a></li>
                            <li><a href="javascript:;">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="pages-sign-in.html">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
        </header>
        <div class="page-wrapper">
            <aside class="sidebar sidebar-default">
                <div class="sidebar-profile">
                    <img class="img-circle profile-image" src="/admin/images/profile.jpg">

                    <div class="profile-body">
                        <h4>Marlon Brice</h4>

                        <div class="sidebar-user-links">
                            <a class="btn btn-link btn-xs" href="pages-profile.html" data-placement="bottom" data-toggle="tooltip" data-original-title="Profile"><i class="fa fa-user"></i></a>
                            <a class="btn btn-link btn-xs" href="javascript:;"       data-placement="bottom" data-toggle="tooltip" data-original-title="Messages"><i class="fa fa-envelope"></i></a>
                            <a class="btn btn-link btn-xs" href="javascript:;"       data-placement="bottom" data-toggle="tooltip" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                            <a class="btn btn-link btn-xs" href="pages-sign-in.html" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout"><i class="fa fa-sign-out"></i></a>
                        </div>
                    </div>
                </div>
                <nav>
                    <h5 class="sidebar-header">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-dropdown active open">
                            <a href="#" title="Dashboards">
                                <i class="fa fa-lg fa-fw fa-home"></i> Dashboards
                            </a>
                            <ul class="nav-sub">
                                <li class="active open">
                                    <a href="index.html" title="Dashboard">
                                        <i class="fa fa-fw fa-caret-right"></i> Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="analytics-overview.html" title="Analytics Overview">
                                        <i class="fa fa-fw fa-caret-right"></i> Analytics Overview
                                        <span class="label label-danger pull-right">New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Users">
                                <i class="fa fa-lg fa-fw fa-user"></i> Users
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="pages-members.html" title="Members">
                                        <i class="fa fa-fw fa-caret-right"></i> Members
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-profile.html" title="Profile">
                                        <i class="fa fa-fw fa-caret-right"></i> Profile
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Users">
                                <i class="fa fa-lg fa-fw fa-envelope-o"></i> Email
                                <span class="label label-danger pull-right">New</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="email-inbox.html" title="Inbox">
                                        <i class="fa fa-fw fa-caret-right"></i> Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="email-message.html" title="Message">
                                        <i class="fa fa-fw fa-caret-right"></i> Message
                                    </a>
                                </li>
                                <li>
                                    <a href="email-compose.html" title="Compose">
                                        <i class="fa fa-fw fa-caret-right"></i> Compose
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="UI Elements">
                                <i class="fa fa-lg fa-fw fa-suitcase"></i> UI Elements
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="ui-typography.html" title="Typography">
                                        <i class="fa fa-fw fa-caret-right"></i> Typography
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html" title="Buttons">
                                        <i class="fa fa-fw fa-caret-right"></i> Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-panels.html" title="Panels">
                                        <i class="fa fa-fw fa-caret-right"></i> Panels
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-tabs-accordions.html" title="Tabs & Accordions">
                                        <i class="fa fa-fw fa-caret-right"></i> Tabs & Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-tooltips-popovers.html" title="Tooltips & Popovers">
                                        <i class="fa fa-fw fa-caret-right"></i> Tooltips & Popovers
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-alerts.html" title="Alerts">
                                        <i class="fa fa-fw fa-caret-right"></i> Alerts
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-components.html" title="Components">
                                        <i class="fa fa-fw fa-caret-right"></i> Components
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-icons.html" title="Icons">
                                        <i class="fa fa-fw fa-caret-right"></i> Icons
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Forms">
                                <i class="fa fa-lg fa-fw fa-edit"></i> Forms
                                <span class="label label-warning pull-right">Updated</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="forms-form-layouts.html" title="Form Layouts">
                                        <i class="fa fa-fw fa-caret-right"></i> Form Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-basic-elements.html" title="Basic Elements">
                                        <i class="fa fa-fw fa-caret-right"></i> Basic Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-advanced-components.html" title="Advanced Components">
                                        <i class="fa fa-fw fa-caret-right"></i> Advanced Components
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-sliders.html" title="Sliders">
                                        <i class="fa fa-fw fa-caret-right"></i> Sliders
                                    </a>
                                    </li>
                                <li>
                                    <a href="forms-form-wizards.html" title="Form Wizards">
                                        <i class="fa fa-fw fa-caret-right"></i> Form Wizards
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-form-validation.html" title="Form Validation">
                                        <i class="fa fa-fw fa-caret-right"></i> Form Validation
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-editors.html" title="Editors">
                                        <i class="fa fa-fw fa-caret-right"></i> Editors
                                        <span class="label label-danger pull-right">New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Tables">
                                <i class="fa fa-lg fa-fw fa-th-list"></i> Tables
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="tables-basic-tables.html" title="Basic Tables">
                                        <i class="fa fa-fw fa-caret-right"></i> Basic Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="tables-data-tables.html" title="Data Tables">
                                        <i class="fa fa-fw fa-caret-right"></i> Data Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Charts">
                                <i class="fa fa-lg fa-fw fa-bar-chart-o"></i> Charts
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="charts-rickshaw.html" title="Rickshaw Charts">
                                        <i class="fa fa-fw fa-caret-right"></i> Rickshaw Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="charts-flot.html" title="Flot Charts">
                                        <i class="fa fa-fw fa-caret-right"></i> Flot Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="charts-morris.html" title="Morris.js Charts">
                                        <i class="fa fa-fw fa-caret-right"></i> Morris.js Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="charts-sparkline.html" title="Sparkline Charts">
                                        <i class="fa fa-fw fa-caret-right"></i> Sparkline Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Maps">
                                <i class="fa fa-lg fa-fw fa-map-marker"></i> Maps
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="maps-google.html" title="Google Maps">
                                        <i class="fa fa-fw fa-caret-right"></i> Google Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="maps-vector.html" title="Vector Maps">
                                        <i class="fa fa-fw fa-caret-right"></i> Vector Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Pages">
                                <i class="fa fa-lg fa-fw fa-file-text"></i> Pages
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="pages-search-results.html" title="Basic Tables">
                                        <i class="fa fa-fw fa-caret-right"></i> Search Results
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-sign-in.html" title="Sign In">
                                        <i class="fa fa-fw fa-caret-right"></i> Sign In
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-sign-up.html" title="Sign Up">
                                        <i class="fa fa-fw fa-caret-right"></i> Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-404.html" title="404 Page">
                                        <i class="fa fa-fw fa-caret-right"></i> 404 Page
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-500.html" title="500 Page">
                                        <i class="fa fa-fw fa-caret-right"></i> 500 Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#" title="Menu Levels">
                                <i class="fa fa-lg fa-fw fa-folder-open"></i> Menu Levels
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="javascript:;" title="Level 2.1">
                                        <i class="fa fa-fw fa-file"></i>
                                        Level 2.1
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="Level 2.2">
                                        <i class="fa fa-fw fa-file"></i>
                                        Level 2.2
                                    </a>
                                </li>
                                <li class="nav-dropdown">
                                    <a href="#" title="Level 2.3">
                                        <i class="fa fa-fw fa-folder-open"></i>
                                        Level 2.3
                                        <span class="pull-right badge badge-info">More</span>
                                    </a>
                                    <ul class="nav-sub">
                                        <li>
                                            <a href="javascript:;" title="Level 3.1">
                                                <i class="fa fa-fw fa-file"></i>
                                                Level 3.1
                                            </a>
                                        </li>
                                        <li class="nav-dropdown">
                                            <a href="#" title="Level 3.2">
                                                <i class="fa fa-fw fa-folder-open"></i>
                                                Level 3.2
                                            </a>
                                            <ul class="nav-sub">
                                                <li>
                                                    <a href="javascript:;" title="Level 4.1">
                                                        <i class="fa fa-fw fa-file"></i>
                                                        Level 4.1
                                                    </a>
                                                </li>
                                                <li class="nav-dropdown">
                                                    <a href="#" title="Level 4.2">
                                                        <i class="fa fa-fw fa-folder-open"></i>
                                                        Level 4.2
                                                    </a>
                                                    <ul class="nav-sub">
                                                        <li class="nav-dropdown">
                                                            <a href="#" title="Level 5.1">
                                                                <i class="fa fa-fw fa-folder-open"></i>
                                                                Level 5.1
                                                            </a>
                                                            <ul class="nav-sub">
                                                                <li>
                                                                    <a href="javascript:;" title="Level 6.1">
                                                                        <i class="fa fa-fw fa-file"></i>
                                                                        Level 6.1
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" title="Level 6.2">
                                                                        <i class="fa fa-fw fa-file"></i>
                                                                        Level 6.2
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Level 5.2">
                                                                <i class="fa fa-fw fa-file"></i>
                                                                Level 5.2
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Level 5.3">
                                                                <i class="fa fa-fw fa-file"></i>
                                                                Level 5.3
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="Level 4.3">
                                                        <i class="fa fa-fw fa-file"></i>
                                                        Level 4.3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-dropdown">
                                            <a href="#" title="Level 3.3">
                                                <i class="fa fa-fw fa-folder-open"></i>
                                                Level 3.3
                                            </a>
                                            <ul class="nav-sub">
                                                <li>
                                                    <a href="javascript:;" title="Level 4.1">
                                                        <i class="fa fa-fw fa-file"></i>
                                                        Level 4.1
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="disabled">
                            <a href="javascript:;" title="Disabled">
                                <i class="fa fa-lg fa-fw fa-th"></i> Disabled
                            </a>
                        </li>
                    </ul>
                    <h5 class="sidebar-header">Labels</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-fw fa-circle text-danger"></i>
                                Important Tasks
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-fw fa-circle text-success"></i>
                                Support
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-fw fa-circle text-info"></i>
                                Quotes
                            </a>
                        </li>
                    </ul>
                    <h5 class="sidebar-header">Summary</h5>
                    <ul class="sidebar-summary">
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Sales</div>
                                    <div class="chart-value">$261,885</div>
                                </div>
                                <div id="mini-chart-sidebar-1" class="chart pull-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Total Customers</div>
                                    <div class="chart-value">12,491</div>
                                </div>
                                <div id="mini-chart-sidebar-2" class="chart pull-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-chart mini-chart-block">
                                <div class="chart-details">
                                    <div class="chart-name">Traffic</div>
                                    <div class="chart-value">945,013</div>
                                </div>
                                <div id="mini-chart-sidebar-3" class="chart pull-right"></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </aside>

            <div class="page-content">
                <div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li class="active"><a href="javascript:;">Dashboard</a></li>
    </ol>
</div>

<div class="container-fluid-md">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="panel panel-metric panel-metric-sm">
                <div class="panel-body panel-body-primary">
                    <div class="metric-content metric-icon">
                        <div class="value">
                            $2,154
                        </div>
                        <div class="icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <header>
                            <h3 class="thin">Today's Earnings</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="panel panel-metric panel-metric-sm">
                <div class="panel-body panel-body-success">
                    <div class="metric-content metric-icon">
                        <div class="value">
                            3,958
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <header>
                            <h3 class="thin">Total Visitors</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="panel panel-metric panel-metric-sm">
                <div class="panel-body panel-body-inverse">
                    <div class="metric-content metric-icon">
                        <div class="value">
                            23.1%
                        </div>
                        <div class="icon">
                            <i class="fa fa-chain-broken"></i>
                        </div>
                        <header>
                            <h3 class="thin">Bounce Rate</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="panel panel-metric panel-metric-sm">
                <div class="panel-body panel-body-danger">
                    <div class="metric-content metric-icon">
                        <div class="value">
                            3:17
                        </div>
                        <div class="icon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <header>
                            <h3 class="thin">Avg. Time on Site</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="panel" style="overflow: hidden">
                <div class="row no-margin" data-sync-height>
                    <div class="col-sm-7 col-md-8 no-padding">
                        <div id="map" style="height:270px;width:100%;"></div>
                    </div>
                    <div class="col-sm-5 col-md-4 no-padding">
                        <div class="panel-body bg-gray-dark" style="height: inherit;">
                            <h4 class="thin text-white no-margin-top">Monthly Sales</h4>
                            <table class="table table-condensed text-light">
                                <tr>
                                    <td>
                                        <a href="javascript:;" class="text-light">USA</a>
                                    </td>
                                    <td>
                                        550
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:;" class="text-light">China</a>
                                    </td>
                                    <td>
                                        420
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:;" class="text-light">UK</a>
                                    </td>
                                    <td>
                                        400
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:;" class="text-light">India</a>
                                    </td>
                                    <td>
                                        290
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:;" class="text-light">Australia</a>
                                    </td>
                                    <td>
                                        200
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:;" class="text-light">France</a>
                                    </td>
                                    <td>
                                        149
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:;" class="text-light">Canada</a>
                                    </td>
                                    <td>
                                        100
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body panel-body-success padding-sm-vertical">
                    <div id="sales-orders" class="morris-hover-dark" style="height: 243px"></div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4">
                            <div class="mini-chart">
                                <div id="mini-chart-1" class="chart text-center" style="width: 44px;"></div>
                                <div class="chart-details" style="width: 79px;">
                                    <div class="chart-name">Avg Income</div>
                                    <div class="chart-value">$2,655,980</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 text-center">
                            <div class="mini-chart text-left">
                                <div id="mini-chart-2" class="chart" style="width: 44px;"></div>
                                <div class="chart-details" style="width: 79px;">
                                    <div class="chart-name">Avg Outcome</div>
                                    <div class="chart-value">$1,431,250</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 text-right">
                            <div class="mini-chart text-left">
                                <div id="mini-chart-3" class="chart" style="width: 44px;"></div>
                                <div class="chart-details" style="width: 79px;">
                                    <div class="chart-name">Total Sales</div>
                                    <div class="chart-value">$261,885</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-metric panel-metric-sm">
                <div class="panel-body panel-body-warning">
                    <div class="metric-content metric-icon">
                        <div class="value">
                            4,200
                        </div>
                        <div class="trend">
                            <p class="text-success">
                                <i class="fa fa-chevron-up"></i> 5.1%
                            </p>
                            <strong>Previous 30 Days</strong>
                        </div>
                        <div id="metric-sales" class="chart"></div>
                        <header>
                            <h3 class="thin">Total Sales</h3>
                        </header>
                    </div>
                </div>
            </div>
            <div class="panel panel-metric panel-metric-sm">
                <div class="panel-body panel-body-info">
                    <div class="metric-content metric-icon">
                        <div class="value">
                            1,430
                        </div>
                        <div class="trend">
                            <p class="text-danger">
                                <i class="fa fa-chevron-down"></i> 2.3%
                            </p>
                            <strong>Previous 30 Days</strong>
                        </div>
                        <div id="metric-orders" class="chart"></div>
                        <header>
                            <h3 class="thin">Total Orders</h3>
                        </header>
                    </div>
                </div>
            </div>
            <div class="panel" style="overflow: hidden;">
                <div class="panel-body">
                    <h4 class="thin no-margin-top">Last Orders</h4>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <a href="javascript:;" class="text-success semi-bold">#2310</a>
                            </td>
                            <td>Android App</td>
                            <td class="text-success semi-bold">
                                $8,025.75
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:;" class="text-success semi-bold">#2308</a>
                            </td>
                            <td>Web Design</td>
                            <td class="text-success semi-bold">
                                $4,301.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:;" class="text-success semi-bold">#2246</a>
                            </td>
                            <td>iOS App</td>
                            <td class="text-success semi-bold">
                                $9,203.40
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:;" class="text-success semi-bold">#1940</a>
                            </td>
                            <td>Redesign App</td>
                            <td class="text-success semi-bold">
                                $8,990.50
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="server-load" class="chart"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="panel panel-metric">
                <div class="panel-body">
                    <div class="metric-content">
                        <div class="value">
                            $2,154
                        </div>
                        <div class="trend">
                            <p class="text-success">
                                <i class="fa fa-chevron-up"></i> 40.2%
                            </p>
                            <strong>Previous 30 Days</strong>
                        </div>
                        <div id="metric-1" class="chart"></div>
                        <header>
                            <h3 class="thin">Monthly Earnings</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="panel panel-metric">
                <div class="panel-body">
                    <div class="metric-content">
                        <div class="value">
                            $314
                        </div>
                        <div class="trend">
                            <p class="text-success">
                                <i class="fa fa-chevron-up"></i> 10.9%
                            </p>
                            <strong>Previous 30 Days</strong>
                        </div>
                        <div id="metric-2" class="chart"></div>
                        <header>
                            <h3 class="thin">Lifetime Value</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="panel panel-metric">
                <div class="panel-body">
                    <div class="metric-content">
                        <div class="value">
                            305
                        </div>
                        <div class="trend">
                            <p class="text-success">
                                <i class="fa fa-chevron-up"></i> 15.6%
                            </p>
                            <strong>Previous 30 Days</strong>
                        </div>
                        <div id="metric-3" class="chart"></div>
                        <header>
                            <h3 class="thin">New Customers</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="panel panel-metric">
                <div class="panel-body">
                    <div class="metric-content">
                        <div class="value">
                            14%
                        </div>
                        <div class="trend">
                            <p class="text-danger">
                                <i class="fa fa-chevron-up"></i> 15.6%
                            </p>
                            <strong>Previous 30 Days</strong>
                        </div>
                        <div id="metric-4" class="chart"></div>
                        <header>
                            <h3 class="thin">Bounce Rate</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="panel panel-metric">
                <div class="panel-body">
                    <div class="metric-content">
                        <div class="value">
                            43,213
                        </div>
                        <div class="trend">
                            <p class="text-success">
                                <i class="fa fa-chevron-up"></i> 10.3%
                            </p>
                            <strong>Previous 30 Days</strong>
                        </div>
                        <div id="metric-5" class="chart"></div>
                        <header>
                            <h3 class="thin">Page Views</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="panel panel-metric">
                <div class="panel-body">
                    <div class="metric-content">
                        <div class="value">
                            30%
                        </div>
                        <div class="trend">
                            <p class="text-danger">
                                <i class="fa fa-chevron-down"></i> 2.3%
                            </p>
                            <strong>Previous 30 Days</strong>
                        </div>
                        <div id="metric-6" class="chart"></div>
                        <header>
                            <h3 class="thin">Unique Visitors</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
        <script src="/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin/assets/bs3/js/bootstrap.min.js"></script>
        <script src="/admin/assets/plugins/jquery-navgoco/jquery.navgoco.js"></script>
        <script src="/admin/js/main.js"></script>

        <!--[if lt IE 9]>
        <script src="/admin/assets/plugins/flot/excanvas.min.js"></script>
        <![endif]-->
        <script src="/admin/assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="/admin/js/admin.js"></script>

        <script src="/admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="/admin/assets/plugins/jquery-jvectormap/maps/world_mill_en.js"></script>

        <!--[if gte IE 9]>-->
        <script src="/admin/assets/plugins/rickshaw/js/vendor/d3.v3.js"></script>
        <script src="/admin/assets/plugins/rickshaw/rickshaw.min.js"></script>
        <!--<![endif]-->

        <script src="/admin/assets/plugins/flot/jquery.flot.js"></script>
        <script src="/admin/assets/plugins/flot/jquery.flot.resize.js"></script>
        <script src="/admin/assets/plugins/raphael/raphael-min.js"></script>
        <script src="/admin/assets/plugins/morris/morris.min.js"></script>
        <script src="/admin/js/dashboard.js"></script>



    </body>
</html>
