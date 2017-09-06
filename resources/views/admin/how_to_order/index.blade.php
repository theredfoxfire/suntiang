@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>How To Order List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('how_to_order-create')
	            <a class="btn btn-success" href="{{ route('admin.how_to_order.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Urutan</th>
			<th>Status</th>
			<th class="col-sm-2">Action</th>
		</tr>
	@foreach ($how_to_order as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $data->category_name }}</td>
		<td>{{ $data->title }}</td>
		<td>{{ $data->step }}</td>
		<td>
			@if ($data->is_active)  <label class="label label-success">Aktif</label>
			@else <label class="label label-danger">Tidak Aktif</label>
			@endif
		</td>
		<td>
			@permission('how_to_order-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.how_to_order.edit',$data->id) }}">Edit</a>
			@endpermission
			@permission('how_to_order-delete')
			<a class="btn btn-danger delete-confirm btn-xs" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/how_to_order/{{ $data->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $how_to_order->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
