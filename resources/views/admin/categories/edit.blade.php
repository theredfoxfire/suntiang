@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Kategori</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.categories.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($categories, ['method' => 'PATCH','route' => ['admin.categories.update', $categories->id]]) !!}
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kelompok:</strong>
            <select name="group" class="form-control">
				<option value="">Berdasarkan</option>
				<option value="region" @if ($categories->group == 'region') selected @endif >Regional</option>
				<option value="jenis" @if ($categories->group == 'jenis') selected @endif>Jenis</option>
				<option value="isi" @if ($categories->group == 'isi') selected @endif>Isi/Kandungan</option>
			</select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
    </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
