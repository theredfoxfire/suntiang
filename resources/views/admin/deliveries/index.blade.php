@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Items List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('deliveries-create')
	            <a class="btn btn-success" href="{{ route('admin.deliveries.create') }}"> Create New Item</a>
	          @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>order_id</th>
			<th>district_id</th>
			<th>postal_code</th>
			<th>delivery_status</th>
			<th>delivery_time</th>
			<th>delivery_receiver</th>
			<th>delivery_receiver_phone</th>
			<th>delivery_address</th>
			<th>delivery_date</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($deliveries as $key => $delivery)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $delivery->order_id }}</td>
		<td>{{ $delivery->district_id }}</td>
		<td>{{ $delivery->postal_code }}</td>
		<td>{{ $delivery->delivery_status }}</td>
		<td>{{ $delivery->delivery_time }}</td>
		<td>{{ $delivery->delivery_receiver }}</td>
		<td>{{ $delivery->delivery_receiver_phone }}</td>
		<td>{{ $delivery->delivery_address }}</td>
		<td>{{ $delivery->delivery_date }}</td>
		<td>
			<a class="btn btn-info btn-xs" href="{{ route('admin.deliveries.show',$delivery->id) }}">Show</a>
			@permission('deliveries-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.deliveries.edit',$delivery->id) }}">Edit</a>
			@endpermission
			@permission('deliveries-delete')
			<a class="btn btn-danger delete-confirm btn-xs" data-toggle="modal" data-target="#modal-delete" data-id="/admin/deliveries/{{ $delivery->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $deliveries->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
