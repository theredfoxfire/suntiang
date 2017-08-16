@extends('layouts.front')

@section('content')
<section class="page-bottompadd">
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-damion-curved text-damion-msmlg">Registration</h2>
            <p class="text-center">Please fill registration form below</p>
            <form id="form-register" class="form-horizontal form-default form-bggrey" action="#">
                <div class="row center-gap">
                    <div class="col-sm-6">
                        <h3 class="text-damion">Personal Details</h3>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <input class="form-control" type="text" name="fullname" placeholder="Full name">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 has-feedback has-success frequired">
                                <input class="form-control" type="text" name="email" placeholder="Email address">
                                <span class="fa fa-check form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <input type="password" class="form-control" name="confpass" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <select class="selectpicker" title="Gender" name="gender" data-width="100%" data-style="btn-lg">
                                    <option value="lorem">Lorem</option>
                                    <option value="ipsum">Ipsum</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <input class="form-control" type="text" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <div class="input-group input-group-lg">
                                    <input id="birth" class="form-control" type="text" name="birth" placeholder="Birth">
                                    <label for="birth" class="input-group-addon"><span class="fa fa-calendar"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="text-damion">Address</h3>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <select class="selectpicker" title="Province" name="province" data-width="100%" data-style="btn-lg">
                                    <option value="lorem">Lorem</option>
                                    <option value="ipsum">Ipsum</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <select class="selectpicker" title="City" name="city" data-width="100%" data-style="btn-lg">
                                    <option value="lorem">Lorem</option>
                                    <option value="ipsum">Ipsum</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12 frequired">
                                <select class="selectpicker" title="District" name="district" data-width="100%" data-style="btn-lg">
                                    <option value="lorem">Lorem</option>
                                    <option value="ipsum">Ipsum</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="postalcode" placeholder="Postal code">
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-12">
                                <textarea class="form-control" name="detail" rows="6" placeholder="Detail"></textarea>
                            </div>
                        </div>
                        <div class="form-group form-group-lg rcaptch-right">
                            <div class="col-sm-12">
                                <img class="img-responsive" src="images/imnotrobot.jpg" alt="">
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-default btn-yellowgrad">REGISTER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
@endsection
