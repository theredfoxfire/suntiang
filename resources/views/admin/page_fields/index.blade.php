@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>List Page Fields</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('page_fields-create')
	            <a class="btn btn-success" href="{{ route('admin.page_fields.create') }}"> Create New Page Fields</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>page_id</th>
			<th>field_name</th>
			<th>field_content</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($page_fields as $key => $page_field)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $page_field->page_id }}</td>
		<td>{{ $page_field->field_name }}</td>
		<td>{{ $page_field->field_content }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.page_fields.show',$page_field->id) }}">Show</a>
			@permission('page_fields-edit')
			<a class="btn btn-primary" href="{{ route('admin.page_fields.edit',$page_field->id) }}">Edit</a>
			@endpermission
			@permission('page_fields-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/page_fields/{{ $page_field->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $page_fields->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
