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
                    <li><a href="home.html">Home</a></li>
                    <li class="active">FAQ</li>
                </ol>
                <h2 class="text-damion-curved">FAQ</h2>
                <div class="row ">
                    <div class="col-sm-3">
                        <h3 class="text-damion">Category</h3>
                        <ul class="list-normal list-sidenav">
                            <li class="active"><a href="#">General Questions</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Ordering</a></li>
                            <li><a href="#">Returns & Exchanges</a></li>
                            <li><a href="#">Delivery & Shipping</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <h3 class="text-damion text-yellow">General Questions</h3>
                        <div class="content-article">
                            <ul class="list-normal list-bullet-dbcheck">
                                <li>
                                    <h5>How to pay via DOKU-Bank Transfer.</h5>
                                    <p>For domestic orders, if you chose to pay via DOKU Bank Transfer, you will receive an email containing the steps for completing your order via bank transfer. You will receive the total amount, along with your unique virtual account code. Please click here to learn how to pay.</p>
                                    <p>We have also provided a step by step guide for payment through m-BCA. Please click <a href="#">here</a></p>
                                </li>
                                <li>
                                    <h5>Which designs are customizable ?</h5>
                                    <p>Almost all of our designs are customizable with your own name/text you desire. To view our full customizable collections click here.</p>
                                </li>
                                <li>
                                    <h5>I’ve ordered few cases but I can’t find all of them. Where are the missing cases?</h5>
                                    <p>Please be sure to open up all the boxes first. We normally packed 2 cases in 1 box unless otherwise requested. If you have checked and the case is still not there, please contact us.</p>
                                </li>
                                <li>
                                    <h5>I want to join the Lady H Artist Collection to sell my design. Who do I contact?</h5>
                                    <p>We'd love to have you on board! Email us at hello@ladyh.com. Include your portfolio link and your social media accounts.</p>
                                </li>
                                <li>
                                    <h5>What is a partner/reseller?</h5>
                                    <p>We have created a reseller program for many small business shop owners who would like to resell our items; mainly through Instagram/Facebook! We have specific terms and conditions for our partners/resellers, but if you already have an existing online shop on Instagram/Facebook, sign up with us today and we'll verify your shop!</p>
                                </li>
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
