@extends('layouts.front')

@section('content')
<section class="page-bottompadd">
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-damion-curved">Login</h2>
            <div class="row box-green box-green-half gapless">
                <div class="col-sm-6 bg-green equal-height">
                    <h3 class="text-damion">Already Member</h3>
                    <form id="form-login" class="form-horizontal form-default" action="myacc-myprof.html">
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
                        <button type="submit" class="btn btn-default btn-yellowgrad">LOGIN</button>
                    </form>
                </div>
                <div class="col-sm-6 equal-height">
                    <h3 class="text-damion">Don't have an Account</h3>
                    <a href="register.html" class="btn btn-default btn-yellowgrad abscentercenter">REGISTER NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
