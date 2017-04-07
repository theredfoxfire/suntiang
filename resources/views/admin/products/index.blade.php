@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Products List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('products-create')
	            <a class="btn btn-success" href="{{ route('admin.products.create') }}"> Create New Item</a>
            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>price</th>
			<th>is_special</th>
			<th>day</th>
			<th>available_date</th>
			<th>Description</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($products as $key => $product)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $product->name }}</td>
		<td>{{ $product->price }}</td>
		<td>{{ $product->is_special }}</td>
		<td>{{ $product->day }}</td>
		<td>{{ $product->available_date }}</td>
		<td>{{ $product->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.products.show',$product->id) }}">Show</a>
			@permission('products-edit')
			<a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}">Edit</a>
			@endpermission
			@permission('products-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/products/{{ $product->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $products->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
