@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Show Deliveries</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.deliveries.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Order:</strong>
            {{ $deliveries->order_id }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kecamatan:</strong>
            {{ $deliveries->district_id }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kode Pos:</strong>
            {{ $deliveries->postal_code }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status Pengiriman:</strong>
            {{ $deliveries->delivery_status }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Waktu Pengiriman:</strong>
            {{ $deliveries->delivery_time }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Penerima Kiriman:</strong>
            {{ $deliveries->delivery_receiver }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>No. Telphone Penerima Kiriman:</strong>
            {{ $deliveries->delivery_receiver_phone }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat Pengiriman:</strong>
            {{ $deliveries->delivery_address }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal Pengiriman:</strong>
            {{ $deliveries->delivery_date }}
        </div>
    </div>
	</div>
</div>
@endsection
