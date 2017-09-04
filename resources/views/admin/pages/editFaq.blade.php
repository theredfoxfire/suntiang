@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit FAQ</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.about.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($pages, ['method' => 'POST','route' => ['admin.faq.update', $pages->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori FAQ:</strong>
                <select name="category_id" class="form-control">
					<option value="">Pilih Kategori</option>
                    @foreach($faqCategory as $category)
                        <option value="{{ $category->id }}" @if ($category->id == $pages->category_id) selected @endif>{{ $category->name }}</option>
                    @endforeach
				</select>
            </div>
			<div class="form-group">
                <strong>Pertanyaan:</strong>
				<input type="text" name="question" value="{{ $pages->question }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Jawaban:</strong>
				<textarea name="answer" class="form-control">{{ $pages->answer }}</textarea>
            </div>
            <div class="form-group">
                <strong>Status:</strong>
                @if($pages->is_active == 1)
			    {{ Form::radio('is_active', 1, true, ['class' => '']) }} Aktif &nbsp; &nbsp; &nbsp; &nbsp;
				{{ Form::radio('is_active', 0, null, ['class' => '']) }} Tidak Aktif
                @else
                {{ Form::radio('is_active', 1, null, ['class' => '']) }} Aktif &nbsp; &nbsp; &nbsp; &nbsp;
				{{ Form::radio('is_active', 0, true, ['class' => '']) }} Tidak Aktif
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
