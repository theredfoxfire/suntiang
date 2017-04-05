@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>List Order Detail</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('order_details-create')
	            <a class="btn btn-success" href="{{ route('admin.order_details.create') }}"> Create New Order Detail</a>
            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>item_id</th>
			<th>order_id</th>
			<th>quantity</th>
			<th>total_cost</th>
			<th>is_canceled</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($order_details as $key => $order_detail)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $order_detail->item_id }}</td>
		<td>{{ $order_detail->order_id }}</td>
		<td>{{ $order_detail->quantity }}</td>
		<td>{{ $order_detail->total_cost }}</td>
		<td>{{ $order_detail->is_canceled }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.order_details.show',$order_detail->id) }}">Show</a>
			@permission('order_details-edit')
			<a class="btn btn-primary" href="{{ route('admin.order_details.edit',$order_detail->id) }}">Edit</a>
			@endpermission
			@permission('order_details-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/order_details/{{ $order_detail->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $order_details->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
