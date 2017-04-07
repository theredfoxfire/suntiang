@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Carts List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission(['carts-store', 'carts-create'])
	            <a class="btn btn-success" href="{{ route('admin.carts.create') }}"> Tambah Cart Baru</a>
            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Session ID</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($carts as $key => $cart)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $cart->session_id }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.carts.show', $cart->id) }}">Show</a>
			@permission('carts-edit')
			<a class="btn btn-primary" href="{{ route('admin.carts.edit', $cart->id) }}">Edit</a>
			@endpermission
			@permission('carts-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/carts/{{ $cart->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $carts->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
