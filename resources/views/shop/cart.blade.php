@extends('layouts.front')

@section('content')
<section id="page-cart">
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-damion-curved">Your Cart</h2>
            <nav aria-label="backtomenu">
                <ul class="pager">
                    <li class="next"><a href="dm-prodlist.html"><span aria-hidden="true">&larr;</span> Back to Menu</a></li>
                </ul>
            </nav>
            <form id="form-cart" class="form-horizontal form-default" action="checkout.html">
                <table class="table table-default">
                    <thead>
                        <tr>
                            <th>Cart Items</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Kalori</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media media-thumb">
                                    <div class="media-left">
                                        <img class="media-object" src="images/prod1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h5>SATE 4 musim</h5>
                                        <p class="text-grey">Add. Sambal Korek</p>
                                        <p class="text-grey">Delivery 1 week 4-10 March 2017</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>Rp 119.000</p>
                            </td>
                            <td>
                                <div class="form-group-lg">
                                    <select class="selectpicker" name="qty" data-width="100px" data-style="btn-lg">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <p>1531.60Kkal</p>
                            </td>
                            <td>
                                <p>Rp 119.000</p>
                            </td>
                            <td>
                                <a href="#" class="text-danger"><span class="fa fa-times"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media media-thumb">
                                    <div class="media-left">
                                        <img class="media-object" src="images/prod2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h5>Lidah Sapi</h5>
                                        <p class="text-grey">Add. Sambal Korek</p>
                                        <p class="text-grey">Delivery 1, 4, 8 March 2017</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>Rp 119.000</p>
                            </td>
                            <td>
                                <div class="form-group-lg">
                                    <select class="selectpicker" name="qty" data-width="100px" data-style="btn-lg">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <p>1531.60Kkal</p>
                            </td>
                            <td>
                                <p>Rp 119.000</p>
                            </td>
                            <td>
                                <a href="#" class="text-danger"><span class="fa fa-times"></span></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td rowspan="4" colspan="2">
                                <ul class="list-normal accordion-grey">
                                    <li>
                                        <a href="#pf1" class="" data-toggle="collapse">NUTRITION INFO</a>
                                        <ul id="pf1" class="collapse in list-columns">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-4 text"><img src="images/nutr-1.png" alt=""> <p>Kalori Total</p></div>
                                                    <div class="col-sm-12 col-md-3"><p>1531.60Kkal</p></div>
                                                    <div class="col-sm-12 col-md-5 oneline-ellipsis"><p>equal with 3 glass milk</p></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <th colspan="2">
                                <p>Sub Total</p>
                            </th>
                            <td colspan="2">
                                <p>Rp 328.000</p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <p>Transport & Service</p>
                            </th>
                            <td colspan="2">
                                <p>Rp -</p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <p>Input your coupon code</p>
                            </th>
                            <td colspan="2">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="coupon">
                                    <span class="input-group-btn">
                                        <a class="btn btn-default"><span class="fa fa-refresh"></span></a>
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-10">
                                        <p class="text-orange">XA124 Discount 10%</p>
                                        <p>Rp 328.000</p>
                                    </div>
                                    <div class="col-xs-2">
                                        <a href="#" class="text-danger"><span class="fa fa-times"></span></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <p>Total</p>
                            </th>
                            <td colspan="2">
                                <p>Rp 328.000</p>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <ul class="list-inline text-right">
                    <li><a href="dm-prodlist.html" class="btn btn-lg btn-yellowgrad">ADD MENU</a></li>
                    <li><button type="submit" class="btn btn-lg btn-yellowgrad">PROCEED TO CHECKOUT</button></li>
                </ul>
            </form>
        </div>
    </div>
</div>
</div>
</section>
@endsection
