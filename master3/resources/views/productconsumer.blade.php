@extends("common.default")

@section("content")

    <section class="">
        <div class="container"><!--Begin main cotainer-->
            <div class="row">
                <div data-spy="scroll" style="display: none;" class="static-tab">
                    <div class="text-center tab-arrow">
                        <span class="fa fa-sort"></span>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active floor-navigation"><a href="#pinformation">Information</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#delivery">Delivery</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#product">Product</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#pspecification">Specification</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#seller">Seller</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#policy">Policy</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#return">Return</a></li>
                    </ul>
                </div>
                <div class="col-sm-11 col-sm-offset-1">
                    <img src="images/banner.png" title="banner" class="img-responsive banner">
                    <hr>

                    <form class="form-horizontal">
                        <div id="pinformation" class="row">
                            <div class="col-sm-12"><h1>Product Information</h1></div>
                            <div class="col-sm-3">
                            <div class="thumbnail">
                                <img src="images/product.png" title="product-image" class="img-responsive">
                            </div>
                            </div>

                            <div class="col-sm-9">
                               <dl class="dl-horizontal text-muted">
                                    <dt>Name</dt><dd>Shell Hellx HX5 15W-40</dd>
                                    <dt>Brand:</dt><dd>Shell</dd>
                                    <dt>Category:</dt><dd>Automotive</dd>
                                    <dt>Sub Category</dt><dd>Engine Oil</dd>
                                    <dt>O-Shop</dt><dd>Ms One Sdn Bhd</dd>
                                    <dt>Short Description</dt><dd><p>Designed to meet challanges</p>
                                    <p>Formulated with cleansing technology<br>
                                    -upto 23% more effective at removing sludge from dirty engins than a normal mineral oil</p>
                                     <p>Good oxidation stability<br>
                                    -Resist oil degradation throughout the recommended oil drain period</p>
                                    </dd>
                                </dl>
                                <div class="row">
                                <div class="col-sm-4 margin-top">
                                    <table class="table noborder">
                                        <tr><th>Amount</th><td>MYR</td><td>450.00</td></tr>
                                        <tr><th>Delivery</th><td>MYR</td><td>5.00</td></tr>
                                        <tr><td colspan="3"><hr></td></tr>
                                        <tr><th>&nbsp</th><td>MYR</td><td>450.00</td></tr>
                                    </table>
                                </div>
                                <div class="col-sm-3 col-sm-offset-5">
                                    <ul class="list-inline pull-right">
                                        <li class="btn btn-lg btn-green"><i class="fa fa-lg fa-plus"></i></li>
                                        <li class="btn btn-lg btn-pink"><i class="fa fa-lg fa-heart"></i></li>
                                        <li class="btn btn-lg btn-darkgreen"><i class="fa fa-lg fa-shopping-cart"></i></li>
                                    </ul>
                                </div>
                            </div>
                            </div>

                            <div class="clearfix"></div>

                        </div>
                        <hr>
                        <div id="delivery">

                            <div class="col-sm-2">
                                <label class="">Delivery Pricing</label>
                            </div>


                            <div class="col-sm-4">

                                <table class="table dpricing noborder">
                                    <tr><th>World Wide</th><td>MYR 15</td></tr>
                                    <tr class="active"><th>West Malaysia</th><td>MYR 5</td></tr>
                                    <tr><th>Sabah/Labuan</th><td>MYR 8</td></tr>
                                    <tr><th>Sarawak</th><td>MYR 8</td></tr>
                                </table>

                            </div>
                            <div class="col-sm-3 col-sm-offset-3">
                                <h3>Delivery Coverage</h3>
                                <table class="table dcoverage">
                                    <tr><th>Country</th><td>Malaysia</td></tr>
                                    <tr><th>State</th><td>Wilayah Persekutuan</td></tr>
                                    <tr><th>City</th><td>Kuala Lumpur</td></tr>
                                </table>

                            </div>
                            <div class="clearfix"> </div>
                            <hr>
                         <div class="col-sm-12">
                                <h1>Retail</h1>
                            </div>


                            <div class="col-sm-5 retail">

                                <table class=" table">
                                    <tr><th>Retail Price</th><td>MYR 60 <strong class="pull-right text-danger">Save 15%</strong> </td></tr>
                                    <tr><th>Original Price</th><td><span class="strikethrough">MYR 70 </span> </td></tr>
                                    <tr><th>Available</th><td>1500 </td></tr>
                                    <tr><th>Quantity</th><td>

                                          <div class="input-group col-sm-6">
                                          <span class="input-group-btn">
                                              <button type="button" class="btn btn-green btn-number" data-type="plus" data-field="quant[2]">
                                                  <span class="glyphicon glyphicon-plus"></span>
                                              </button>
                                          </span>
                                          <input type="text" name="quant[2]" class="form-control input-number" value="10" min="1" max="100">
                                          <span class="input-group-btn">
                                              <button type="button" class="btn btn-green btn-number"  data-type="minus" data-field="quant[2]">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                              </button>
                                          </span>
                                          </div>

                                        </td></tr>
                                </table>

                            </div>

                            <div class="clearfix"> </div>
                        </div>
                        <hr>
                        <div id="product">
                            <div class="col-xs-12">
                                <a class="btn btn-green col-sm-3" href="#"> Product Details</a>
                            </div>
                            <div class="col-xs-12">
                                <h4 class="text-info"><a> Health, Safety & Environment</a></h4>
<p> Health & Safety </p>
                                <img src="images/ProductpageConsumer.png" title="banner" class="img-responsive banner">
                                <p>A merchant consultant helps merchants to get on board our system as quickly as possible, from the aspect of products registration all the way to pricing. Our Knowledgeable merchant consultants will provide friendly and dependable service each step of the way. </p>
                                <p>A merchant consultant helps merchants to get on board our system as quickly as possible, from the aspect of products registration all the way to pricing. Our Knowledgeable merchant consultants will provide friendly and dependable service each step of the way. </p>

                            </div>

                        </div>
                        <div id="pspecification">
                            <div class="col-xs-12">
                                <h1>Product Specification</h1>
                            </div>

                            <div class="col-sm-6 col-sm-offset-1 col-xs-12 table-responsive">
                                <table class="table pspecs">
                                    <tr><td>SKU</td><td>10000021494</td></tr>
                                    <tr><td>Colour</td><td>Yellow</td></tr>
                                    <tr><td>Model</td><td>APISN: ACELA A3/B3</td></tr>
                                    <tr><td>Size(L x W x H)</td><td>30cm x 23.6cm x 12.6 cm</td></tr>
                                    <tr><td>Weight</td><td>4.3kg</td></tr>
                                    <tr><td>Warranty Period</td><td>25 september 2018</td></tr>
                                    <tr><td>Warranty Type ++</td><td></td></tr>
                                </table>
                            </div>

                            </div>
                        <div id="seller">
                            <div class="col-xs-12">
                                <h1>Seller Information</h1>
                            </div>

                            <div class="col-sm-6 col-sm-offset-1 col-xs-12 table-responsive">
                                <table class="table pseller">
                                    <tr><td>Seller Name</td><td>MS ONE SDN BHD</td></tr>
                                    <tr><td>Ship form Address</td><td>C15-02 jalan PJU 8/8, Damansara Perdana, 47820 Petaling Jaya, Selangor</td></tr>
                                    <tr><td>Return / Exchange Address:</td><td>C15-02 jalan PJU 8/8, Damansara Perdana, 47820 Petaling Jaya, Selangor</td></tr>
                                </table>
                            </div>

                            </div>
                        <div id="policy">
                            <div class="col-xs-12">
                                <h1>Seller Policy</h1>
                            </div>

                            <div class="col-xs-12">
                                <a class="btn btn-green col-sm-3" href="#"> Product Details</a>
                            </div>

                            <div class="col-xs-12">
                                <p>You are only entitled to a refund if you return it within three or four weeks, other wise you can get a repair or replacement</p>
                                <p>Must display on receipt or signs in store and online</p>

                            </div>
                            </div>
                        <div id="return">
                            <div class="col-xs-12">

                                <h1>OpenSupermall</h1>
                                <h3>Notice on Return</h3>


                            </div>
                            <div class="col-xs-12">
                                <a class="btn btn-green col-sm-3" href="#"> Return / Exchange Policy</a>

                            </div>
                            <div class="col-xs-12">
                                <div class="thumbnail">
                                    <p>You are only entitled to a refund if you return it within three or four weeks, other wise you can get a repair or replacement. You are only entitled to a refund if you return it within three or four weeks, other wise you can get a repair or replacement. You are only entitled to a refund if you return it within three or four weeks, other wise you can get a repair or replacement</p>
                                    <hr>
                                    <div class="row">
                                    <div class="col-sm-4">
                                        <h3 class="page-header">Cancellation</h3>
                                        <ol>
                                            <li>Request for cancellation can be made after payment for the product is completed.</li>
                                            <li>Request for cancellation will only be approved if the product has not been shipped by the Merchant and the Buyer shall be entitled to refund</li>
                                            <li>Request for cancellation will be rejected in the event that the Merchant has shipped the product.</li>
                                        </ol>

                                    </div>
                                    <div class="col-sm-4">
                                        <h3 class="page-header">Return &amp; Exchange</h3>
                                        <ol>
                                            <li>Request for return of the product purchased can be upon the product is delivered.</li>
                                            <li>In the event that the product delivered is flawed, the Buyer shall return the product to the Merchant at the Buyer's own cost.</li>
                                            <li>Upon receiving the Merchant's confirmation on the approvalfor the request for return, payment shall than be refunded to the Buyer.</li>
                                            <li>In the event that wrong product is delivered, the Buyer may return the wrong product to Merchant at the Buyer's own cost and upon receiving the Merchant's confirmation and approval for the request, a new product shall be re-dilivered to the Buyer.</li>
                                        </ol>

                                    </div>
                                    <div class="col-sm-4">
                                        <h3 class="page-header">Terms &amp; Conditions</h3>

                                        <ol>
                                            <li>Request for return and/or refund shall be made within 7 days from the date of the delivery of the product</li>
                                            <li>The Buyer shall not be entitled to refund and/or exchange if:
                                                <ol>
                                                    <li>The product requested for refund and/or exchange is used, destroyed and/or damaged.</li>
                                                    <li>The tag attached to the product is removed and/or tempered with.</li>
                                                    <li>The seal and/or package of the product is removed and/or opened.</li>
                                                    <li>The material(s) of the package product is lost.</li>
                                                    <li>The components of the product including product's accessory and/or free gifts which comes with the products have been  used, destroyed, damaged and/or lost.</li>
                                                    <li>The product value is decreased and/or damaged due to, including but not limited to, any reason stated in (a) to (c) stated above and/or due to the delay by the Buyer in returning the product.</li>
                                                    <li>The product is custom made and/or is customized product.</li>
                                                    <li>The proof of purchase of product is not provided by the Buyer.</li>
                                                    <li>The Buyer failed to follow guidelines, manuals, instructions and/or recommendations provided by the products and/or the Vendor Merchant. </li>
                                                    <li>The product is of e-voucher type of product which is sent to the Buyers email directly and immidiately. It is the buyer own responsibility to ensure the email address inserted and key is correct and accurate. OR</li>
                                                    <li>The product is of credit top-up type of product including but not limited to prepaid mobile air time, prepaid internet services, prepaid online content which is sent to Buyer's account direclty and immidiately. It is Buyer's own responsibility to ensure the account number(such as mobile telephone number, prepaid internet account number) inserted the key in is correct and accurate.</li>
                                                </ol>
                                            </li>
                                            <li>All shipping cost and expenses paid are non-refundable and the Buyer shall bear for all the cost for the return and/or exchange of the product.</li>
                                            <li>In the event of any refund and/or return is approved it is subject to deduction of shipping costs, taxes and/or any changes impossed by the online payment gateway and/or financial instructions.</li>
                                        </ol>

                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                                </div>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div><!--End main cotainer-->
    </section>
@stop