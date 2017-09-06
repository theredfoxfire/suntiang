@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Pilih category untuk Hompage</h2>
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Category</th>
			<th class="col-sm-2">Action</th>
		</tr>
	@foreach ($selected_category as $key => $data)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $data->name }}</td>
		<td>
			@permission('selected_category-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.selected_category.edit',$data->id) }}">Edit</a>
			@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	@include('admin.partials.deleteConfirm')
</div>
@endsection
