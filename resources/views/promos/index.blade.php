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
        <li class="active"><a href="javascript:;">Promo</a></li>
    </ol>
</div>
<div class="page-heading page-heading-md">
    <h2>Promo</h2>
</div>

<div class="container-fluid-md">
    @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">All Promos</h4>

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
                        <th>Code</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promos as $key => $promo)
                        <tr>
                        <td>{{ $promo->code }}</td>
                        <td>{{ $promo->type }}</td>
                        <td>{{ $promo->amount }}</td>
                        <td>{{ $promo->description }}</td>
                        <td>
                        {{-- <a class="btn btn-info" href="{{ route('promos.show',$promo->id) }}">Show</a> --}}
                        {{--  @permission('promos-edit')  --}}
                        <a class="btn btn-primary" href="{{ route('promos.edit',$promo->id) }}">Edit</a>
                        {{--  @endpermission  --}}
                        {{--  @permission('role-delete')  --}}
                        {!! Form::open(['method' => 'DELETE','route' => ['promos.destroy', $promo->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                {{--  @endpermission  --}}
                        </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

            </div>

{!! $promos->render() !!}
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