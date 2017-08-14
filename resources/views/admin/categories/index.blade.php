@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Categories List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('categories-create')
	            <a class="btn btn-success" href="{{ route('admin.categories.create') }}"> Tambah Kategori Baru</a>
            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Slug</th>
			<th>Description</th>
			<th>Parent ID</th>
			<th>Level</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($categories as $key => $category)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $category->name }}</td>
		<td>{{ $category->slug }}</td>
		<td>{{ $category->description }}</td>
		<td>{{ $category->parent_id }}</td>
		<td>{{ $category->level }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.categories.show',$category->id) }}">Show</a>
			@permission('categories-edit')
			<a class="btn btn-primary" href="{{ route('admin.categories.edit',$category->id) }}">Edit</a>
			@endpermission
			@permission('categories-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/categories/{{ $category->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $categories->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
