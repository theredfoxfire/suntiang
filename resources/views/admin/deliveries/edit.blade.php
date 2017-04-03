@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Deliveries</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.deliveries.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($deliveries, ['method' => 'PATCH','route' => ['admin.deliveries.update', $deliveries->id]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Order:</strong>
            {!! Form::text('order_id', null, array('placeholder' => 'Order','class' => 'form-control')) !!}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kecamatan:</strong>
            {!! Form::text('district_id', null, array('placeholder' => 'Kecamatan','class' => 'form-control')) !!}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kode Pos:</strong>
            {!! Form::text('postal_code', null, array('placeholder' => 'Kode Pos','class' => 'form-control')) !!}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status Pengiriman:</strong>
            {!! Form::text('delivery_status', null, array('placeholder' => 'Status Pengiriman','class' => 'form-control')) !!}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Waktu Pengiriman:</strong>
            {!! Form::text('delivery_time', null, array('placeholder' => 'Waktu Pengiriman','class' => 'form-control')) !!}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Penerima Kiriman:</strong>
            {!! Form::text('delivery_receiver', null, array('placeholder' => 'Penerima Kiriman','class' => 'form-control')) !!}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>No. Telpon Penerima Kiriman:</strong>
            {!! Form::text('delivery_receiver_phone', null, array('placeholder' => 'No. Telpon Penerima Kiriman','class' => 'form-control')) !!}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat Pengiriman:</strong>
            {!! Form::textarea('delivery_address', null, array('placeholder' => 'Alamat Pengiriman','class' => 'form-control')) !!}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal Pengriman:</strong>
            {!! Form::text('delivery_date', null, array('placeholder' => 'Tanggal Pengiriman','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
    </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
