@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>FAQ</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('faq-create')
	            <a class="btn btn-success" href="{{ route('admin.faq.create') }}"> New FAQ</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th class="col-sm-2">Kategori</th>
			<th class="col-sm-2">Pertanyaan</th>
			<th class="col-sm-5">Jawaban</th>
			<th class="col-sm-1">Status</th>
			<th class="col-sm-2">Action</th>
		</tr>
	@foreach ($pages as $key => $page)
	<tr>
		<td>{{ $page->category_name }}</td>
		<td>{{ $page->question }}</td>
		<td>{{ $page->answer }}</td>
		<td>
			@if ($page->is_active)  <label class="label label-success">Aktif</label>
			@else <label class="label label-danger">Tidak Aktif</label>
			@endif
		</td>
		<td>
			@permission('faq-edit')
			<a class="btn btn-primary btn-xs" href="{{ route('admin.faq.edit',$page->id) }}">Edit</a>
			@endpermission
			@permission('faq-delete')
			<a class="btn btn-danger delete-confirm btn-xs" data-toggle="modal" data-target="#modal-delete" data-id="{{ config('blog.prefix_url') }}admin/faq/{{ $page->id }}">Delete</a>
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $pages->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
