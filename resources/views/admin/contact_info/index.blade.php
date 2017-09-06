@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Contact Info List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('contact_info-create')
	            <a class="btn btn-success" href="{{ route('admin.contact_info.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Alamat</th>
			<th>Telphone</th>
			<th>Status</th>
			<th class="col-sm-2">Action</th>
		</tr>
	@foreach ($contact_info as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{!! $data->address !!}</td>
		<td>{{ $data->phone }}</td>
		<td>
			@if ($data->is_active)  <label class="label label-success">Aktif</label>
			@else <label class="label label-danger">Tidak Aktif</label>
			@endif
		</td>
		<td>
			@permission('contact_info-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.contact_info.edit',$data->id) }}">Edit</a>
			@endpermission
			@permission('contact_info-delete')
			<a class="btn btn-danger btn-xs delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/contact_info/{{ $data->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $contact_info->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
