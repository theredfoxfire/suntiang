@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Show Categories</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.categories.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $categories->name }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Slug:</strong>
            {{ $categories->slug }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Deskripsi:</strong>
            {{ $categories->description }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Parent ID:</strong>
            {{ $categories->parent_id }}
        </div>
    </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Level:</strong>
            {{ $categories->level }}
        </div>
    </div>
	</div>
</div>
@endsection
