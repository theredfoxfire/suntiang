@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Sessions List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('sessions-create')
	            <a class="btn btn-success" href="{{ route('admin.sessions.create') }}"> Create Sessions</a>
            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Session ID</th>
			<th>User</th>
			<th>IP Address</th>
			<th>User Agent</th>
			<th>Payload</th>
			<th>Last Activity</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($sessions as $key => $session)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $session->id }}</td>
		<td>{{ $session->user_id }}</td>
		<td>{{ $session->ip_address }}</td>
		<td>{{ $session->user_agent }}</td>
		<td>{{ $session->payload }}</td>
		<td>{{ $session->last_activity }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.sessions.show',$session->id) }}">Show</a>
			@permission('sessions-edit')
			<a class="btn btn-primary" href="{{ route('admin.sessions.edit',$session->id) }}">Edit</a>
			@endpermission
			@permission('sessions-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/sessions/{{ $session->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $sessions->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
