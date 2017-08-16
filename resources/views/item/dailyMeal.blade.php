@extends('layouts.front')

@section('content')
<section>
<div id="banner">
    <img class="img-responsive" src="{{ asset('images/banner1.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="home.html">Home</a></li>
                    <li class="active">Daily Meal</li>
                </ol>
                <h2 class="text-damion-curved">Chef Choice!</h2>
                <form id="form-sortnfilt" class="form-horizontal form-default form-label-indented form-inlined center-block" action="#">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="sortby" class="control-label col-sm-12">Sort by</label>
                                <div class="col-sm-12">
                                    <select id="sortby" class="selectpicker" name="sortby" data-width="100%" data-style="btn-lg">
                                        <option value="1">Price Low to High</option>
                                        <option value="lorem">Lorem</option>
                                        <option value="lorem">Ipsum</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="category" class="control-label col-sm-12">Category</label>
                                <div class="col-sm-12">
                                    <select id="category" class="selectpicker" name="category" data-width="100%" data-style="btn-lg">
                                        <option value="1">Paket Hemat</option>
                                        <option value="lorem">Lorem</option>
                                        <option value="lorem">Ipsum</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="country" class="control-label col-sm-12">Country</label>
                                <div class="col-sm-12">
                                    <select id="country" class="selectpicker" name="country" data-width="100%" data-style="btn-lg">
                                        <option value="1">Indonesia</option>
                                        <option value="lorem">Lorem</option>
                                        <option value="lorem">Ipsum</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-lg btn-flare">SUBMIT <span class="icon icon-servingdome"></span></button>
                        </div>
                    </div>
                </form>

                <div class="row multi-columns-row single-slidemob">
                    @foreach ($items as $key => $value)
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="product">
                            <a href="{{ route('item.dailyMealShow', $value->id) }}"><img class="img-responsive" src="{{ asset('images/prod1.jpg') }}" alt=""></a>
                            <a href="{{ route('item.dailyMealShow', $value->id) }}"><h5 class="oneline-ellipsis">{{ $value->name }}</h5></a>
                            <p class="text-grey text-linethrough">Rp {{ formattingNumber($value->price) }}</p>
                            <p class="text-green">Now Only <span>Rp {{ formattingNumber($value->price) }}</span></p>
                            <a href="{{ route('item.dailyMealShow', $value->id) }}" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dbbrush2">
        <div id="choosealacarte" class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h2 class="text-damion-curved">Choose your Ala Carte</h2>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit</p>
                    <img class="img-responsive center-block" src="{{ asset('images/choosealacarte.png" alt="">
                    <a href="dm-prodlistcust.html" class="btn btn-lg btn-flaregreen">CLICK HERE TO ORDER <span class="icon icon-food"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
