@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Items List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('items-create')
	            <a class="btn btn-success" href="{{ route('admin.items.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>price</th>
			<th>is_special</th>
			<th>day</th>
			<th>available_date</th>
			<th>Description</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($items as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->name }}</td>
		<td>{{ $item->price }}</td>
		<td>{{ $item->is_special }}</td>
		<td>{{ $item->day }}</td>
		<td>{{ $item->available_date }}</td>
		<td>{{ $item->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.items.show',$item->id) }}">Show</a>
			@permission('items-edit')
			<a class="btn btn-primary" href="{{ route('admin.items.edit',$item->id) }}">Edit</a>
			@endpermission
			@permission('items-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/items/{{ $item->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $items->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
