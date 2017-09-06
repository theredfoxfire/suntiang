@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Package List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('package-create')
	            <a class="btn btn-success" href="{{ route('admin.package.create') }}"> Tambah Paket</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th class="col-sm-1">No</th>
			<th class="col-sm-2">Nama</th>
			<th class="col-sm-2">Harga Daily</th>
			<th class="col-sm-4">Description</th>
			<th class="col-sm-1">Status</th>
			<th class="col-sm-2">Action</th>
		</tr>
	@foreach ($items as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->name }}</td>
		<td>{{formattingNumber($item->daily_price) }}</td>
		<td>{{ getWords($item->description, 30) }}</td>
		<td>
			@if ($item->is_active)  <label class="label label-success">Aktif</label>
			@else <label class="label label-danger">Tidak Aktif</label>
			@endif
		</td>
		<td>
			@permission('package-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.package.edit',$item->id) }}">Edit</a>
			@endpermission
			@permission('package-delete')
			<a class="btn btn-danger delete-confirm btn-xs" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/package/{{ $item->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $items->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
