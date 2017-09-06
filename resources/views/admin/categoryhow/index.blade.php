@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>How to order category List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('categoryhow-create')
	            <a class="btn btn-success" href="{{ route('admin.categoryhow.create') }}"> Create New</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th class="col-sm-2">Action</th>
		</tr>
	@foreach ($categoryhow as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $data->name }}</td>
		<td>
			@permission('categoryhow-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.categoryhow.edit',$data->id) }}">Edit</a>
			@endpermission
			@permission('categoryhow-delete')
			<a class="btn btn-danger delete-confirm btn-xs" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/categoryhow/{{ $data->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $categoryhow->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
