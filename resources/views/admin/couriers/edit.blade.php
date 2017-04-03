@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Data Kurir</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.couriers.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($couriers, ['method' => 'PATCH','route' => ['admin.couriers.update', $couriers->id]]) !!}
	<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
	            <strong>Nama:</strong>
	            {!! Form::text('name', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
	        </div>
	    </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
	            <strong>Photo:</strong>
	            {!! Form::text('photo', null, array('placeholder' => 'Photo','class' => 'form-control')) !!}
	        </div>
	    </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
	            <strong>Phone:</strong>
	            {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
	        </div>
	    </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
	            <strong>Email:</strong>
	            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
	        </div>
	    </div>
	    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
	    </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
