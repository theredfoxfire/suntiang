@extends('layouts.front')

@section('content')
<section id="page-snackbox">
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner4.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="home.html">Home</a></li>
                <li class="active">Snack Box</li>
            </ol>
            <h2 class="text-damion-curved">Snack Box</h2>
            <p class="text-center">COMING SOON</p>
            <img class="img-responsive center-block" src="{{ asset('images/snacbox-cs.png') }}" alt="">
        </div>
    </div>
</div>
</div>
</section>
@endsection
