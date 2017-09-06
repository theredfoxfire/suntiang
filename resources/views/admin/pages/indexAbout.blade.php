@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>About</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('about-create')
	            <a class="btn btn-success" href="{{ route('admin.about.create') }}"> New About</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th class="col-sm-2">Title</th>
			<th class="col-sm-4">Content</th>
			<th class="col-sm-1">Jam Buka</th>
			<th class="col-sm-1">Info Reservasi</th>
			<th class="col-sm-2">Promo</th>
			<th class="col-sm-1">Contact Person</th>
			<th class="col-sm-1">Action</th>
		</tr>
	@foreach ($pages as $key => $page)
	<tr>
		<td>{{ $page->title }}</td>
		<td>{!! $page->content !!}</td>
		<td>{{ $page->opening_hour }}</td>
		<td>{!! $page->reservation_info !!}</td>
		<td>{{ $page->promo }}</td>
		<td>{{ $page->contact_person }}</td>
		<td>
			@permission('about-edit')
			<a class="btn btn-primary" href="{{ route('admin.about.edit',$page->id) }}">Edit</a>
			@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	@include('admin.partials.deleteConfirm')
</div>
@endsection
