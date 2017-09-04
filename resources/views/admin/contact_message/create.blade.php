@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Contact Message</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.contact_message.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::open(array('route' => 'admin.contact_message.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="name" class="form-control">
            </div>
			<div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control">
            </div>
			<div class="form-group">
                <strong>No Telpon:</strong>
                <input type="text" name="phone" class="form-control">
            </div>
			<div class="form-group">
                <strong>Subjek:</strong>
                <input type="text" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <strong>Pesan:</strong>
                <textarea name="message" class="form-control"></textarea>
            </div>
			<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
