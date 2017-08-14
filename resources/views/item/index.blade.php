@extends('layouts.front')

@section('content')
<div class="modal fade" id="modal-nopadd" tabindex="-1" role="dialog" aria-labelledby="modalnopadd">
<div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <img class="img-responsive center-block" src="{{ asset('images/popuppromo.jpg') }}" alt="">
      </div>
  </div>
</div>
</div>
<section>
<div class="slider-1slide">
  <div>
      <div class="overlay-text">
          <img class="img-responsive" src="{{ asset('images/home-slide1.jpg') }}" alt="">
          <a href="dm-prodlist.html" class="btn btn-lg btn-flare overlay">SEE ALL MENU</a>
      </div>
  </div>
  <div>
      <div class="overlay-text">
          <img class="img-responsive" src="{{ asset('images/home-slide1.jpg') }}" alt="">
          <a href="dm-prodlist.html" class="btn btn-lg btn-flare overlay">SEE ALL MENU</a>
      </div>
  </div>
  <div>
      <div class="overlay-text">
          <img class="img-responsive" src="{{ asset('images/home-slide1.jpg') }}" alt="">
          <a href="dm-prodlist.html" class="btn btn-lg btn-flare overlay">SEE ALL MENU</a>
      </div>
  </div>
</div>
<div class="bg-body-brushup">
  <div class="bg-dbbrush1">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div id="howtoorder">
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-12">
                                  <h2 class="text-damion-curved text-damion-msmlg">Lorem Ipsum</h2>
                                  <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit</p>
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <a href="home.html" class="thumb-damion text-center">
                                              <img class="img-responsive" src="{{ asset('images/icon-trilogreg.png') }}" alt="">
                                              <h3 class="text-damion">Daily meal</h3>
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                          </a>
                                      </div>
                                      <div class="col-sm-4 thumb-damion text-center">
                                          <a href="catering.html" class="thumb-damion text-center">
                                              <img class="img-responsive" src="{{ asset('images/icon-trimenulist.png') }}" alt="">
                                              <h3 class="text-damion">Catering</h3>
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                          </a>
                                      </div>
                                      <div class="col-sm-4 thumb-damion text-center">
                                          <a href="snackbox.html" class="thumb-damion text-center">
                                              <img class="img-responsive" src="{{ asset('images/icon-triplate.png') }}" alt="">
                                              <h3 class="text-damion">Snack box</h3>
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                          </a>
                                      </div>
                                  </div>
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
