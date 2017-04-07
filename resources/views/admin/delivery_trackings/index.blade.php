@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Data Traking Pengiriman</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('delivery_trackings-create')
	            <a class="btn btn-success" href="{{ route('admin.delivery_trackings.create') }}"> Tambah Data Traking</a>
	          @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>user_id</th>
			<th>delivery_id</th>
			<th>courier_id</th>
			<th>refference_id</th>
			<th>tracking_status</th>
			<th>current_position</th>
			<th>additional_note</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($delivery_trackings as $key => $delivery_tracking)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $delivery_tracking->user_id }}</td>
		<td>{{ $delivery_tracking->delivery_id }}</td>
		<td>{{ $delivery_tracking->courier_id }}</td>
		<td>{{ $delivery_tracking->refference_id }}</td>
		<td>{{ $delivery_tracking->tracking_status }}</td>
		<td>{{ $delivery_tracking->current_position }}</td>
		<td>{{ $delivery_tracking->additional_note }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.delivery_trackings.show',$delivery_tracking->id) }}">Show</a>
			@permission('delivery_trackings-edit')
			<a class="btn btn-primary" href="{{ route('admin.delivery_trackings.edit',$delivery_tracking->id) }}">Edit</a>
			@endpermission
			@permission('delivery_trackings-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/delivery_trackings/{{ $delivery_tracking->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $delivery_trackings->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
