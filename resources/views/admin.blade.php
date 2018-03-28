@extends('layouts.admin')
@section('links')
<!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/veneto-admin.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/font-awesome/css/font-awesome.css') }}">

        <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css') }}"/>
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/rickshaw.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/morris.min.css') }}">

        <!--[if lt IE 9]>
        <script src="{{ asset('admin/assets/libs/html5shiv/html5shiv.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/respond/respond.min.js') }}"></script>
        <![endif]-->
@endsection
@section('content')
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
                            &#8358;{{ $earnings }}
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <header>
                            <h3 class="thin">Total Earnings</h3>
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
                            {{ $users }}
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <header>
                            <h3 class="thin">Total Users</h3>
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
                            {{ $trips }}
                        </div>
                        <div class="icon">
                            <i class="fa fa-bus"></i>
                        </div>
                        <header>
                            <h3 class="thin">Total Trips</h3>
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
    <div class="row" style="display: none;">
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

    <div class="row" style="display:none;">
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
@endsection
@section('scripts')
        <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/bs3/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-navgoco/jquery.navgoco.js') }}"></script>
        <script src="{{ asset('admin/js/main.js') }}"></script>

        <!--[if lt IE 9]>
        <script src="{{ asset('admin/assets/plugins/flot/excanvas.min.js') }}"></script>
        <![endif]-->
        <script src="{{ asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
        <script src="{{ asset('admin/js/admin.js') }}"></script>

        <script src="{{ asset('admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-jvectormap/maps/world_mill_en.js') }}"></script>

        <!--[if gte IE 9]>-->
        <script src="{{ asset('admin/assets/plugins/rickshaw/js/vendor/d3.v3.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/rickshaw/rickshaw.min.js') }}"></script>
        <!--<![endif]-->

        <script src="{{ asset('admin/assets/plugins/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/raphael/raphael-min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
@endsection