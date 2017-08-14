@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Items List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('pages-create')
	            <a class="btn btn-success" href="{{ route('admin.pages.create') }}"> Create New Page</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>slug</th>
			<th>is_active</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($pages as $key => $page)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $page->name }}</td>
		<td>{{ $page->slug }}</td>
		<td>{{ $page->is_active }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.pages.show',$page->id) }}">Show</a>
			@permission('pages-edit')
			<a class="btn btn-primary" href="{{ route('admin.pages.edit',$page->id) }}">Edit</a>
			@endpermission
			@permission('pages-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/pages/{{ $page->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $pages->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
