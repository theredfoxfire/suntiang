@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Sliders List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('sliders-create')
	            <a class="btn btn-success" href="{{ route('admin.sliders.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($sliders as $key => $slider)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $slider->name }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.sliders.show',$slider->id) }}">Show</a>
			@permission('sliders-edit')
			<a class="btn btn-primary" href="{{ route('admin.sliders.edit',$slider->id) }}">Edit</a>
			@endpermission
			@permission('sliders-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/sliders/{{ $slider->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $sliders->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
