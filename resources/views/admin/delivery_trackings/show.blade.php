@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Delivery Trackings</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.delivery_trackings.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>user_id:</strong>
            {{ $delivery_trackings->user_id }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>delivery_id:</strong>
            {{ $delivery_trackings->delivery_id }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>courier_id:</strong>
            {{ $delivery_trackings->courier_id }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>refference_id:</strong>
            {{ $delivery_trackings->refference_id }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>tracking_status:</strong>
            {{ $delivery_trackings->tracking_status }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>current_position:</strong>
            {{ $delivery_trackings->current_position }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>additional_note:</strong>
            {{ $delivery_trackings->additional_note }}
        </div>
    </div>
	</div>
</div>
@endsection
