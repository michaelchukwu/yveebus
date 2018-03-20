@extends('layouts.app')
 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Promo</h2>
        </div>
        <div class="pull-right">
        {{--  @permission('role-create')  --}}
            <a class="btn btn-success" href="{{ route('promos.create') }}"> Create New Role</a>
            {{--  @endpermission  --}}
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Code</th>
<th>Type</th>
<th>Amount</th>
<th>Description</th>
<th width="280px">Action</th>
</tr>
@foreach ($promos as $key => $promo)
<tr>
<td>{{ $promo->code }}</td>
<td>{{ $promo->type }}</td>
<td>{{ $promo->amount }}</td>
<td>{{ $promo->description }}</td>
<td>
<a class="btn btn-info" href="{{ route('promos.show',$promo->id) }}">Show</a>
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
</table>
{!! $promos->render() !!}
@endsection