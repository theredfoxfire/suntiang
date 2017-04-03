@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Carts</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.carts.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	{!! Form::model($carts, ['method' => 'PATCH','route' => ['admin.carts.update', $carts->id]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Session ID:</strong>
            {!! Form::text('session_id', null, array('placeholder' => 'Session ID','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
    </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
