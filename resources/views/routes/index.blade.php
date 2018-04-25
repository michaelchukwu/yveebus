@extends('layouts.admin')
@section('links')
<!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/veneto-admin.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/font-awesome/css/font-awesome.css') }}">

        <link rel="stylesheet" href="{{ asset('admin/css/plugins/jquery-select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/plugins/jquery-dataTables.min.css') }}">
        <!--[if lt IE 9]>
        <script src="{{ asset('admin/assets/libs/html5shiv/html5shiv.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/respond/respond.min.js') }}"></script>
        <![endif]-->
@endsection
@section('content')

            <div class="page-content">
                <div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li><a href="/janitor">Janitor</a></li>
        <li class="active"><a href="javascript:;">Locations</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Locations Management</h2>
</div>

<div class="container-fluid-md">
    @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">All Locations</h4>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <table id="table-basic" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Bus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $route)
                        <tr class="even gradeC">
                        <td>{{ ++$i }}</td>
                        <?php $location = App\Location::where('id', $route->from)->first(); ?>
                        <td>{{ $location->name }}</td>
                        <?php $destination = App\Location::where('id', $route->to)->first(); ?>
                        <td>{{ $destination->name }}</td>
                        <?php $bus = App\Bus::where('id', $route->bus_id)->first(); ?>
                        <td>{{ $bus->reg_num }}</td>
                        <td>
                        <a class="btn btn-info" href="{{ route('routes.show',$route->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('routes.edit',$route->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['routes.destroy', $route->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                        @if($route->active == 0)
                        <a class="btn btn-primary" href="{{ route('route.activate',$route->id) }}">activate</a>
                        @else
                        <a href="{{ route('route.deactivate',$route->id)}}" class="btn btn-danger">deactivate</a>
                        @endif
                        </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Bus</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

            </div>

{!! $data->render() !!}
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
        <script src="{{ asset('admin/js/demo.js') }}"></script>

        <script src="{{ asset('admin/assets/plugins/jquery-datatables/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-datatables/js/dataTables.tableTools.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-datatables/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jquery-select2/select2.min.js') }}"></script>
        <script src="{{ asset('admin/js/tables-data-tables.js') }}"></script>
@endsection