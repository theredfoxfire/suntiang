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
                <li><a href="home.html">Home</a></li>
                <li class="active">Promo</li>
            </ol>
            <h2 class="text-damion-curved">Promo</h2>
            <div class="slider-3slidescenter center-block">
                <div>
                    <div class="shadow-paper">
                        <img class="img-responsive" src="{{ asset('images/promo-slide1.jpg') }}" alt="">
                    </div>
                    <div class="text-center">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div>
                    <div class="shadow-paper">
                        <img class="img-responsive" src="{{ asset('images/promo-slide2.jpg') }}" alt="">
                    </div>
                    <div class="text-center">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div>
                    <div class="shadow-paper">
                        <img class="img-responsive" src="{{ asset('images/promo-slide3.jpg') }}" alt="">
                    </div>
                    <div class="text-center">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div>
                    <div class="shadow-paper">
                        <img class="img-responsive" src="{{ asset('images/promo-slide4.jpg') }}" alt="">
                    </div>
                    <div class="text-center">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
