@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Term of Use</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.term.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($term, ['method' => 'PATCH','route' => ['admin.term.update', $term->id]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
                <strong>Judul:</strong>
                <input type="text" name="title" value="{{ $term->title }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <textarea name="description" class="form-control">{{ $term->description }}</textarea>
            </div>
			<div class="form-group">
                <strong>Urutan:</strong>
                <input type="text" name="sort" value="{{ $term->sort }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>Status:</strong>
				@if ($term->is_active == 1)
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
