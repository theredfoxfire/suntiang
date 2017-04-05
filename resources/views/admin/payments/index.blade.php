@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Payments List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('payments-create')
	            <a class="btn btn-success" href="{{ route('admin.payments.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>order_id</th>
			<th>amount</th>
			<th>payment_method</th>
			<th>payment_status</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($payments as $key => $payment)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $payment->order_id }}</td>
		<td>{{ $payment->amount }}</td>
		<td>{{ $payment->payment_method }}</td>
		<td>{{ $payment->payment_status }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.payments.show',$payment->id) }}">Show</a>
			@permission('payments-edit')
			<a class="btn btn-primary" href="{{ route('admin.payments.edit',$payment->id) }}">Edit</a>
			@endpermission
			@permission('payments-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/payments/{{ $payment->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $payments->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
