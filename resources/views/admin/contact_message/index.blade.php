@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Contact Message List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('contact_message-create')
	            <a class="btn btn-success" href="{{ route('admin.contact_message.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Telphone</th>
			<th>Pesan</th>
			<th>Status</th>
			<th class="col-sm-2">Action</th>
		</tr>
	@foreach ($contact_message as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $data->name }}</td>
		<td>{{ $data->email }}</td>
		<td>{{ $data->subject }}</td>
		<td>{{ $data->phone }}</td>
		<td>{{ $data->message }}</td>
		<td>
			@if (!$data->is_blocked)  <label class="label label-success">Aktif</label>
			@else <label class="label label-danger">Tidak Aktif</label>
			@endif
		</td>
		<td>
			@permission('contact_message-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.contact_message.edit',$data->id) }}">Edit</a>
			@endpermission
			@permission('contact_message-delete')
			<a class="btn btn-danger btn-xs delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/contact_message/{{ $data->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $contact_message->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
