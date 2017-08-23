@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Create New Item</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.items.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::open(array('route' => 'admin.items.store', 'method'=>'POST', 'files' => true)) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>Konversi:</strong>
                {!! Form::text('convertion', null, array('placeholder' => 'Konversi, ex: setara 1 gelas susu.','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <strong>
                Jenis Kategori
                </strong>
                <select name="category[]" id="category" class="form-control" multiple>
                @foreach ($allCategory as $tag)
                    <option
                    value="{{ $tag }}">
                      {{ $tag }}
                    </option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>
                Jenis Area
                </strong>
                <select name="area[]" id="area" class="form-control" multiple>
                @foreach ($allArea as $tag)
                    <option
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
                @foreach ($allDrink as $tag)
                    <option
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
                @foreach ($allCodiment as $tag)
                    <option
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
                <strong>Harga Daily Meal:</strong>
                <input type="text" name="daily_price" class="form-control" id="price1" onkeyup="formattingNumber(this.value, 'price1')" />
            </div>
            <div class="form-group">
                <strong>Harga Condement:</strong>
                <input type="text" name="condiment_price" class="form-control" id="price2" onkeyup="formattingNumber(this.value, 'price2')" />
            </div>
            <div class="form-group">
                <strong>Harga Catering/50 pax:</strong>
                <input type="text" name="catering_price_50" class="form-control" id="price3" onkeyup="formattingNumber(this.value, 'price3')" />
            </div>
            <div class="form-group">
                <strong>Harga Catering/75 pax:</strong>
                <input type="text" name="catering_price_75" class="form-control" id="price4" onkeyup="formattingNumber(this.value, 'price4')" />
            </div>
            <div class="form-group">
                <strong>Harga Catering/100 pax:</strong>
                <input type="text" name="catering_price_100" class="form-control" id="price5" onkeyup="formattingNumber(this.value, 'price5')" />
            </div>
            <div class="form-group">
                <strong>Condiment?: &nbsp; &nbsp; &nbsp; &nbsp;</strong>
                {{ Form::radio('is_condiment', 1, null, ['class' => '']) }} Ya &nbsp; &nbsp; &nbsp; &nbsp;
                {{ Form::radio('is_condiment', 0, null, ['class' => '']) }} Bukan
            </div>
            <div class="form-group">
                <strong>Minuman?:&nbsp; &nbsp; &nbsp; &nbsp;</strong>
                {{ Form::radio('is_drink', 1, null, ['class' => '']) }} Ya &nbsp; &nbsp; &nbsp; &nbsp;
                {{ Form::radio('is_drink', 0, null, ['class' => '']) }} Bukan
            </div>
            <div class="form-group">
                <strong>Posisi:&nbsp; &nbsp; &nbsp; &nbsp;</strong>
                {{ Form::radio('is_stall', 1, null, ['class' => '']) }} Stall &nbsp; &nbsp; &nbsp; &nbsp;
                {{ Form::radio('is_stall', 0, null, ['class' => '']) }} Buffet
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
