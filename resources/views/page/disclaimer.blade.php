@extends('layouts.front')

@section('content')
<section class="page-bottompadd">
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner9.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="bg-brushpinkgrey2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="home.html">Home</a></li>
                    <li class="active">Disclaimer</li>
                </ol>
                <h2 class="text-damion-curved">Disclaimer</h2>
                <div class="content-article">
                    <h3 class="text-damion">Please read it carefully</h3>
                    <ol class="list-bullet-green">
                        @foreach($disclaimer as $key => $data)
                        <li>
                            <h5>{{ $data->title }}</h5>
                            {!! $data->description !!}
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
