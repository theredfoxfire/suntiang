@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>New FAQ</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.about.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
    <form class="" role="form" method="POST"
          action="{{ route('admin.faq.store') }}">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori FAQ:</strong>
                <select name="category_id" class="form-control">
					<option value="">Pilih Kategori</option>
                    @foreach($faqCategory as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
				</select>
            </div>
			<div class="form-group">
                <strong>Pertanyaan:</strong>
				<input type="text" name="question" class="form-control">
            </div>
            <div class="form-group">
                <strong>Jawaban:</strong>
				<textarea name="answer" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <strong>Status:</strong>
			    {{ Form::radio('is_active', 1, true, ['class' => '']) }} Aktif &nbsp; &nbsp; &nbsp; &nbsp;
				{{ Form::radio('is_active', 0, null, ['class' => '']) }} Tidak Aktif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
