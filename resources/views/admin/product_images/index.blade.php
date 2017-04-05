@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Product Image List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('product_images-create')
	            <a class="btn btn-success" href="{{ route('admin.product_images.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Product</th>
			<th>Name</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($product_images as $key => $product_image)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $product_image->product_id }}</td>
		<td>{{ $product_image->name }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.product_images.show',$product_image->id) }}">Show</a>
			@permission('product_images-edit')
			<a class="btn btn-primary" href="{{ route('admin.product_images.edit',$product_image->id) }}">Edit</a>
			@endpermission
			@permission('product_images-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/product_images/{{ $product_image->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $product_images->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
