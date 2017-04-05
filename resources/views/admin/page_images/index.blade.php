@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>List Pages Image</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('page_images-create')
	            <a class="btn btn-success" href="{{ route('admin.page_images.create') }}"> Create New Page Image</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>page_id</th>
			<th>name</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($page_images as $key => $page_image)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $page_image->page_id }}</td>
		<td>{{ $page_image->name }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.page_images.show',$page_image->id) }}">Show</a>
			@permission('page_images-edit')
			<a class="btn btn-primary" href="{{ route('admin.page_images.edit',$page_image->id) }}">Edit</a>
			@endpermission
			@permission('page_images-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/page_images/{{ $page_image->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $page_images->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
