@extends('layouts.front')

@section('content')
<section class="page-bottompadd">
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner8.jpg') }}"" alt="">
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
                    <li role="presentation" class="active"><a href="#tab1" aria-controls="dailymeal" role="tab" data-toggle="tab">Daily Meal</a></li>
                    <li role="presentation"><a href="#tab2" aria-controls="catering" role="tab" data-toggle="tab">Catering</a></li>
                </ul>
                <div class="tab-content content-article">
                    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                        <ol class="list-bullet-green">
                            <li>
                                <h5>Sign In/ Sign up</h5>
                                <p>a. Sign in if you are already registered in Bespoka.com <br>b. If you are new to Bespoka, please Register to create your account</p>
                            </li>
                            <li>
                                <h5>Schedule Appointment</h5>
                                <p>You can either fill in our “schedule fitting” first to make an appointment with our outfitters to have your body measurement taken or you can select the product you wish to purchase first and our outfitters will immediately set up a meeting with you.</p>
                            </li>
                            <li>
                                <h5>Select Product</h5>
                                <p>Browse and select your desired product from our website</p>
                            </li>
                            <li>
                                <h5>Select your customization option</h5>
                                <ol type="a">
                                    <li>Re-check the customizations you’ve selected</li>
                                    <li>Select quantity</li>
                                    <li>Click ADD TO CART</li>
                                </ol>
                            </li>
                            <li>
                                <h5>Add to Cart</h5>
                                <ol type="a">
                                    <li>Re-check the customizations you’ve selected</li>
                                    <li>Select quantity</li>
                                    <li>Click ADD TO CART</li>
                                </ol>
                            </li>
                            <li>
                                <h5>My Cart</h5>
                                <ol type="a">
                                    <li>Fill in your shipping address</li>
                                    <li>Select quantity</li>
                                    <li>Click ADD TO CART</li>
                                </ol>
                            </li>
                            <li>
                                <h5>Confirm payment</h5>
                                <ol type="a">
                                    <li>Take note of the amount of your total transaction</li>
                                    <li>Make payment to Bespoka account: BCA 6040395308 (Atas Nama Marline) Cab Alam Sutera</li>
                                    <li>Confirm your payment on at your Order History page</li>
                                </ol>
                            </li>
                            <li>
                                <h5>IMPORTANT NOTICE</h5>
                                <p>Transfer payment for your purchases to our bank account. Products will be sold on a first-pay first-serve basis and your order will be automatically cancelled if payment is not made within 24 hours.</p>
                            </li>
                        </ol>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in active" id="tab2">
                        <ol class=" list-bullet-green">
                            <li>
                                <h5>Sign In/ Sign up</h5>
                                <p>a. Sign in if you are already registered in Bespoka.com <br>b. If you are new to Bespoka, please Register to create your account</p>
                            </li>
                            <li>
                                <h5>Schedule Appointment</h5>
                                <p>You can either fill in our “schedule fitting” first to make an appointment with our outfitters to have your body measurement taken or you can select the product you wish to purchase first and our outfitters will immediately set up a meeting with you.</p>
                            </li>
                            <li>
                                <h5>Select Product</h5>
                                <p>Browse and select your desired product from our website</p>
                            </li>
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
