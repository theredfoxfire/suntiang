@extends('layouts.front')

@section('content')
<section>
	<div id="banner">
		<img class="img-responsive" src="{{ asset('images/banner10.jpg') }}" alt="">
	</div>
	<div class="bg-body-brushup">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
						<li><a href="{{ route('item.list') }}">Home</a></li>
						<li><a href="{{ route('item.catering') }}">Catering</a></li>
                        <li class="active">Custom Menu</li>
					</ol>
					<h2 class="text-damion-curved text-damion-msmlg">Custom Menu</h2>
                    <p class="text-center">Entertaining is a Way of Life Celebrate Your Life in Style</p>
                    <div id="box-cart">
                        <div class="row gapless">
                            <div id="box-carttoggle" class="col-sm-3 text-center">
                                <span class="icon icon-papandada oneshot"></span>
                                <p class="oneshot"><span id="countcartitem">4</span><br>Item</p>
                                <hr class="hidden-xs">
                                <span class="fa fa-angle-double-left hidden-xs"></span>
                            </div>
                            <div class="col-sm-9">
                                <div class="panel panel-default panel-grey">
                                    <div class="panel-heading text-center">
                                        <h5>Date : 14 March 2017</h5>
                                        <p>Number of person : 100 pax </p>
                                    </div>
                                    <div class="panel-body">
                                        <div id="proditems">
                                            <div class="media media-item">
                                                <div class="media-left">
                                                    <img class="media-object" src="{{ asset('images/checkyellow.png') }}" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                            <h5 class="oneline-ellipsis">Nasi Putih</h5>
                                                            <p>Rp 150,000</p>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <a href="#" class="item-delete"><span class="fa fa-times"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center panel-foot">
                                            <a href="cart-catering.html" class="btn btn-lg btn-flare">SUBMIT MENU <span class="icon icon-fruits"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					@php
			            $catID = 0;
			        @endphp
			        @foreach ($datas as $item)
                        @if ($catID != $item->catID && $catID != 0)
                        </div>
                    </div>
                        @endif
			            @if ($catID != $item->catID)
                        <div id="group-1" class="group-el">
                            <div class="header-underlined">
                                <img src="{{ asset('images/comp-nasi.png') }}" alt="">
                                <h4>{{ $item->catName }}</h4>
                            </div>
                            <div class="row multi-columns-row single-slidemob">
                            @php
                                $catID = $item->catID;
                            @endphp
			            @endif
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="product">
                                <a href="#" data-id="1" data-toggle="modal" data-target="#modal-cateringtype"><img class="img-responsive" src="{{ asset('images/prod1.jpg') }}" alt=""></a>
                                <a href="#" data-id="1" data-toggle="modal" data-target="#modal-cateringtype"><h5 class="oneline-ellipsis">{{ $item->name }}</h5></a>
                                <p class="text-grey text-linethrough">{{ formattingNumber($item->daily_price) }}</p>
                                <p class="text-green">Now Only <span>{{ formattingNumber($item->daily_price) }}</span></p>
                                <a href="#" class="btn btn-lg btn-flare" data-id="1" data-toggle="modal" data-target="#modal-cateringtype">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                            </div>
                        </div>
			        @endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<div id="template-cat" class="hidden">
    <div class="media media-item">
        <div class="media-left">
            <img class="media-object" src="{{ asset('images/checkyellow.png') }}" alt="">
        </div>
        <div class="media-body">
            <div class="row">
                <div class="col-xs-9">
                    <h5 class="oneline-ellipsis">PRODNAME</h5>
                    <p>PRODPRICE</p>
                </div>
                <div class="col-xs-3">
                    <a href="#" class="item-delete" data-id="PRODID"><span class="fa fa-times"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
