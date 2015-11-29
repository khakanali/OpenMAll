@extends("common.default")

@section("content")

    <div id="main">
        <div class="container">
            <div class="main-container">
                <div class="banner-area">
                    <img src="{{ asset('images/img1.jpg') }}" alt="{{ asset('images/img1.jpg') }}">
                </div>
                <div class="row payment-area">
                    <div class="col-sm-6">
                        <div class="payment-options box">
                            <strong class="heading">Chose Payment Options</strong>
                            <form action="#" class="payment-form">
                                <fieldset>
                                    <div class="radiobtns clearfix">
                                        <div class="checkbox">
                                            <input type="radio" checked name="card" id="rad">
                                            <label for="rad">
                                                <span class="radlabel">Credit or Debit card</span>
                                                <span class="icon-holder">
                                                    <img src="{{ asset('images/img2.jpg') }}" alt="">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="radio"  name="card" id="rad2">
                                            <label for="rad2">
                                                <span class="radlabel">Credit or Debit card</span>
                                                <span class="icon-holder">
                                                    <img src="{{ asset('images/img3.jpg') }}" alt="">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="radio"  name="card" id="rad3">
                                            <label for="rad3">
                                                <span class="radlabel">Credit or Debit card</span>
                                                <span class="icon-holder">
                                                    <img src="{{ asset('images/img4.jpg') }}" alt="">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="clearfix">
                                            <label for="cn">Card Number</label>
                                            <span class="icon-holder"><img src="{{ asset('images/icon-card.jpg') }}" height="28" width="46" alt=""></span>
                                        </div>
                                        <input type="text" id="cn" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name on Card</label>
                                        <input id="name" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="ed">Expiry Date</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <input id="ed" placeholder="mm" type="text" class="form-control">
                                            </div>
                                            <div class="col-xs-6">
                                                <input placeholder="yy" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="medium">
                                            <input class="form-control" type="text">
                                        </div>
                                        <span class="cv">CVV/CVV</span>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="check">
                                            <label for="check">Do not save this card for future use</label>
                                        </div>
                                        <input type="submit" class="btn btn-green" value="Made Payment">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <p>By placing your order, you agree to OpenSupermall <a href=""  class="privacy_condtions_link">Privacy</a> and <a href="" class="privacy_condtions_link">conditions of use</a></p>
                    </div>
                    <div class="col-sm-6">
                        <div class=" box">
                            <strong class="heading">Shipping and Billing address <a href="#" class="edit">edit</a></strong>
                            <div class="shipping-addrss">
                                <strong class="name">Mr Jullan Helw</strong>
                                <address>S, Bayu Sager <br> WP Kauala Lumpur, Kauala Lumpur, 55100 </address>
                                <span class="tel">Mobile Number: +6012-2816 231</span>
                            </div>
                        </div>
                        <div class=" box">
                            <strong class="heading">Order Summary <span class="counter">(1 Items)</span></strong>
                            <table class="summarytable">
                                <thead>
                                <tr class="text-uppercase">
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Max Solo Bed</td>
                                    <td>01</td>
                                    <td>RM 790.00</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="deliveryinfo">
                                <strong class="title">Standard Delivery <a href="#" class="edit">Edit</a></strong>
                                <span class="timelimit">04 September 2015 -09 September 2015</span>
                            </div>
                        </div>
                        <span class="voucher">Do You have Voucher Codde? <a href="#" class="apply">Apply here</a></span>
                        <div class="box">
                            <ul class="priceinfo list-unstyled">
                                <li>
                                    <span class="title">Subtotal</span>
                                    <span class="amount">RM 790.00</span>
                                </li>
                                <li>
                                    <span class="title">Shipping surcharges</span>
                                    <span class="amount">RM 52.80</span>
                                </li>
                            </ul>
                            <div class="grand-total">
                                <div class="text-holder">
                                    <strong class="title">Total</strong>
                                    <span class="terms">(GST 6% included)</span>
                                </div>
                                <span class="final-amount">RM 842.80</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop