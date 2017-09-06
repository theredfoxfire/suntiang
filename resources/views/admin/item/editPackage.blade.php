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
                    Kategori Jenis
                </strong>
                <select name="category[]" id="category" class="form-control" multiple>
                  @foreach ($data['allCategory'] as $tag)
                    <option @if (in_array($tag, $data['category'])) selected @endif
                    value="{{ $tag }}">
                      {{ $tag }}
                    </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>
                    Kategori Area
                </strong>
                <select name="area[]" id="area" class="form-control" multiple>
                  @foreach ($data['allArea'] as $tag)
                    <option @if (in_array($tag, $data['area'])) selected @endif
                    value="{{ $tag }}">
                      {{ $tag }}
                    </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>
                    Pilih Drink
                </strong>
                <select name="drink[]" id="drink" class="form-control" multiple>
                  @foreach ($data['allDrink'] as $tag)
                    <option @if (in_array($tag, $data['drink'])) selected @endif
                    value="{{ $tag }}">
                      {{ $tag }}
                    </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>
                    Pilih Condiment
                </strong>
                <select name="condiment[]" id="condiment" class="form-control" multiple>
                  @foreach ($data['allCondiment'] as $tag)
                    <option @if (in_array($tag, $data['condiment'])) selected @endif
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
                <strong>Harga Daily Meal:</strong>
                <input type="text" name="daily_price" value="{{ formattingNumber($item->daily_price) }}" class="form-control" id="price1" onkeyup="formattingNumber(this.value, 'price1')" />
            </div>
            <div class="form-group">
                <strong>Harga Condiment:</strong>
                <input type="text" name="condiment_price" value="{{ formattingNumber($item->condiment_price) }}" class="form-control" id="price2" onkeyup="formattingNumber(this.value, 'price2')" />
            </div>
            <div class="form-group">
                <strong>Harga Catering/50 pax:</strong>
                <input type="text" name="catering_price_50" value="{{ formattingNumber($item->catering_price_50) }}" class="form-control" id="price3" onkeyup="formattingNumber(this.value, 'price3')" />
            </div>
            <div class="form-group">
                <strong>Harga Catering/75 pax:</strong>
                <input type="text" name="catering_price_75" value="{{ formattingNumber($item->catering_price_75) }}" class="form-control" id="price4" onkeyup="formattingNumber(this.value, 'price4')" />
            </div>
            <div class="form-group">
                <strong>Harga Catering/100 pax:</strong>
                <input type="text" name="catering_price_100" value="{{ formattingNumber($item->catering_price_100) }}" class="form-control" id="price5" onkeyup="formattingNumber(this.value, 'price5')" />
            </div>
            <div class="form-group">
                <strong>Posisi:</strong>
                @if ($item->is_stall == 1)
                    {{ Form::radio('is_active', 1, true, ['class' => '']) }} Stall &nbsp; &nbsp; &nbsp; &nbsp;
                    {{ Form::radio('is_active', 0, null, ['class' => '']) }} Buffet
                @else
                    {{ Form::radio('is_active', 1, null, ['class' => '']) }} Stall &nbsp; &nbsp; &nbsp; &nbsp;
                    {{ Form::radio('is_active', 0, true, ['class' => '']) }} Buffet
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
