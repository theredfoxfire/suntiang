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
	{!! Form::model($privacy, ['method' => 'PATCH','route' => ['admin.privacy.update', $privacy->id]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
                <strong>Judul:</strong>
                <input type="text" name="title" value="{{ $privacy->title }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <textarea name="description" class="form-control">{{ $privacy->description }}</textarea>
            </div>
			<div class="form-group">
                <strong>Urutan:</strong>
                <input type="text" name="sort" value="{{ $privacy->sort }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>Status:</strong>
				@if ($privacy->is_active == 1)
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