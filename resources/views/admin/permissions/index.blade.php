@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Permissions List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('permissions-create')
	            <a class="btn btn-success" href="{{ route('admin.permissions.create') }}"> Create Permission</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>name</th>
			<th>display_name</th>
			<th>description</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($permissions as $key => $permission)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $permission->name }}</td>
		<td>{{ $permission->display_name }}</td>
		<td>{{ $permission->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.permissions.show',$permission->id) }}">Show</a>
			@permission('permissions-edit')
			<a class="btn btn-primary" href="{{ route('admin.permissions.edit',$permission->id) }}">Edit</a>
			@endpermission
			@permission('permissions-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/permissions/{{ $permission->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $permissions->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
