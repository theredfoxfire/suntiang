@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Data Item Images</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('item_images-create')
	            <a class="btn btn-success" href="{{ route('admin.item_images.create') }}"> Tambah Item Images</a>
            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>name</th>
			<th>item_id</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($item_images as $key => $item_image)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item_image->name }}</td>
		<td>{{ $item_image->item_id }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.item_images.show',$item_image->id) }}">Show</a>
			@permission('item_images-edit')
			<a class="btn btn-primary" href="{{ route('admin.item_images.edit',$item_image->id) }}">Edit</a>
			@endpermission
			@permission('item_images-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/item-images/{{ $item_image->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $item_images->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
