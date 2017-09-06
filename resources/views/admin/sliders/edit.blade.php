@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Sliders</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.sliders.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($sliders, ['method' => 'PATCH','files' => true, 'route' => ['admin.sliders.update', $sliders->id]]) !!}
	{!! Form::hidden('oldPhoto', $sliders->file, array('placeholder' => 'Gambar','class' => 'form-control')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {!! Form::text('title', null, array('placeholder' => 'Judul','class' => 'form-control')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image: (recomended 1365 px X 570 px)</strong><br />
				<img src="{{ asset(config('blog.sliderWebPath').'/'.$sliders->image) }}" style="width: 120px; height: auto;"><br />
                <input type="file" name="file" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
