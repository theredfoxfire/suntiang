@extends('layouts.front')

@section('content')
<section id="page-about" class="page-bottompadd img-overflow">
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner4.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('item.list') }}">Home</a></li>
                <li class="active">About</li>
            </ol>
            <h2 class="text-damion-curved">About Us</h2>
            <p class="text-center">{{ $about->title }}</p>
            <div class="content-article">
                <div class="row center-gap">
                    <div class="col-sm-6">
                        {!! $about->content !!}
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('images/about1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-indented">
                            <h3 class="text-damion">Opening hours</h3>
                            <p>{{ $about->opening_hour }}</p>
                        </div>
                        <div class="text-indented">
                            <h3 class="text-damion">For Reservation</h3>
                            {!! $about->reservation_info !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-indented">
                            <h3 class="text-damion">Promo</h3>
                            <p>{{ $about->promo }}</p>
                        </div>
                        <div class="text-indented">
                            <h3 class="text-damion">For interviews/photos, contact</h3>
                            <p>{{ $about->contact_person }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
