@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Faq category List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('faq_category-create')
	            <a class="btn btn-success" href="{{ route('admin.faq_category.create') }}"> Create New</a>
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
	@foreach ($faq_category as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $data->name }}</td>
		<td>
			@permission('faq_category-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.faq_category.edit',$data->id) }}">Edit</a>
			@endpermission
			@permission('faq_category-delete')
			<a class="btn btn-danger delete-confirm btn-xs" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/categoryfaq/{{ $data->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $faq_category->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
