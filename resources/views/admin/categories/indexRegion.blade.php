@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Kategori Area</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('region-create')
	            <a class="btn btn-success" href="{{ route('admin.region.create') }}"> Tambah Kategori Baru</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th class="col-sm-1">No</th>
			<th class="col-sm-5">Name</th>
			<th class="col-sm-2">Action</th>
		</tr>
	@foreach ($categories as $key => $category)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $category->name }}</td>
		<td>
			@permission('region-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.region.edit',$category->id) }}">Edit</a>
			@endpermission
			@permission('region-delete')
			@if ($category->id > 2)
				<a class="btn btn-danger btn-xs delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/region/{{ $category->id }}">Delete</a>
			@endif
	    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $categories->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection