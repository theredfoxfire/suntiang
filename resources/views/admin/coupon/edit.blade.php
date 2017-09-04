@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Payments</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('admin.coupon.index') }}"> Back</a>
	        </div>
	    </div>
	</div>
	@include('admin.partials.errors')
	{!! Form::model($coupon, ['method' => 'PATCH','route' => ['admin.coupon.update', $coupon->id]]) !!}
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
                <strong>Kode Kupon:</strong>
                <input type="text" name="code" value="{{ $coupon->code }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>Tanggal Mulai:</strong>
                <input type="text" name="start_date" value="{{ $coupon->start_date }}" id="start_date" readonly class="form-control">
            </div>
			<div class="form-group">
                <strong>Tanggal Berakhir:</strong>
                <input type="text" name="end_date" value="{{ $coupon->end_date }}" id="end_date" readonly class="form-control">
            </div>
			<div class="form-group">
                <strong>Oreder Minimal:</strong>
                <input type="number" name="order_min" value="{{ $coupon->order_min }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>Order Maksimal:</strong>
                <input type="text" name="order_max" value="{{ $coupon->order_max }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>Redeem Maksimal:</strong>
                <input type="number" name="redeem_max" value="{{ $coupon->redeem_max }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>User Maksimal:</strong>
                <input type="text" name="user_max" value="{{ $coupon->user_max }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>Nilai Uang:</strong>
                <input type="text" name="value" value="{{ $coupon->value }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>Presentase:</strong>
                <input type="text" name="presentage" value="{{ $coupon->presentage }}" class="form-control">
            </div>
			<div class="form-group">
                <strong>Geratis Pengiriman:</strong>
                @if ($coupon->is_free_shipping == 1)
                <input type="radio" name="is_free_shipping" value="1" checked> Ya &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="is_free_shipping" value="0"> Tidak
                @else
                <input type="radio" name="is_free_shipping" value="1" > Ya &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="is_free_shipping" value="0" checked> Tidak
                @endif
            </div>
			<div class="form-group">
                <strong>Status:</strong>
                @if ($coupon->is_active)
                <input type="radio" name="is_active" value="1" checked> Aktif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="is_active" value="0"> Tidak Aktif
                @else
                <input type="radio" name="is_active" value="1"> Aktif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="is_active" value="0" checked> Tidak Aktif
                @endif
            </div>
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
</div>
	{!! Form::close() !!}
@endsection
