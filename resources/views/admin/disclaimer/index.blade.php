@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Disclaimer</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('disclaimer-create')
	            <a class="btn btn-success" href="{{ route('admin.disclaimer.create') }}"> Create New</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Description</th>
			<th>Sort</th>
			<th>Status</th>
			<th class="col-md-2">Action</th>
		</tr>
	@foreach ($disclaimer as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $data->title }}</td>
		<td>{{ $data->description }}</td>
		<td>{{ $data->sort }}</td>
		<td>
			@if ($data->is_active)  <label class="label label-success">Aktif</label>
			@else <label class="label label-danger">Tidak Aktif</label>
			@endif
		</td>
		<td>
			@permission('disclaimer-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.disclaimer.edit',$data->id) }}">Edit</a>
			@endpermission
			@permission('disclaimer-delete')
			<a class="btn btn-danger btn-xs delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/disclaimer/{{ $data->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $disclaimer->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
