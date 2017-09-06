@extends('layouts.front')

@section('content')
<section class="page-sidenav page-bottompadd">
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner5.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="bg-brushpinkgrey1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('item.list') }}">Home</a></li>
                    <li class="active">FAQ</li>
                </ol>
                <h2 class="text-damion-curved">FAQ</h2>
                <div class="row ">
                    <div class="col-sm-3">
                        <h3 class="text-damion">Category</h3>
                        <ul class="list-normal list-sidenav">
                            @foreach ($category as $key => $data)
                            <li @if ($data->id == $category_id) class="active" @endif>
                                <a href="{{ route('page.faqByCategory', $data->id) }}">{{ $data->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <h3 class="text-damion text-yellow">General Questions</h3>
                        <div class="content-article">
                            <ul class="list-normal list-bullet-dbcheck">
                                @foreach($faq as $key => $data)
                                <li>
                                    <h5>{{ $data->question }}</h5>
                                    {!! $data->answer !!}
                                </li>
                                @endforeach
                            </ul>
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
