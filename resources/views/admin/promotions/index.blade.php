@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Promotions</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('promotions-create')
	            <a class="btn btn-success" href="{{ route('admin.promotions.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($promotions as $key => $promotion)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $promotion->name }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.promotions.show',$promotion->id) }}">Show</a>
			@permission('promotions-edit')
			<a class="btn btn-primary" href="{{ route('admin.promotions.edit',$promotion->id) }}">Edit</a>
			@endpermission
			@permission('promotions-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/promotions/{{ $promotion->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $promotions->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
