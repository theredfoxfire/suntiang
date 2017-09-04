@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit New Item</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.about.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($pages, ['method' => 'POST','route' => ['admin.about.update', $pages->id]]) !!}
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{ $pages->title }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Content:</strong>
				<textarea name="content" class="form-control">{{ $pages->content }}</textarea>
            </div>
            <div class="form-group">
                <strong>Jam Buka:</strong>
				  <input type="text" name="opening_hour" value="{{ $pages->opening_hour }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Info Reservasi:</strong>
				<textarea name="reservation_info" class="form-control">{{ $pages->reservation_info }}</textarea>
            </div>
            <div class="form-group">
                <strong>Promo:</strong>
				<input type="text" name="promo" value="{{ $pages->promo }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Contact Person:</strong>
				<input type="text" name="contact_person" value="{{ $pages->contact_person }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
