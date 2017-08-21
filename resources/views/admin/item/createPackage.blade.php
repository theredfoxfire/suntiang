@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Tambah Paket</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.package.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::open(array('route' => 'admin.package.store', 'method'=>'POST', 'files' => true)) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>
                Tags Kategori
                </strong>
                <select name="tags[]" id="tags" class="form-control" multiple>
                @foreach ($allTags as $tag)
                    <option @if (in_array($tag, $tags)) selected @endif
                    value="{{ $tag }}">
                      {{ $tag }}
                    </option>
                @endforeach
                </select>
            </div>
	        <div class="form-group">
                <strong>Gambar:</strong>
                {!! Form::file('photo', null, array('placeholder' => 'Gambar','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="text" name="price" class="form-control" id="itemPrice" onkeyup="formattingNumber(this.value, 'itemPrice')" />
            </div>
            <div class="form-group">
                <strong>Status:</strong>
                {{ Form::radio('is_active', 1, null, ['class' => '']) }} Aktif &nbsp; &nbsp; &nbsp; &nbsp;
                {{ Form::radio('is_active', 0, null, ['class' => '']) }} Tidak Aktif
            </div>
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
