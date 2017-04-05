@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Shipping Costs</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('shipping_costs-create')
	            <a class="btn btn-success" href="{{ route('admin.shipping_costs.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tarrif</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($shipping_costs as $key => $shipping_cost)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $shipping_cost->name }}</td>
		<td>{{ $shipping_cost->fare }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.shipping_costs.show',$shipping_cost->id) }}">Show</a>
			@permission('shipping_costs-edit')
			<a class="btn btn-primary" href="{{ route('admin.shipping_costs.edit',$shipping_cost->id) }}">Edit</a>
			@endpermission
			@permission('shipping_costs-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/shipping_costs/{{ $shipping_cost->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $shipping_costs->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
