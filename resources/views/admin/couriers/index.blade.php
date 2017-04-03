@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Kurir List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('couriers-create')
	            <a class="btn btn-success" href="{{ route('admin.couriers.create') }}"> Tambah Kurir Baru</a>
	          @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Photo</th>
			<th>Phone</th>
			<th>Email</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($couriers as $key => $courier)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $courier->name }}</td>
		<td>{{ $courier->photo }}</td>
		<td>{{ $courier->phone }}</td>
		<td>{{ $courier->email }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.couriers.show',$courier->id) }}">Show</a>
			@permission('couriers-edit')
			<a class="btn btn-primary" href="{{ route('admin.couriers.edit',$courier->id) }}">Edit</a>
			@endpermission
			@permission('couriers-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/couriers/{{ $courier->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $couriers->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
