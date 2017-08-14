@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Tags</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.tag.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::open(array('route' => 'admin.tag.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('tag', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Meta Title:</strong>
                {!! Form::text('title', null, array('placeholder' => 'Meta Title','class' => 'form-control')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subtitle:</strong>
                {!! Form::text('subtitle', null, array('placeholder' => 'Subtitle','class' => 'form-control')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Meta Description:</strong>
                {!! Form::textarea('meta_description', null, array('placeholder' => 'Meta Description','class' => 'form-control')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reverse Direction:</strong>
                <br />
                {{ Form::label('1', 'Yes') }}
                {{ Form::radio('reverse_direction', 'Yes', false, array('id'=>'1')) }}<br />
                {{ Form::label('2', 'No') }}
                {{ Form::radio('reverse_direction', 'No', true, array('id'=>'2')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
