@extends('layouts.front')

@section('content')
<section class="page-bottompadd">
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-damion-curved text-damion-msmlg">Payment Confirmation</h2>
            <p class="text-center">Please fill payment confirmation form below</p>
            <form id="form-paymentconf" class="form-horizontal form-default form-bggrey" action="#">
                <div class="row center-gap">
                    <div class="col-sm-6">
                        <h3 class="text-damion">Personal Details</h3>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <input class="form-control" type="text" name="orderid" placeholder="Order ID">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 has-feedback has-success">
                                <input class="form-control" type="text" name="email" placeholder="Email address">
                                <span class="fa fa-check form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="sendername" placeholder="Sender name">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="mobile" placeholder="mobile">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="text-damion">Payment Details</h3>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="totalpay" placeholder="Total Payment">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group form-group-lg">
                                    <div class="col-sm-12">
                                        <select class="selectpicker" title="Date" name="date" data-width="100%" data-style="btn-lg">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group form-group-lg">
                                    <div class="col-sm-12">
                                        <select class="selectpicker" title="Month" name="month" data-width="100%" data-style="btn-lg">
                                            <option value="lorem">Lorem</option>
                                            <option value="ipsum">Ipsum</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group form-group-lg">
                                    <div class="col-sm-12 frequired">
                                        <select class="selectpicker" title="Year" name="year" data-width="100%" data-style="btn-lg">
                                            <option value="lorem">Lorem</option>
                                            <option value="ipsum">Ipsum</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="accnumber" placeholder="Account number">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <input type="text" class="form-control" name="accholder" placeholder="Account holder">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <input type="text" class="form-control" name="bank" placeholder="Your bank">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <textarea class="form-control" name="description" rows="6" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group form-group-lg rcaptch-left">
                            <div class="col-sm-12">
                                <img class="img-responsive" src="{{ asset('images/imnotrobot.jpg') }}" alt="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-yellowgrad">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
@endsection
