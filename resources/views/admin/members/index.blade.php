@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Members List</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('members-create')
	            <a class="btn btn-success" href="{{ route('admin.members.create') }}"> Tambah Member Baru</a>
	          @endpermission
	        </div>
	    </div>
	</div>
	@include('admin.partials.success')
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>user_id</th>
			<th>name</th>
			<th>email</th>
			<th>phone</th>
			<th>bank_account_number</th>
			<th>bank_account_name</th>
			<th>bank_name</th>
			<th>credit_card_number</th>
			<th>credit_card_name</th>
			<th>birthdate</th>
			<th>Jenis Kelamin</th>
			<th>address</th>
			<th>district_id</th>
			<th>is_active</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($members as $key => $member)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $member->user_id }}</td>
		<td>{{ $member->name }}</td>
		<td>{{ $member->email }}</td>
		<td>{{ $member->phone }}</td>
		<td>{{ $member->bank_account_number }}</td>
		<td>{{ $member->bank_account_name }}</td>
		<td>{{ $member->bank_name }}</td>
		<td>{{ $member->credit_card_number }}</td>
		<td>{{ $member->credit_card_name }}</td>
		<td>{{ $member->birthdate }}</td>
		<td>{{ $member->sex }}</td>
		<td>{{ $member->address }}</td>
		<td>{{ $member->district_id }}</td>
		<td>{{ $member->is_active }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('admin.members.show',$member->id) }}">Show</a>
			@permission('members-edit')
			<a class="btn btn-primary" href="{{ route('admin.members.edit',$member->id) }}">Edit</a>
			@endpermission
			@permission('members-delete')
			<a class="btn btn-danger delete-confirm" data-toggle="modal" data-target="#modal-delete" data-id="/admin/members/{{ $member->id }}">Delete</a>
    	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $members->render() !!}
	@include('admin.partials.deleteConfirm')
</div>
@endsection
