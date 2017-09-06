@extends('layouts.front')

@section('content')
<section class="page-bottompadd">
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner8.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="bg-brushpinkgrey2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="home.html">Home</a></li>
                    <li class="active">How to Order</li>
                </ol>
                <h2 class="text-damion-curved">How to Order</h2>
                <ul class="nav nav-tabs nav-tabs-pipe text-center" role="tablist">
                    @foreach ($category as $key => $data)
                    <li role="presentation" @if ($data->id == $category_id) class="active" @endif><a href="{{ route('page.howByCategory', $data->id) }}">{{ $data->name }}</a></li>
                    @endforeach
                </ul>
                <div class="tab-content content-article">
                    <div role="tabpanel" class="tab-pane fade in active">
                        <ol class=" list-bullet-green">
                            @foreach ($how as $key => $data)
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
</div>
</section>
@endsection
