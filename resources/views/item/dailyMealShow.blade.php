@extends('layouts.front')

@section('content')
<section id="page-dmprod-det">
<div id="banner">
  <img class="img-responsive" src="{{ asset('images/banner2.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <ol class="breadcrumb">
                  <li><a href="{{ route('item.list') }}">Home</a></li>
                  <li><a href="{{ route('item.dailyMeal') }}">Daily Meal</a></li>
                  <li class="active">Beef Enoki Saus Balado</li>
              </ol>
              <nav aria-label="backtomenu">
                  <ul class="pager">
                      <li class="next"><a href="#" onclick="window.history.back();"><span aria-hidden="true">&larr;</span> Back to Menu</a></li>
                  </ul>
              </nav>
              <div class="row">
                  <div class="col-xs-2 col-sm-1 col-md-1">
                      <div class="slider-1slide-vertthumb">
                          <div>
                              <img class="img-responsive" src="{{ asset('images/prod-det.jpg') }}" alt="">
                          </div>
                          <div>
                              <img class="img-responsive" src="{{ asset('images/prod-det2.jpg') }}" alt="">
                          </div>
                          <div>
                              <img class="img-responsive" src="{{ asset('images/prod-det3.jpg') }}" alt="">
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-10 col-sm-11 col-md-6">
                      <div class="row">
                          <div class="col-sm-6 col-md-12">
                              <div class="slider-1slide-wthumb">
                                  <div>
                                      <a data-fancybox="img-prod" href="{{ asset('images/prod-det.jpg') }}">
                                          <img class="img-responsive" src="{{ asset('images/prod-det.jpg') }}" alt="">
                                          <span class="fa fa-arrows-alt"></span>
                                      </a>
                                  </div>
                                  <div>
                                      <a data-fancybox="img-prod" href="{{ asset('images/prod-det2.jpg') }}">
                                          <img class="img-responsive" src="{{ asset('images/prod-det2.jpg') }}" alt="">
                                          <span class="fa fa-arrows-alt"></span>
                                      </a>
                                  </div>
                                  <div>
                                      <a data-fancybox="img-prod" href="{{ asset('images/prod-det3.jpg') }}">
                                          <img class="img-responsive" src="{{ asset('images/prod-det3.jpg') }}" alt="">
                                          <span class="fa fa-arrows-alt"></span>
                                      </a>
                                  </div>
                              </div>
                              <ul class="list-inline tag-grey hidden-xs">
                                  <li><a href="#">Sunda</a></li>
                                  <li><a href="#">Balado</a></li>
                                  <li><a href="#">Saus</a></li>
                                  <li><a href="#">Beef</a></li>
                              </ul>
                          </div>
                          <div class="col-sm-6 col-md-12 hidden-xs">
                              <ul class="list-normal accordion-grey">
                                  <li>
                                      <a href="#pf-1" class="collapsed" data-toggle="collapse">NUTRITION INFO <span class="fa fa-angle-double-down"></span></a>
                                      <ul id="pf-1" class="list-columns collapse">
                                          <li>
                                              <div class="row">
                                                  <div class="col-sm-4 text"><img src="{{ asset('images/nutr-1.png') }}" alt=""> <p>Kalori</p></div>
                                                  <div class="col-sm-3"><p>1531.60Kkal</p></div>
                                                  <div class="col-sm-5 oneline-ellipsis"><p>equal with 3 glass milk</p></div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="row">
                                                  <div class="col-sm-4"><img src="{{ asset('images/nutr-2.png') }}" alt=""><p>Karbohidrat</p></div>
                                                  <div class="col-sm-3"><p>153Kkal</p></div>
                                                  <div class="col-sm-5 oneline-ellipsis"><p>equal with 3 potatoes</p></div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="row">
                                                  <div class="col-sm-4"><img src="{{ asset('images/nutr-3.png') }}" alt=""><p>Protein</p></div>
                                                  <div class="col-sm-3"><p>153Kkal</p></div>
                                                  <div class="col-sm-5 oneline-ellipsis"><p>equal with 3 eggs</p></div>
                                              </div>
                                          </li>
                                      </ul>
                                  </li>
                                  <li>
                                      <a href="#pf-2" class="collapsed" data-toggle="collapse">DAILY MENU <span class="fa fa-angle-double-down"></span></a>
                                      <ul id="pf-2" class="list-columns collapse">
                                          <li class="active">
                                              <a href="dm-proddet.html" class="row">
                                                  <div class="col-sm-4"><p>Monday</p></div>
                                                  <div class="col-sm-2"><p>12:30</p></div>
                                                  <div class="col-sm-6 oneline-ellipsis"><p>Beef Enoki Saus Balado</p></div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="dm-proddet.html" class="row">
                                                  <div class="col-sm-4"><p>Tuesday</p></div>
                                                  <div class="col-sm-2"><p>12:30</p></div>
                                                  <div class="col-sm-6 oneline-ellipsis"><p>Beef Enoki Saus Balado</p></div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="dm-proddet.html" class="row">
                                                  <div class="col-sm-4"><p>Wednesday</p></div>
                                                  <div class="col-sm-2"><p>12:30</p></div>
                                                  <div class="col-sm-6 oneline-ellipsis"><p>Beef Enoki Saus Balado</p></div>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 prod-desc">
                      <ul class="list-inline tag-grey visible-xs">
                          <li><a href="#">Sunda</a></li>
                          <li><a href="#">Balado</a></li>
                          <li><a href="#">Saus</a></li>
                          <li><a href="#">Beef</a></li>
                      </ul>
                      <ul class="list-normal accordion-grey visible-xs">
                          <li>
                              <a href="#pfc-1" class="collapsed" data-toggle="collapse">NUTRITION INFO <span class="fa fa-angle-double-down"></span></a>
                              <ul id="pfc-1" class="list-columns collapse">
                                  <li>
                                      <div class="row">
                                          <div class="col-sm-4 text"><img src="{{ asset('images/nutr-1.png') }}" alt=""> <p>Kalori</p></div>
                                          <div class="col-sm-3"><p>1531.60Kkal</p></div>
                                          <div class="col-sm-5 oneline-ellipsis"><p>equal with 3 glass milk</p></div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="row">
                                          <div class="col-sm-4"><img src="{{ asset('images/nutr-2.png') }}" alt=""><p>Karbohidrat</p></div>
                                          <div class="col-sm-3"><p>153Kkal</p></div>
                                          <div class="col-sm-5 oneline-ellipsis"><p>equal with 3 potatoes</p></div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="row">
                                          <div class="col-sm-4"><img src="{{ asset('images/nutr-3.png') }}" alt=""><p>Protein</p></div>
                                          <div class="col-sm-3"><p>153Kkal</p></div>
                                          <div class="col-sm-5 oneline-ellipsis"><p>equal with 3 eggs</p></div>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a href="#pfc-2" class="collapsed" data-toggle="collapse">DAILY MENU <span class="fa fa-angle-double-down"></span></a>
                              <ul id="pfc-2" class="list-columns collapse">
                                  <li class="active">
                                      <a href="dm-proddet.html" class="row">
                                          <div class="col-sm-4"><p>Monday</p></div>
                                          <div class="col-sm-2"><p>12:30</p></div>
                                          <div class="col-sm-6 oneline-ellipsis"><p>Beef Enoki Saus Balado</p></div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="dm-proddet.html" class="row">
                                          <div class="col-sm-4"><p>Tuesday</p></div>
                                          <div class="col-sm-2"><p>12:30</p></div>
                                          <div class="col-sm-6 oneline-ellipsis"><p>Beef Enoki Saus Balado</p></div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="dm-proddet.html" class="row">
                                          <div class="col-sm-4"><p>Wednesday</p></div>
                                          <div class="col-sm-2"><p>12:30</p></div>
                                          <div class="col-sm-6 oneline-ellipsis"><p>Beef Enoki Saus Balado</p></div>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                      <h1>Beef Enoki Saus Balado</h1>
                      <p>Grilled Rolled Beef with Enoki mushrooms and balado mayo dressing</p>
                      <ul class="list-inline list-flag">
                          <li>
                              <p class="bg-pgreen">New Product</p>
                          </li>
                          <li>
                              <p class="bg-pred">Best Seller</p>
                          </li>
                          <li>
                              <p class="bg-pyellow">Recom-<br>mended</p>
                          </li>
                      </ul>
                      <p class="text-grey text-linethrough">Rp 69.000</p>
                      <p class="text-green">Now Only <span>Rp 49.000</span></p>
                      <form id="form-proddet" class="form-horizontal form-default" action="cart.html">
                          <label for="deliverydate" class="control-label">DELIVERY & SCHEDULE DATE</label>
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="form-group form-group-lg">
                                      <div class="col-sm-12">
                                          <div class="input-group input-group-lg">
                                              <input id="deliverydate" class="form-control" type="text" name="deliverydate" placeholder="Date">
                                              <label for="deliverydate" class="input-group-addon"><span class="fa fa-calendar"></span></label>
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
                          <div class="form-group form-group-lg">
                              <label for="deliverydate" class="control-label col-sm-12">ADDITIONAL</label>
                              <div class="col-sm-12">
                                  <ul class="nav nav-tabs nav-tabs-pill" role="tablist">
                                      <li role="presentation" class="active"><a href="#condiments" aria-controls="condiments" role="tab" data-toggle="tab">Condiments</a></li>
                                      <li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Drinks</a></li>
                                      <li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Desserts</a></li>
                                  </ul>
                                  <div class="tab-content">
                                      <div role="tabpanel" class="tab-pane fade in active" id="condiments">
                                          <div class="slider-4slides-adds">
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des1" type="radio" name="dessert" value="">
                                                      <label for="des1"><img class="img-circle img-responsive" src="{{ asset('images/add3.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Matah</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des2" type="radio" name="dessert" value="">
                                                      <label for="des2"><img class="img-circle img-responsive" src="{{ asset('images/add2.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Terasi</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des3" type="radio" name="dessert" value="">
                                                      <label for="des3"><img class="img-circle img-responsive" src="{{ asset('images/add3.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Matah</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des4" type="radio" name="dessert" value="">
                                                      <label for="des4"><img class="img-circle img-responsive" src="{{ asset('images/add4.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Korek</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des5" type="radio" name="dessert" value="">
                                                      <label for="des5"><img class="img-circle img-responsive" src="{{ asset('images/add4.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Matah</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div role="tabpanel" class="tab-pane fade" id="drinks">
                                          <div class="slider-4slides-adds">
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des1" type="radio" name="dessert" value="">
                                                      <label for="des1"><img class="img-circle img-responsive" src="{{ asset('images/add3.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Matah</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des2" type="radio" name="dessert" value="">
                                                      <label for="des2"><img class="img-circle img-responsive" src="{{ asset('images/add2.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Terasi</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des3" type="radio" name="dessert" value="">
                                                      <label for="des3"><img class="img-circle img-responsive" src="{{ asset('images/add3.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Matah</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des4" type="radio" name="dessert" value="">
                                                      <label for="des4"><img class="img-circle img-responsive" src="{{ asset('images/add4.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Korek</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="text-center">
                                                  <div class="radio radio-img">
                                                      <input id="des5" type="radio" name="dessert" value="">
                                                      <label for="des5"><img class="img-circle img-responsive" src="{{ asset('images/add4.jpg') }}" alt=""><span class="fa fa-check-circle"></span></label>
                                                  </div>
                                                  <div class="text-left additional">
                                                      <h6>Sambal Matah</h6>
                                                      <ul class="list-normal">
                                                          <li>Rp 500 <span>(packet)</span></li>
                                                          <li>Rp 1000</li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div role="tabpanel" class="tab-pane fade" id="desserts">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group form-group-lg form-bggrey">
                              <label for="notes" class="control-label col-sm-12">ADDITIONAL NOTES</label>
                              <div class="col-sm-12">
                                  <textarea id="notes" class="form-control" rows="4" name="notes" placeholder="Additional Notes"></textarea>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-5 form-inline">
                                  <div class="form-group form-group-lg">
                                      <label for="qty" class="control-label">Qty</label>
                                      <select id="qty" class="selectpicker" name="qty" data-width="100px" data-style="btn-lg">
                                          <option value="lorem">1</option>
                                          <option value="lorem">2</option>
                                          <option value="lorem">3</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-sm-7">
                                  <button class="btn btn-lg btn-flare" type="submit">CHOOSE MENU <span class="icon icon-bowl"></span></button>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="col-xs-12 col-sm-12">
                      <h2 class="text-damion-curved">You May Also Like</h2>
                      <div class="row single-slidemob">
                          <div class="col-sm-3">
                              <div class="product">
                                  <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod1.jpg') }}" alt=""></a>
                                  <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Sate 4 Musim</h5></a>
                                  <p class="text-grey text-linethrough">Rp 69.000</p>
                                  <p class="text-green">Now Only <span>Rp 49.000</span></p>
                                  <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                              </div>
                          </div>
                          <div class="col-sm-3">
                              <div class="product">
                                  <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod2.jpg') }}" alt=""></a>
                                  <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Lidah Sapi</h5></a>
                                  <p class="text-grey text-linethrough">Rp 69.000</p>
                                  <p class="text-green">Now Only <span>Rp 49.000</span></p>
                                  <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                              </div>
                          </div>
                          <div class="col-sm-3">
                              <div class="product">
                                  <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod3.jpg') }}" alt=""></a>
                                  <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Tunjang Rice Bowl</h5></a>
                                  <p class="text-grey text-linethrough">Rp 69.000</p>
                                  <p class="text-green">Now Only <span>Rp 49.000</span></p>
                                  <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                              </div>
                          </div>
                          <div class="col-sm-3">
                              <div class="product">
                                  <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod4.jpg') }}" alt=""></a>
                                  <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Ramen Cabai Hijau</h5></a>
                                  <p class="text-grey text-linethrough">Rp 69.000</p>
                                  <p class="text-green">Now Only <span>Rp 49.000</span></p>
                                  <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12">
                      <h2 class="text-damion-curved">Recently Viewed</h2>
                      <div class="row single-slidemob">
                          <div class="col-sm-3">
                              <div class="product">
                                  <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod1.jpg') }}" alt=""></a>
                                  <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Sate 4 Musim</h5></a>
                                  <p class="text-grey text-linethrough">Rp 69.000</p>
                                  <p class="text-green">Now Only <span>Rp 49.000</span></p>
                                  <a href="dm-proddet.html" class="btn btn-lg btn-flare">CHOOSE MENU <span class="icon icon-bowl"></span></a>
                              </div>
                          </div>
                          <div class="col-sm-3">
                              <div class="product">
                                  <a href="dm-proddet.html"><img class="img-responsive" src="{{ asset('images/prod2.jpg') }}" alt=""></a>
                                  <a href="dm-proddet.html"><h5 class="oneline-ellipsis">Lidah Sapi</h5></a>
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
  </div>
</div>
</section>
@endsection
