@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Data Kurir</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.couriers.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $couriers->name }}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Photo:</strong>
            {{ $couriers->photo }}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone:</strong>
            {{ $couriers->phone }}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $couriers->email }}
        </div>
    </div>
	</div>
</div>
@endsection
