@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Paket</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.package.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($item, ['method' => 'PATCH','route' => ['admin.package.update', $item->id], 'files' => true]) !!}
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
                  @foreach ($data['allTags'] as $tag)
                    <option @if (in_array($tag, $data['tags'])) selected @endif
                    value="{{ $tag }}">
                      {{ $tag }}
                    </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <img src="{{ asset(config('blog.itemWebPath').'/'.$item->photo) }}" style="width: 120px; height: auto;">
                <br /><strong>Gambar:</strong>
                {!! Form::file('photo', null, array('placeholder' => 'Gambar','class' => 'form-control')) !!}
                {!! Form::hidden('oldPhoto', $item->photo, array('placeholder' => 'Gambar','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="text" name="price" value="{{ formattingNumber($item->price) }}" class="form-control" id="itemPrice" onkeyup="formattingNumber(this.value, 'itemPrice')" />
            </div>
            <div class="form-group">
                <strong>Status:</strong>
                @if ($item->is_active == 1)
                    {{ Form::radio('is_active', 1, true, ['class' => '']) }} Aktif &nbsp; &nbsp; &nbsp; &nbsp;
                    {{ Form::radio('is_active', 0, null, ['class' => '']) }} Tidak Aktif
                @else
                    {{ Form::radio('is_active', 1, null, ['class' => '']) }} Aktif &nbsp; &nbsp; &nbsp; &nbsp;
                    {{ Form::radio('is_active', 0, true, ['class' => '']) }} Tidak Aktif
                @endif

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
