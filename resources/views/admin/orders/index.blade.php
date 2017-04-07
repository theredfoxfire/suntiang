@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Items List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('orders-create')
	            <a class="btn btn-success" href="{{ route('admin.orders.create') }}"> Create New Order</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Member</th>
			<th>Delivery</th>
			<th>Payment</th>
			<th>Total Cost</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($orders as $key => $order)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $order->member_id }}</td>
		<td>{{ $order->delivery_id }}</td>
		<td>{{ $order->payment_id }}</td>
		<td>{{ $order->total_cost }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.orders.show',$order->id) }}">Show</a>
			@permission('orders-edit')
			<a class="btn btn-primary" href="{{ route('admin.orders.edit',$order->id) }}">Edit</a>
			@endpermission
			@permission('orders-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/orders/{{ $order->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $orders->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
