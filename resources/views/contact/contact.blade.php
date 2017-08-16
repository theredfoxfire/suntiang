@extends('layouts.front')

@section('content')
<section id="page-contact">
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner9.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="home.html">Home</a></li>
                <li class="active">Contact us</li>
            </ol>
            <h2 class="text-damion-curved">Contact Us</h2>
            <div class="row center-gap">
                <div class="col-sm-6">
                    <h3 class="text-damion">Get in touch</h3>
                    <form id="form-contact" class="form-horizontal form-default form-bggrey" action="#">
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="fullname" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-lg btn-yellowgrad">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h3 class="text-damion">Find Us</h3>
                    <div class="media-icon">
                        <div class="media-left">
                            <img class="media-object" src="{{ asset('images/icon-map-marker.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <address>
                                <p>Grand Indonesia<br>Level 3A, West Mall<br><a href="tel:123580448">Ph (021) 23580448</a></p>
                            </address>
                        </div>
                    </div>
                    <div class="media-icon">
                        <div class="media-left">
                            <img class="media-object" src="{{ asset('images/icon-map-marker.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <address>
                                <p>Setiabudi One<br>Ground Floor<br><a href="tel:123580448">Ph (021) 23580448</a></p>
                            </address>
                        </div>
                    </div>
                    <div class="media-icon">
                        <div class="media-left">
                            <img class="media-object" src="{{ asset('images/icon-map-marker.png') }}" alt="">
                        </div>
                        <div class="media-body">
                            <address>
                                <p>Suntiang Catering<br><a href="tel:123580448">Ph (021) 23580448</a> / <a href="tel:123580448">Ph (021) 23580448</a></p>
                            </address>
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
