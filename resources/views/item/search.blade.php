@extends('layouts.front')

@section('content')
<section>
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner2.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="home.html">Home</a></li>
                <li class="active">Search</li>
            </ol>
            <h2 class="text-damion-curved">Search</h2>
            <form id="form-sortnfilt" class="form-horizontal form-default form-label-indented center-block" action="#">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group form-inline">
                            <label for="sortby" class="control-label">Sort by</label>
                            <select id="sortby" class="selectpicker" name="sortby" data-width="fit" data-style="btn-lg">
                                <option value="1">Price Low to High</option>
                                <option value="lorem">Lorem</option>
                                <option value="lorem">Ipsum</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-inline">
                            <label for="category" class="control-label">Category</label>
                            <select id="category" class="selectpicker" name="category" data-width="fit" data-style="btn-lg">
                                <option value="1">Karbohidrat</option>
                                <option value="lorem">Lorem</option>
                                <option value="lorem">Ipsum</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <a href="#" class="text-orange">VIEW ALL</a>
                    </div>
                    <div class="col-sm-3 text-right">
                        <p class="text-black"><strong>8 results found for ALL</strong></p>
                        <p class="text-black">Search term <strong>Sate</strong></p>
                    </div>
                </div>
            </form>
            <div class="row multi-columns-row single-slidemob">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod1.jpg') }}" alt=""></a>
                        <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Paket nasi ayam</h5></a>
                        <p class="text-grey text-linethrough">Rp 69.000</p>
                        <p class="text-green">Now Only <span>Rp 49.000</span></p>
                        <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod2.jpg') }}" alt=""></a>
                        <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Paket Lidah Sapi</h5></a>
                        <p class="text-grey text-linethrough">Rp 69.000</p>
                        <p class="text-green">Now Only <span>Rp 49.000</span></p>
                        <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod3.jpg') }}" alt=""></a>
                        <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Paket Tunjang Rice Bowl</h5></a>
                        <p class="text-grey text-linethrough">Rp 69.000</p>
                        <p class="text-green">Now Only <span>Rp 49.000</span></p>
                        <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod4.jpg') }}" alt=""></a>
                        <a href="dm-proddet.html"><h5 class="oneline-ellipsis">paket Ramen Cabai Hijau</h5></a>
                        <p class="text-grey text-linethrough">Rp 69.000</p>
                        <p class="text-green">Now Only <span>Rp 49.000</span></p>
                        <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod1.jpg') }}" alt=""></a>
                        <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Paket nasi ayam</h5></a>
                        <p class="text-grey text-linethrough">Rp 69.000</p>
                        <p class="text-green">Now Only <span>Rp 49.000</span></p>
                        <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod2.jpg') }}" alt=""></a>
                        <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Paket Lidah Sapi</h5></a>
                        <p class="text-grey text-linethrough">Rp 69.000</p>
                        <p class="text-green">Now Only <span>Rp 49.000</span></p>
                        <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod3.jpg') }}" alt=""></a>
                        <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Paket Tunjang Rice Bowl</h5></a>
                        <p class="text-grey text-linethrough">Rp 69.000</p>
                        <p class="text-green">Now Only <span>Rp 49.000</span></p>
                        <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod4.jpg') }}" alt=""></a>
                        <a href="dm-proddet.html"><h5 class="oneline-ellipsis">paket Ramen Cabai Hijau</h5></a>
                        <p class="text-grey text-linethrough">Rp 69.000</p>
                        <p class="text-green">Now Only <span>Rp 49.000</span></p>
                        <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
