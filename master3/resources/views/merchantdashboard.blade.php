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
                        <li role="presentation" class="active floor-navigation"><a href="#dashboard">Dashboard</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#autolink">AutoLink</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#auctions">Auctions</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#loyalty">Loyalty</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#sales">Sales</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#inventory">Inventory</a></li>
                    </ul>
                </div>
                <div class="col-sm-11 col-sm-offset-1">
                    <img src="images/banner.png" title="banner" class="img-responsive banner">
                    <hr>

                    <form class="form-horizontal">
                        <div id="dashboard" class="row">

                            <div class="col-sm-12"><h1>MERCHANT DASHBOARD</h1></div>
                            <div class="table-responsive col-sm-12 ">
                                <table class="table text-muted ">
                                    <tr class="bg-black">
                                        <th colspan="11">Product Details</th>
                                    </tr>
                                    <tr class="bg-black">
                                        <th>No</th>
                                        <th>Order ID</th>
                                        <th>Product ID</th>
                                        <th>Order Recieved</th>
                                        <th>Order Executed</th>
                                        <th>SKU</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>User ID(Buyer)</th>
                                        <th>Source</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>ORDER0156</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>5</td>
                                        <td>MAX Sofa Bed-Blue with 10% Coupon</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>B096</td>
                                        <td>Furniture</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>ORDER0156</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>5</td>
                                        <td>MAX Sofa Bed-Blue with 10% Coupon</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>B096</td>
                                        <td>Furniture</td>
                                    </tr>

                                </table>

                            </div>

                            <div class="table-responsive col-sm-5 ">
                                <table class="table text-muted ">
                                    <tr class="bg-move">
                                        <th colspan="10">Shipping Details</th>
                                    </tr>
                                    <tr class="bg-move">
                                        <th>No</th>
                                        <th>Order ID</th>
                                        <th>Shipping ID</th>
                                        <th>Company</th>
                                        <th>Date since order</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>ORDER0156</td>
                                        <td>P00514</td>
                                        <td>DHL</td>
                                        <td>30 June 2015, 15.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>ORDER0156</td>
                                        <td>P00514</td>
                                        <td>DHL</td>
                                        <td>30 June 2015, 15.00</td>
                                    </tr>

                                </table>

                            </div>


                            <div class="table-responsive col-sm-7 ">
                                <table class="table text-muted ">
                                    <tr class="bg-info">
                                        <th colspan="10">Product Payment Details</th>
                                    </tr>
                                    <tr class="bg-info">
                                        <th>No</th>
                                        <th>Order ID</th>
                                        <th>Receivable</th>
                                        <th>Commision</th>
                                        <th>%</th>
                                        <th>Day since Consignment</th>
                                        <th>Note</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>5</td>
                                        <td>MAX Sofa Bed-Blue with 10% Coupon</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>5</td>
                                        <td>MAX Sofa Bed-Blue with 10% Coupon</td>
                                        <td>1</td>
                                    </tr>
                                </table>

                            </div>
                           <div class="clearfix"> </div>

                            <div class="table-responsive col-sm-12 ">
                                <table class="table text-muted ">
                                    <tr class="bg-success">
                                        <th colspan="11">Coupon Details</th>
                                    </tr>
                                    <tr class="bg-success">
                                        <th>No</th>
                                        <th>Order ID</th>
                                        <th>Product ID</th>
                                        <th>Order Recieved</th>
                                        <th>Expiry Date</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>User ID(Buyer)</th>
                                        <th>Source</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>ORDER0156</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>5</td>
                                        <td>MAX Sofa Bed-Blue with 10% Coupon</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>B096</td>
                                        <td>Furniture</td>
                                    </tr>

                                </table>

                            </div>


                            <div class="table-responsive col-sm-12 ">
                                <table class="table text-muted ">
                                    <tr class="bg-success">
                                        <th colspan="10">Coupon Payment Details</th>
                                    </tr>
                                    <tr class="bg-success">
                                        <th>No</th>
                                        <th>Order ID</th>
                                        <th>Product ID</th>
                                        <th>Recievable</th>
                                        <th>Commision</th>
                                        <th>%</th>
                                        <th>Days since Consignment</th>
                                        <th>Note</th>
                                    </tr>
                                    <tr>
                                        <td>SP0140</td>
                                        <td>DHL Logistic</td>
                                        <td>Pending, order 30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>SP0140</td>
                                        <td>DHL Logistic</td>
                                        <td>Pending, order 30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                    </tr>

                                </table>

                            </div>

                            <div class="table-responsive col-sm-12 ">
                                <table class="table text-muted ">
                                    <tr class="bg-pink">
                                        <th colspan="14">Open Wish Database</th>
                                    </tr>
                                    <tr class="bg-pink">
                                        <th colspan="8">Product Details</th>
                                        <th colspan="2">Time Detail</th>
                                        <th colspan="4">Payment Detail</th>
                                    </tr>
                                    <tr class="bg-pink">
                                        <th>No</th>
                                        <th>OpenWish ID</th>
                                        <th>UserID (Buyer)</th>
                                        <th>User</th>
                                        <th>Product ID</th>
                                        <th>Date Stated</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Time</th>
                                        <th>Time Left</th>
                                        <th>Pledge</th>
                                        <th>Balance</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1234423</td>
                                        <td>ORDER0156</td>
                                        <td>Jane Change</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>IDEX</td>
                                        <td>MYR 1,000</td>
                                        <td>7 days</td>
                                        <td>1 day 4hours 32 min 25 sec</td>
                                        <td>MYR 800</td>
                                        <td>MYR 200</td>
                                        <td>Pending</td>
                                        <td width="80">
                                            <span class="badge badge-help">Help</span>
                                            <a onclick="$(this).parent().parent().remove();" class="pull-right"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="table-responsive col-sm-12">
                                <table class="table text-muted ">
                                    <tr class="bg-darkgreen">
                                        <th colspan="3">AutoLink Database</th>
                                        <th colspan="4">Interior</th>
                                        <th colspan="4">Responder</th>
                                    </tr>
                                    <tr class="bg-darkgreen">
                                        <th>NO</th>
                                        <th>AutoLink ID</th>
                                        <th>Mode</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Bought</th>
                                        <th>Sold</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Bought</th>
                                        <th>Sold</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>5</td>
                                        <td>MAX Sofa Bed-Blue with 10% Coupon</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>B096</td>
                                        <td>Furniture</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>5</td>
                                        <td>MAX Sofa Bed-Blue with 10% Coupon</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>B096</td>
                                        <td>Furniture</td>
                                        <td>1</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>P00514</td>
                                        <td>30 June 2015, 14.35</td>
                                        <td>30 June 2015, 15.00</td>
                                        <td>5</td>
                                        <td>MAX Sofa Bed-Blue with 10% Coupon</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>B096</td>
                                        <td>Furniture</td>
                                        <td>1</td>
                                    </tr>

                                </table>
                            </div>
                            <div class="table-responsive col-sm-12 ">
                                <table class="table text-muted ">
                                    <tr class="bg-darkgreen">
                                        <th colspan="11">AutoLink Database</th>
                                    </tr>
                                    <tr class="bg-darkgreen">
                                        <th>No</th>
                                        <th>AutoLink ID</th>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>SubCategory</th>
                                        <th>Target</th>
                                        <th>Linked Since</th>
                                        <th>Status</th>
                                        <th colspan="2">Type</th>
                                        <th>Merchant Remarks</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>P00514</td>
                                        <td>OS453</td>
                                        <td>Lorem</td>
                                        <td>5</td>
                                        <td>-N/A</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>Buyer </td>
                                        <td><a class="btn-darkgreen">Unlink</a> <i onclick="$(this).parent().parent().remove();" class="glyphicon glyphicon-remove text-danger"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>P00514</td>
                                        <td>OS453</td>
                                        <td>Lorem</td>
                                        <td>5</td>
                                        <td>-N/A</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>Dealer  </td>
                                        <td><a class="btn-darkgreen">Unlink</a> <i onclick="$(this).parent().parent().remove();" class="glyphicon glyphicon-remove text-danger"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>P00514</td>
                                        <td>OS453</td>
                                        <td>Lorem</td>
                                        <td>5</td>
                                        <td>Architect</td>
                                        <td>1</td>
                                        <td>RM 790.00</td>
                                        <td>Buyer </td>
                                        <td> <a class="btn-darkgreen">Approve </a> &nbsp; <a class="btn-darkgreen">Deny </a>
                                            <i onclick="$(this).parent().parent().remove();" class="glyphicon glyphicon-remove text-danger"></i></td>
                                        <td></td>
                                    </tr>

                                </table>
                            </div>

                        </div>

                        <hr>
                        <div id="autolink" class="row">
                            <div class="col-xs-12">
                                <a class="btn btn-darkgreen col-sm-2" href="#">
                                <i class="bt glyphicon glyphicon-link" style="padding: 6px 0"></i> AutoLink</a>
                                <div class="input-group input-group-sm col-sm-3 btn btn-darkgreen">
                                    <input type="text" placeholder="Tech_" class="form-control">
                                      <span class="input-group-btn">
                                        <button type="button" class="btn btn-darkgreen"><span class="glyphicon glyphicon-triangle-right"></span></button>
                                      </span>
                                </div>
                            </div>
                            <div class="clearfix margin-top"> </div>
                            <div class="col-sm-3">
                                <label><em>Target:</em></label>
                                <select multiple class="select-darkgreen form-control">
                                    <option>Architect</option>
                                    <option>Developer</option>
                                    <option class="active">Interior Designer</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label>Others:</label>
                            <div class="col-sm-12 bg-darkgreen">

                                <div class="input-group input-group-sm margin-top">
                                    <input type="text" placeholder="fill in the blank" class="form-control">
                                      <span class="input-group-btn">
                                        <button type="button" class="btn btn-darkgreen"><span class="glyphicon glyphicon-triangle-right"></span></button>
                                      </span>
                                </div>

                            </div>
                                <div class="clearfix margin-top"></div>
                            <select multiple class="select-darkgreen  form-control" style="font-family: FontAwesome">
                                <option class="active" onclick="$(this).remove();">&#xf00d; Architect</option>
                                <option onclick="$(this).remove();">&#xf00d; Interior Designer</option>
                            </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 margin-top">
                                <label>Target O-Shop:</label>
                            </div>
                            <div class="col-sm-3">
                                <label>Category</label>
                                <select multiple class="select-darkgreen  form-control">
                                    <option class="active">Architect</option>
                                    <option>Developer</option>
                                    <option>Interior Designer</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label>Sub Category</label>
                                <select multiple class="select-darkgreen form-control">
                                    <option>Architect</option>
                                    <option class="active">Developer</option>
                                    <option>Interior Designer</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label>&nbsp;</label>
                                <select multiple class="select-darkgreen form-control"  style="font-family: FontAwesome">
                                    <option onclick="$(this).remove();">&#xf00d; Architect</option>
                                    <option onclick="$(this).remove();">&#xf00d; Developer</option>
                                </select>
                            </div>

                            <div class="clearfix"></div>

                        </div>

                        <hr>
                        <div id="auctions" class="row">
                            <div class="col-xs-12">
                                <a href="#" class="btn btn-success col-sm-2"><i class="fa fa-legal"></i> Auctions</a>
                            </div>
                            <div class="col-sm-4 auction-item">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="media-heading"><h6 class="pull-left" style="padding-top: 5px">Start <br>From </h6>
                                            <h4 class="big-text pull-left"> RM</h4>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <h1 class="large-text">100</h1>
                                        <h5><small>Latest Pledge</small> <strong class="text-success pull-right">RM500</strong></h5>


                                    </div>
                                    <div class="col-sm-7">
                                        <a href="#"><img alt="auction" src="images/auction.png" class="auction img-responsive"></a>
                                        <a href="#"><img class="img-responsive" src="images/radio.jpg" alt="auction-item"></a>
                                    </div>
                                    <div class="clearfix margin-top"> </div>
                                    <label class="col-sm-2 control-label">BID: </label>
                                    <div class="col-sm-10">
                                        <select class="selectpicker form-control">
                                            <option>MYR</option>
                                        </select>
                                    </div>
                                    <div class="clearfix margin-top"> </div>
                                    <div class="col-sm-12">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-male big-text"></i> </li>
                                            <li>120 <br><small class="text-muted">Bidders</small></li>
                                            <li>Time Left<br><small class="text-muted">abcd Lorem Ipsum</small></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 auction-item">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="media-heading"><h6 class="pull-left" style="padding-top: 5px">Start <br>From </h6>
                                            <h4 class="big-text pull-left"> RM</h4> <div class="clearfix"> </div></div>
                                        <h1 class="large-text">200</h1>
                                        <h5><small>Latest Pledge</small> <strong class="text-success pull-right">RM500</strong></h5>


                                    </div>
                                    <div class="col-sm-7">
                                        <a href="#"><img alt="auction" src="images/auction.png" class="auction img-responsive"></a>
                                        <a href="#"><img style="width: 75%;" class="img-responsive" src="images/iphone6-gold-select-2014.jpg" alt="auction-item"></a>
                                    </div>
                                    <div class="clearfix margin-top"> </div>
                                    <label class="col-sm-2 control-label">BID: </label>
                                    <div class="col-sm-10">
                                        <select class="selectpicker form-control">
                                            <option>MYR</option>
                                        </select>
                                    </div>
                                    <div class="clearfix margin-top"> </div>
                                    <div class="col-sm-12">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-male big-text"></i> </li>
                                            <li>120 <br><small class="text-muted">Bidders</small></li>
                                            <li>Time Left<br><small class="text-muted">abcd Lorem Ipsum</small></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 auction-item">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="media-heading"><h6 class="pull-left" style="padding-top: 5px">Start <br>From </h6>
                                            <h4 class="big-text pull-left"> RM</h4> <div class="clearfix"> </div></div>
                                        <h1 class="large-text">10</h1>
                                        <h5><small>Latest Pledge</small> <strong class="text-success pull-right">RM500</strong></h5>

                                    </div>
                                    <div class="col-sm-7">
                                        <a href="#"><img alt="auction" src="images/auction.png" class="auction img-responsive"></a>
                                        <a href="#"><img class="img-responsive" src="images/watchCblack.jpg" alt="auction-item"></a>
                                    </div>
                                    <div class="clearfix margin-top"> </div>
                                    <label class="col-sm-2 control-label">BID: </label>
                                    <div class="col-sm-10">
                                        <select class="selectpicker form-control">
                                            <option>MYR</option>
                                        </select>
                                    </div>
                                    <div class="clearfix margin-top"> </div>
                                    <div class="col-sm-12">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-male big-text"></i> </li>
                                            <li>120 <br><small class="text-muted">Bidders</small></li>
                                            <li>Time Left<br><small class="text-muted">abcd Lorem Ipsum</small></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>


                        <hr>
                        <div id="loyalty" class="row">

                            <div class="col-xs-12">
                                <a class="btn btn-orange col-sm-3" href="#"><i class="fa fa-volume-up"></i> Loyalty Programme</a>
                            </div>  <div class="clearfix"></div>


                            <div class="col-sm-5">
                                <div class="form-group">


                                    <label class="col-sm-12 control-label">Let your customers know you are Care with them!</label>
                                    <div class="col-sm-12">

                                        <select data-style="btn-darkgreen" class="selectpicker form-control show-menu-arrow">
                                            <option>Standared Promotion Sentences</option>
                                            <option>50% Store Wide Discount!</option>
                                            <option>Something you can't miss it!</option>
                                            <option>10% DM discount on products only!</option>
                                            <option>Our chef are prepared Something Special!</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-xs-12 text-right margin-top">
                                        <input type="submit" value="Send" class="btn btn-green btn-sm">
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6 col-sm-offset-1">

                                    <label class="control-label">Tell Customers about your promotion!</label>
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" placeholder="...">
                                          <span class="input-group-btn">
                                            <button class="btn btn-green" type="button">Send</button>
                                          </span>
                                    </div>
                                    <span class="help-block">Tell Customers about your promotion!</span>
                            </div>

                            <div class="clearfix"></div>

                        </div>
                        <hr>

                        <div id="sales" class="row">
                            <div class="col-xs-12 margin-top">
                                <a class="btn btn-sale col-sm-3" href="#"><i class="fa fa-line-chart"></i> Sales Report</a>
                            </div>  <div class="clearfix"></div>

                            <div class="col-xs-12 margin-top">
                                <script>

                                    $(function () {
                                        $('#container').highcharts({
                                            title: {
                                                text: 'Monthly Sale Report',
                                                x: -20 //center
                                            },
                                            subtitle: {
                                                text: '2015',
                                                x: -20
                                            },
                                            xAxis: {
                                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                                            },
                                            yAxis: {
                                                title: {
                                                    text: 'Sales'
                                                },
                                                plotLines: [{
                                                    value: 0,
                                                    width: 1,
                                                    color: '#718DA3'
                                                }]
                                            },
                                            tooltip: {
                                                valueSuffix: ''
                                            },
                                            legend: {
                                                layout: 'vertical',
                                                align: 'right',
                                                verticalAlign: 'middle',
                                                borderWidth: 0
                                            },
                                            series: [{
                                                name: '',
                                                data: [0, 0, 0, 0, 0, 0, 0, 10, 10, 20, 30, 50]
                                            }]
                                        });
                                    });

                                </script>
                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                            </div>
                            <div class="col-sm-7">
                            <div class="table-responsive">
                                <table class="table table-striped ">
                                   <tr>
                                        <th nowrap>Custom Date Range</th>
                                        <th>From</th>
                                        <th><input type="text" placeholder="yy/mm/dd" id="datetimepicker" class="date form-control bg-sale"></th>
                                       <th>To</th>
                                        <th><input type="text" placeholder="yy/mm/dd" id="datetimepickerr" class="date form-control bg-sale"></th>
                                    </tr>
                                    <tr>
                                        <td>Since</td>
                                        <td>19August2015</td>
                                        <td colspan="3">MYR 200,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Year to Date</td>
                                        <td></td>
                                        <td colspan="3">MYR 140,000.00</td>
                                    </tr>

                                </table>


                            </div>

                                <div class="faqs col-sm-8 row">
                                    <h4>Years</h4>
                                    <div class="faqs-head">
                                        <span class="col-xs-3">2015</span>
                                        <span class="col-xs-6">MYR 120,000,00</span>
                                        <span class="col-xs-3"> <a data-target="#faqs1" data-toggle="collapse" class="btn btn-search pull-right collapsed" aria-expanded="false">
                                                <span class="glyphicon glyphicon-collapse-down"></span>
                                            </a> </span>
                                        <div class="clearfix"></div>

                                    </div>
                                    <div id="faqs1" class="collapse in" style="" aria-expanded="true">
                                        <table class="table">
                                            <tr><td>January </td><td>-</td></tr>
                                            <tr><td>February</td><td>-</td></tr>
                                            <tr><td>March</td><td>-</td></tr>
                                            <tr><td>April</td><td>-</td></tr>
                                            <tr><td>May</td><td>-</td></tr>
                                            <tr><td>June</td><td></td></tr>
                                            <tr><td>July</td><td>-</td></tr>
                                            <tr><td>August</td><td>MYR 10,000,00</td></tr>
                                            <tr><td>September</td><td>MYR 10,000,00</td></tr>
                                            <tr><td>October</td><td>MYR 20,000,00</td></tr>
                                            <tr><td>November</td><td>MYR 30,000,00</td></tr>
                                            <tr><td>December</td><td>MYR 50,000,00</td></tr>
                                        </table>
                                    </div>

                                    <div class="faqs-head">
                                            <span class="col-xs-3">2016</span>
                                            <span class="col-xs-6">MYR 120,000,00</span>
                                        <span class="col-xs-3"> <a data-target="#faqs2" data-toggle="collapse" class="btn btn-search pull-right collapsed" aria-expanded="false">
                                                <span class="glyphicon glyphicon-collapse-down"></span>
                                            </a> </span>
                                            <div class="clearfix"></div>

                                    </div>
                                    <div class="collapse" id="faqs2" aria-expanded="false" style="height: 0px;">
                                        <table class="table">
                                            <tr><td>January </td><td>-</td></tr>
                                            <tr><td>February</td><td>-</td></tr>
                                            <tr><td>March</td><td>-</td></tr>
                                            <tr><td>April</td><td>-</td></tr>
                                            <tr><td>May</td><td>-</td></tr>
                                            <tr><td>June</td><td></td></tr>
                                            <tr><td>July</td><td>-</td></tr>
                                            <tr><td>August</td><td>MYR 10,000,00</td></tr>
                                            <tr><td>September</td><td>MYR 10,000,00</td></tr>
                                            <tr><td>October</td><td>MYR 20,000,00</td></tr>
                                            <tr><td>November</td><td>MYR 30,000,00</td></tr>
                                            <tr><td>December</td><td>MYR 50,000,00</td></tr>
                                        </table>
                                    </div>
                                    <div class="faqs-head">
                                        <span class="col-xs-3">2017</span>
                                        <span class="col-xs-6">MYR 120,000,00</span>
                                        <span class="col-xs-3"> <a data-target="#faqs3" data-toggle="collapse" class="btn btn-search pull-right collapsed" aria-expanded="false">
                                                <span class="glyphicon glyphicon-collapse-down"></span>
                                            </a> </span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="collapse" id="faqs3" aria-expanded="false" style="height: 0px;">
                                        <table class="table">
                                            <tr><td>January </td><td>-</td></tr>
                                            <tr><td>February</td><td>-</td></tr>
                                            <tr><td>March</td><td>-</td></tr>
                                            <tr><td>April</td><td>-</td></tr>
                                            <tr><td>May</td><td>-</td></tr>
                                            <tr><td>June</td><td></td></tr>
                                            <tr><td>July</td><td>-</td></tr>
                                            <tr><td>August</td><td>MYR 10,000,00</td></tr>
                                            <tr><td>September</td><td>MYR 10,000,00</td></tr>
                                            <tr><td>October</td><td>MYR 20,000,00</td></tr>
                                            <tr><td>November</td><td>MYR 30,000,00</td></tr>
                                            <tr><td>December</td><td>MYR 50,000,00</td></tr>
                                        </table>
                                    </div>
                                    <div class="faqs-head">
                                        <span class="col-xs-3">2018</span>
                                        <span class="col-xs-6">MYR 120,000,00</span>
                                        <span class="col-xs-3"> <a data-target="#faqs4" data-toggle="collapse" class="btn btn-search pull-right collapsed" aria-expanded="false">
                                                <span class="glyphicon glyphicon-collapse-down"></span>
                                            </a> </span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="collapse" id="faqs4" aria-expanded="false" style="height: 0px;">
                                        <table class="table">
                                            <tr><td>January </td><td>-</td></tr>
                                            <tr><td>February</td><td>-</td></tr>
                                            <tr><td>March</td><td>-</td></tr>
                                            <tr><td>April</td><td>-</td></tr>
                                            <tr><td>May</td><td>-</td></tr>
                                            <tr><td>June</td><td></td></tr>
                                            <tr><td>July</td><td>-</td></tr>
                                            <tr><td>August</td><td>MYR 10,000,00</td></tr>
                                            <tr><td>September</td><td>MYR 10,000,00</td></tr>
                                            <tr><td>October</td><td>MYR 20,000,00</td></tr>
                                            <tr><td>November</td><td>MYR 30,000,00</td></tr>
                                            <tr><td>December</td><td>MYR 50,000,00</td></tr>
                                        </table>
                                    </div>



                                </div>
                            </div>
                            <div class="col-sm-4 col-sm-offset-1" >

                                <div style="border:1px solid #718DA3">
                                <div class="col-xs-6" >
                                    <p>Max</p>
                                    <p>Min</p>
                                    <p>Average/Day</p>
                                    <p>Average/Deal</p>
                                    <p>Viewed</p>
                                </div>
                                <div class="col-xs-6 bg-sale">
                                    <p>MYR 5000</p>
                                    <p>MYR 15,00</p>
                                    <p>MYR 144,00</p>
                                    <p>MYR 12,00</p>
                                    <p>100,00</p>
                                </div>
                                <div class="clearfix"></div>

                                </div>
                                </div>
                        </div>
                        <hr>

                        <div id="inventory" class="row">

                            <div class="col-xs-12 margin-top">
                                <a class="btn btn-gold col-sm-3" href="#"><i class="fa fa-line-chart"></i> Inventory Report</a>
                            </div>  <div class="clearfix"></div>

                            <div class="table-responsive col-sm-12">
                                <table class="table text-muted ">
                                    <tbody><tr class="bg-gold">
                                        <th colspan="10">Products Details</th>
                                    </tr>
                                    <tr class="bg-gold">
                                        <th>No</th>
                                        <th>SKU</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>SubCategory</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Retail Price</th>
                                        <th>Original Price</th>
                                        <th>Discount%</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>ORDER0156</td>
                                        <td>Shampoo</td>
                                        <td>Beauty</td>
                                        <td>Hair Care</td>
                                        <td>IDX Shampoo Collection</td>
                                        <td>100</td>
                                        <td>RM 100</td>
                                        <td>RM 110</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>ORDER0156</td>
                                        <td>Shampoo</td>
                                        <td>Beauty</td>
                                        <td>Hair Care</td>
                                        <td>IDX Shampoo Collection</td>
                                        <td>100</td>
                                        <td>RM 100</td>
                                        <td>RM 110</td>
                                        <td></td>
                                    </tr>

                                    </tbody></table>

                            </div>

                            <div class="table-responsive col-sm-3 ">
                                <table class="table text-muted ">
                                    <tbody><tr class="bg-lightgold">
                                        <th colspan="2">Wholesale</th>
                                    </tr>
                                    <tr class="bg-lightgold">
                                        <th>Price</th>
                                        <th>Unit</th>
                                    </tr>
                                    <tr>
                                        <td>RM 95<br>RM 95</td>
                                        <td>1<br>10<br>50</td>
                                    </tr>
                                    <tr>
                                        <td>RM 95<br>RM 95</td>
                                        <td>1<br>10<br>50</td>
                                    </tr>


                                    </tbody></table>

                            </div>

                            <div class="table-responsive col-sm-9">
                                <table class="table text-muted ">
                                    <tbody><tr class="bg-lightgold">
                                        <th colspan="5">&nbsp;</th>
                                    </tr>
                                    <tr class="bg-lightgold">
                                        <th>Viewed</th>
                                        <th>Bought</th>
                                        <th>Type</th>
                                        <th>Source</th>
                                        <th>Dealers</th>
                                    </tr>
                                    <tr>
                                        <td>1180</td>
                                        <td>887</td>
                                        <td>Shopper Dealers</td>
                                        <td>SMM</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1180</td>
                                        <td>887</td>
                                        <td>Shopper Dealers</td>
                                        <td>SMM</td>
                                        <td></td>
                                    </tr>

                                    </tbody></table>

                            </div>
                              </div>


                    </form>


                </div>
            </div>
        </div><!--End main cotainer-->
    </section>
@stop