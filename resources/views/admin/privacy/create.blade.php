@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Privacy & Policy</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.privacy.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::open(array('route' => 'admin.privacy.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
                <strong>Judul:</strong>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <textarea name="description" class="form-control"></textarea>
            </div>
			<div class="form-group">
                <strong>Urutan:</strong>
                <input type="text" name="sort" class="form-control">
            </div>
			<div class="form-group">
                <strong>Status:</strong>
                <input type="radio" name="is_active" value="1" checked> Aktif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="is_active" value="0"> Tidak Aktif
            </div>
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
