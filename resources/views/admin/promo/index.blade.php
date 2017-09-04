@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Promo List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('promo-create')
	            <a class="btn btn-success" href="{{ route('admin.promo.create') }}"> Create New</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Description</th>
			<th>Status</th>
			<th class="col-md-2">Action</th>
		</tr>
	@foreach ($promo as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $data->image }}</td>
		<td>{{ $data->description }}</td>
		<td>
			@if ($data->is_active)  <label class="label label-success">Aktif</label>
			@else <label class="label label-danger">Tidak Aktif</label>
			@endif
		</td>
		<td>
			@permission('promo-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.promo.edit',$data->id) }}">Edit</a>
			@endpermission
			@permission('promo-delete')
			<a class="btn btn-danger delete-confirm btn-xs" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/promo/{{ $data->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $promo->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
