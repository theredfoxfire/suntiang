@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Kupon List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('coupon-create')
	            <a class="btn btn-success" href="{{ route('admin.coupon.create') }}"> Create New</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th class="col-sm-1">No</th>
			<th class="col-sm-1">Kode</th>
			<th class="col-sm-1">Mulai berlaku</th>
			<th class="col-sm-1">Berakhir</th>
			<th class="col-sm-1">Order minimal</th>
			<th class="col-sm-1">Redeem Maksimal</th>
			<th class="col-sm-1">User Maksimal</th>
			<th class="col-sm-1">Nilai Uang</th>
			<th class="col-sm-1">Presentase</th>
			<th class="col-sm-1">Gratis Pengiriman</th>
			<th class="col-sm-1" >Status</th>
			<th class="col-md-2">Action</th>
		</tr>
	@foreach ($coupon as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $data->code }}</td>
		<td>{{ $data->start_date }}</td>
		<td>{{ $data->end_date }}</td>
		<td>{{ $data->order_min }}</td>
		<td>{{ $data->redeem_max }}</td>
		<td>{{ $data->user_max }}</td>
		<td>{{ $data->value }}</td>
		<td>{{ $data->presentage }}</td>
		<td>
			@if ($data->is_free_shipping)  <label class="label label-success">Ya</label>
			@else <label class="label label-danger">Tidak</label>
			@endif
		</td>
		<td>
			@if ($data->is_active)  <label class="label label-success">Aktif</label>
			@else <label class="label label-danger">Tidak Aktif</label>
			@endif
		</td>
		<td>
			@permission('coupon-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.coupon.edit',$data->id) }}">Edit</a>
			@endpermission
			@permission('coupon-delete')
			<a class="btn btn-danger btn-xs delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/coupon/{{ $data->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $coupon->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
