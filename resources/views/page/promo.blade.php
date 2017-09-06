@extends('layouts.front')

@section('content')
<section>
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner7.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('item.list') }}">Home</a></li>
                <li class="active">Promo</li>
            </ol>
            <h2 class="text-damion-curved">Promo</h2>
            <div class="slider-3slidescenter center-block">
                @foreach ($promo as $key => $data)
                <div>
                    <div class="shadow-paper">
                        <img class="img-responsive" src="{{ asset(config('blog.promoWebPath').'/'.$data->image) }}">
                    </div>
                    <div class="text-center">
                        {!! $data->description !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
