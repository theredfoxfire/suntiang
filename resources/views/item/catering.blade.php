@extends('layouts.front')

@section('content')
<div class="modal fade" id="modal-catering" tabindex="-1" role="dialog" aria-labelledby="modalcatering">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-body">
        <p class="text-center text-darkgrey center-block">Lorem Ipsum is simply dummy text of the printing and typesettin</p>
        <form id="form-catering" class="form-horizontal form-default form-label-indented center-block" action="#">
            <div class="form-group form-group-lg">
                <div class="col-sm-12">
                   <div class="input-group input-group-lg">
                        <input id="location" class="form-control" type="text" name="location" placeholder="Your Location">
                        <label for="location" class="input-group-addon"><span class="fa fa-map-marker"></span></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-group-lg">
                        <div class="col-sm-12">
                            <div class="input-group input-group-lg">
                                <input id="date" class="form-control" type="text" name="date" placeholder="Date">
                                <label for="date" class="input-group-addon"><span class="fa fa-calendar"></span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 form-inline">
                    <div class="form-group form-group-lg">
                        <label for="deliverytime" class="control-label">Time</label>
                        <select id="deliverytime" class="selectpicker" name="deliverytime" data-width="100px" data-style="btn-lg">
                            <option value="lorem">12:30</option>
                            <option value="lorem">13:00</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group form-group-lg">
                <div class="col-sm-12">
                    <input class="form-control" type="text" name="email" placeholder="Email address">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <div class="col-sm-12">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group text-sbs">
                <div class="col-xs-6">
                    <div class="checkbox checkbox-default">
                        <input id="rememberme" name="rememberme" value="" type="checkbox">
                        <label for="rememberme"><span class="box"></span>Remember me</label>
                    </div>
                </div>
                <div class="col-xs-6 text-right">
                    <a href="forgotpass.html" class="text-danger">Forgot Password ?</a>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-default btn-yellowgrad" data-dismiss="modal">LOGIN</button>
                <a href="register.html" class="btn btn-lg btn-yellowgrad">REGISTER</a>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<section>
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner3.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="home.html">Home</a></li>
                <li class="active">Catering</li>
            </ol>
            <h2 class="text-damion-curved text-damion-msmlg">Catering</h2>
            <p class="text-center">Entertaining is a Way of Life Celebrate Your Life in Style</p>
            <form id="form-cateringsearch" class="form-horizontal form-default form-label-indented form-inlined center-block" action="#">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="sortby" class="control-label col-sm-12">Number of person</label>
                            <div class="col-sm-12">
                                <select id="sortby" class="selectpicker" name="sortby" data-width="100%" data-style="btn-lg">
                                    <option value="1">100 pax</option>
                                    <option value="lorem">Lorem</option>
                                    <option value="lorem">Ipsum</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="category" class="control-label col-sm-12">Type of event</label>
                            <div class="col-sm-12">
                                <select id="category" class="selectpicker" name="category" data-width="100%" data-style="btn-lg">
                                    <option value="1">Wedding</option>
                                    <option value="lorem">Lorem</option>
                                    <option value="lorem">Ipsum</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="country" class="control-label col-sm-12">Budget per person</label>
                            <div class="col-sm-12">
                                <select id="country" class="selectpicker" name="country" data-width="100%" data-style="btn-lg">
                                    <option value="1">IDR 100,000</option>
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
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="#"><img class="img-responsive" src="{{ asset('images/catering1.jpg') }}" alt=""></a>
                        <a href="#"><h5 class="oneline-ellipsis">Menu catring 1</h5></a>
                        <p class="text-grey">100 pax</p>
                        <p class="text-green">Now Only <span>Rp 1.549.000</span></p>
                        <a href="#" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="#"><img class="img-responsive" src="{{ asset('images/catering2.jpg') }}" alt=""></a>
                        <a href="#"><h5 class="oneline-ellipsis">Menu catring 2</h5></a>
                        <p class="text-grey">100 pax</p>
                        <p class="text-green">Now Only <span>Rp 4.000.000</span></p>
                        <a href="#" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="#"><img class="img-responsive" src="{{ asset('images/catering3.jpg') }}" alt=""></a>
                        <a href="#"><h5 class="oneline-ellipsis">Menu catring 3</h5></a>
                        <p class="text-grey">100 pax</p>
                        <p class="text-green">Now Only <span>Rp 1.900.000</span></p>
                        <a href="#" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="#"><img class="img-responsive" src="{{ asset('images/catering4.jpg') }}" alt=""></a>
                        <a href="#"><h5 class="oneline-ellipsis">Menu catring 4</h5></a>
                        <p class="text-grey">100 pax</p>
                        <p class="text-green">Now Only <span>Rp 4.000.000</span></p>
                        <a href="#" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="#"><img class="img-responsive" src="{{ asset('images/catering1.jpg') }}" alt=""></a>
                        <a href="#"><h5 class="oneline-ellipsis">Menu catring 1</h5></a>
                        <p class="text-grey">100 pax</p>
                        <p class="text-green">Now Only <span>Rp 1.549.000</span></p>
                        <a href="#" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="#"><img class="img-responsive" src="{{ asset('images/catering2.jpg') }}" alt=""></a>
                        <a href="#"><h5 class="oneline-ellipsis">Menu catring 2</h5></a>
                        <p class="text-grey">100 pax</p>
                        <p class="text-green">Now Only <span>Rp 4.000.000</span></p>
                        <a href="#" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="#"><img class="img-responsive" src="{{ asset('images/catering3.jpg') }}" alt=""></a>
                        <a href="#"><h5 class="oneline-ellipsis">Menu catring 3</h5></a>
                        <p class="text-grey">100 pax</p>
                        <p class="text-green">Now Only <span>Rp 1.900.000</span></p>
                        <a href="#" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="product">
                        <a href="#"><img class="img-responsive" src="{{ asset('images/catering4.jpg') }}" alt=""></a>
                        <a href="#"><h5 class="oneline-ellipsis">Menu catring 4</h5></a>
                        <p class="text-grey">100 pax</p>
                        <p class="text-green">Now Only <span>Rp 4.000.000</span></p>
                        <a href="#" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-dbbrush2">
    <div id="choosealacarte" class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h2 class="text-damion-curved">Custom Your Menu</h2>
                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit</p>
                <a href="catering-custom.html" class="btn btn-lg btn-flaregreen">CUSTOM MENU <span class="icon icon-food"></span></a>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
