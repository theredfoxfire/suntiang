@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Selected category</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.selected_category.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($selected_category, ['method' => 'PATCH','route' => ['admin.selected_category.update', $selected_category->id]]) !!}
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
                <strong>
                    Kategori
                </strong>
                <select name="category_id" id="category" class="form-control">
                  @foreach ($allCategory as $tag)
                    <option @if ($tag->id == $selected_category->category_id) selected @endif
                    value="{{ $tag->id }}">
                      {{ $tag->name }}
                    </option>
                  @endforeach
                </select>
            </div>
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
