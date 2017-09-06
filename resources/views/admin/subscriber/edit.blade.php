@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Sessions</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.subscriber.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($subscriber, ['method' => 'PATCH','route' => ['admin.subscriber.update', $subscriber->id]]) !!}
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
	            <strong>Email:</strong>
	            {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
	        </div>
			<div class="form-group">
                <strong>Status:</strong>
				@if ($subscriber->is_active == 1)
                <input type="radio" name="is_active" value="1" checked> Aktif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="is_active" value="0"> Tidak Aktif
				@else
				<input type="radio" name="is_active" value="1"> Aktif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="is_active" value="0" checked> Tidak Aktif
				@endif
            </div>
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection