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
				<li role="presentation" class="active floor-navigation"><a href="#information">Information</a></li>
				<li role="presentation" class="floor-navigation"><a href="#open-wish">Open Wish</a></li>
				<li role="presentation" class="floor-navigation"><a href="#auctions">Auctions</a></li>
				<li role="presentation" class="floor-navigation"><a href="#smm">SMM</a></li>
				<li role="presentation" class="floor-navigation"><a href="#autolink">AutoLink</a></li>
				<li role="presentation" class="floor-navigation"><a href="#open-biss">Open Biss</a></li>
				<li role="presentation" class="floor-navigation"><a href="#new">New</a></li>
			</ul>
			</div>
			<div class="col-sm-11 col-sm-offset-1">
			<img src="images/banner.png" title="banner" class="img-responsive banner">
			<hr>
			
			<form class="form-horizontal">
			<div id="information" class="row">
			  <div class="col-sm-2"><img src="images/profile-image.png" title="profile-image" class="img-responsive"></div>
			
			  <div class="col-sm-5">
			  <h1>{{$userModel['first_name'] .' '.$userModel['last_name']}}<a class="btn btn-default">Edit Personal Details</a></h1>
			  <div class="panel">
				  <div class="panel-heading btn-green">
					<h3 class="panel-title">Personal Details</h3>
				  </div>
				  <div class="panel-body">
					<dl class="dl-horizontal text-muted">
					  <dt>Age</dt><dd>{{$userModel['age'] or 'NaN'}}</dd>
					  <dt>Occupation:</dt><dd>{{$userModel['occupation']['name'] or 'NaN'}}</dd>
					  <dt>User ID:</dt><dd>{{$userModel['id']}}</dd>
					  <dt>Mobile Number</dt><dd>{{$userModel['merchant'][0]['mobile_no'] or 'NaN'}}</dd>
					  <dt>Default Address</dt><dd>{{$userModel['merchant'][0]['address']['line1'] or 'NaN'}}</dd>
					  <dt>Billing Address</dt><dd>{{$userModel['merchant'][0]['address']['line2'] or 'NaN'}}</dd>
					  <dt>Language</dt><dd>Its Missing Waisun</dd>
					  <dt>Annual</dt><dd>How to calc?</dd>
					</dl>
				  </div>
				</div>
				<div class="panel">
				  <div class="panel-heading btn-green">
					<h3 class="panel-title">Interested in</h3>
				  </div>
				  <div class="panel-body">
					<p class="text-muted">Electronics, Fashion, Beauty, Health & Cosmatics</p>
				  </div>
				</div>
				<p class="text-muted">Member since 30/06/2015</p>
			  </div>
			  <div class="col-sm-5">
				<h1>My favourite O-Shop</h1>
				<div class="input-group input-group-sm pull-right col-sm-6">
				  <input type="text" class="form-control" placeholder="Search">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
				  </span>
				</div>
				<div class="clearfix"></div>
				<div id="oshop-favo">
				<ul class="list-unstyled">
				<li><img src="images/favo1.png" class="img-responsive"></li>
				<li><img src="images/favo2.png" class="img-responsive"></li>
				<li><img src="images/favo3.png" class="img-responsive"></li>
				<li><img src="images/favo4.png" class="img-responsive"></li>
				<li><img src="images/favo5.png" class="img-responsive"></li>
				<li><img src="images/favo1.png" class="img-responsive"></li>
				<li><img src="images/favo2.png" class="img-responsive"></li>
				<li><img src="images/favo3.png" class="img-responsive"></li>
				<li><img src="images/favo4.png" class="img-responsive"></li>
				<li><img src="images/favo5.png" class="img-responsive"></li>
				</ul>
				</div>
				   <select class="selectpicker pull-right" multiple title="My favourite O-Shop" data-style="btn-green" aria-expanded="true">
					<option data-icon="glyphicon-remove text-danger"> Pandora</option>
					<option data-icon="glyphicon-remove text-danger"> Pasifica</option>
					<option data-icon="glyphicon-remove text-danger"> Kaiser Restaurant</option>
					<option data-icon="glyphicon-remove text-danger"> ZARA City</option>
					<option data-icon="glyphicon-remove text-danger"> 574 workwear</option>
				  </select>
			  </div>			  
			  <div class="clearfix"></div>

				  <div class="table-responsive col-sm-12 ">
				<table class="table text-muted ">
				<tr class="bg-black">
				  <th colspan="10">Product Details</th>
				</tr>
				<tr class="bg-black">
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
				 <div class="table-responsive col-sm-8 ">
				<table class="table text-muted ">
				<tr class="bg-purple">
				  <th colspan="10">Shipping Details</th>
				</tr>
				<tr class="bg-purple">
				  <th>Shipping ID</th>
				  <th>Company</th>
				  <th>Status</th>
				  <th>Days since ordered</th>
				</tr>
				<tr>
					<td>SP0140</td>
					<td>DHL Logistic</td>
					<td>Pending, order 30 June 2015, 14.35</td>
					<td>30 June 2015, 15.00</td>

				</tr>
				<tr>
					<td>SP0141</td>
					<td>POS Malaysia</td>
					<td>Pending, order 30 June 2015, 14.35</td>
					<td>30 June 2015, 15.00</td>
				</tr>

				</table>

				 </div>

				  <div class="table-responsive col-sm-12 ">
				<table class="table text-muted ">
				<tr class="bg-parrot">
				  <th colspan="10">Coupon Details</th>
				</tr>
				<tr class="bg-parrot">
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
					<td>Dealer </td>
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
					<td><a class="btn-darkgreen">Approve </a> &nbsp; <a class="btn-darkgreen">Deny </a>
						<i onclick="$(this).parent().parent().remove();" class="glyphicon glyphicon-remove text-danger"></i></td>
					<td></td>
				</tr>

				</table>
				  </div>

			 </div>
				<hr>
		<div id="open-wish" class="row">
			 
			 <div class="col-xs-12"> 
				<a class="btn btn-pink col-sm-2" href="#"><i class="fa fa-heart"></i> OpenWish</a>			 
			 </div>
			
			  
 <div class="col-sm-8"> 
				<label><em>New Wishes:</em></label>		
				<div class="row">
  <div class="col-sm-6 col-md-3 item-box">
      <a href="#"> <img class="img-responsive" src="images/item1.png" alt="item" ></a>
     <div class="pull-left">Lorem Ipsum 574</div><div class="pull-right">FM380</div>  
	 <div class="clearfix"> </div>

     <div class="pull-left">PAM TTD <span class="bordered">RM300</span></div>
	 <div class="pull-right"><a class="btn-darkgreen">Ask for Help</a></div>
	   <div class="clearfix"> </div>

     <div class="pull-left">Balance <span class="bordered">BM54</span></div>
	 <div class="pull-right"><a class="btn-darkgreen">Buy Now</a></div>
	
		  <div class="clearfix"> </div>

  </div>
  <div class="col-sm-6 col-md-3 item-box">
      <a href="#"> <img class="img-responsive" src="images/item2.png" alt="item" ></a>
     <div class="pull-left">Lorem Ipsum 574</div><div class="pull-right">FM380</div>  
	 <div class="clearfix"> </div>

     <div class="pull-left">PAM TTD <span class="bordered">RM300</span></div>
	 <div class="pull-right"><a class="btn-darkgreen">Ask for Help</a></div>
	   <div class="clearfix"> </div>

     <div class="pull-left">Balance <span class="bordered">BM54</span></div>
	 <div class="pull-right"><a class="btn-darkgreen">Buy Now</a></div>
	
		  <div class="clearfix"> </div>
		
  </div>
  <div class="col-sm-6 col-md-3 item-box">
      <a href="#"> <img class="img-responsive" src="images/item3.png" alt="item" ></a>
    <div class="pull-left">Lorem Ipsum 574</div><div class="pull-right">FM380</div>  
	 <div class="clearfix"> </div>

     <div class="pull-left">PAM TTD <span class="bordered">RM300</span></div>
	 <div class="pull-right"><a class="btn-darkgreen">Ask for Help</a></div>
	   <div class="clearfix"> </div>

     <div class="pull-left">Balance <span class="bordered">BM54</span></div>
	 <div class="pull-right"><a class="btn-darkgreen">Buy Now</a></div>
	
		  <div class="clearfix"> </div>
		
  </div>
  <div class="col-sm-6 col-md-3 item-box">
      <a href="#"> <img class="img-responsive" src="images/item4.png" alt="item" ></a>
     <div class="pull-left">Lorem Ipsum 574</div><div class="pull-right">FM380</div>  
	 <div class="clearfix"> </div>

     <div class="pull-left">PAM TTD <span class="bordered">RM300</span></div>
	 <div class="pull-right"><a class="btn-darkgreen">Ask for Help</a></div>
	   <div class="clearfix"> </div>

     <div class="pull-left">Balance <span class="bordered">BM54</span></div>
	 <div class="pull-right"><a class="btn-darkgreen">Buy Now</a></div>
	
		  <div class="clearfix"> </div>
		
  </div>
</div>
				 
				<label><em>History:</em></label>				
			 	
				<div class="row">
  <div class="col-sm-6 col-md-3 item-box">
      <a href="#"> <img class="img-responsive" src="images/item1.png" alt="item" ></a>
     <div class="pull-left">Lorem Ipsum 574</div><div class="pull-right">FM380</div>
   <div class="clearfix"> </div>

   <div class="ihover">
  <p>Lorem Ipsum Lorem Ipsum</p>
  <label>Paid RML 350</label>
  <label>Top Up RML 350</label>
  </div>
		
		
  </div>
  <div class="col-sm-6 col-md-3 item-box">
      <a href="#"> <img class="img-responsive" src="images/item2.png" alt="item" ></a>
     <div class="pull-left">Lorem Ipsum 574</div><div class="pull-right">FM380</div>
    <div class="clearfix"> </div>

   <div class="ihover">
  <p>Lorem Ipsum Lorem Ipsum</p>
  <label>Paid RML 350</label>
  <label>Top Up RML 350</label>
  </div>
		
  </div>
  <div class="col-sm-6 col-md-3 item-box">
      <a href="#"> <img class="img-responsive" src="images/item3.png" alt="item" ></a>
     <div class="pull-left">Lorem Ipsum 574</div><div class="pull-right">FM380</div>
      <div class="clearfix"> </div>

   <div class="ihover">
  <p>Lorem Ipsum Lorem Ipsum</p>
  <label>Paid RML 350</label>
  <label>Top Up RML 350</label>
  </div>
		
		
  </div>
  <div class="col-sm-6 col-md-3 item-box">
      <a href="#"> <img class="img-responsive" src="images/item4.png" alt="item" ></a>
     <div class="pull-left">Lorem Ipsum 574</div><div class="pull-right">FM380</div>
      <div class="clearfix"> </div>

   <div class="ihover">
  <p>Lorem Ipsum Lorem Ipsum</p>
  <label>Paid RML 350</label>
  <label>Top Up RML 350</label>
  </div>
		
		
  </div>
</div>
				 
			 </div>
			 <div class="col-sm-4">
				<h1>You may also like</h1>
				<div id="itembrands">
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p1.png" alt="item" ></a>
				</div>
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p2.png" alt="item" ></a>
				</div>
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p3.png" alt="item" ></a>
				</div>
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p4.png" alt="item" ></a>
				</div>
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p5.png" alt="item" ></a>
				</div>
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p6.png" alt="item" ></a>
				</div>
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p7.png" alt="item" ></a>
				</div>
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p8.png" alt="item" ></a>
				</div>
				<div class="col-md-4 col-sm-6 item-brands">
					<a href="#"> <img class="img-responsive" src="images/p9.png" alt="item" ></a>
				</div>
			  </div>
			  </div>
 <div class="clearfix"> </div>
			  </div>
	<hr>
		<div id="auctions" class="row" >
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
						<a href="#"><img style="width:75%;" class="img-responsive" src="images/iphone6-gold-select-2014.jpg" alt="auction-item"></a>
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
			
			<div id="smm" class="row">
			 
			 <div class="col-xs-12"> 		
				<a href="#" class="btn btn-blue col-sm-3"><i class="glyphicon glyphicon-tower"></i> Social Media Marketeer</a>		 
			 </div>
 <div class="clearfix"> </div>
			 <div class="col-sm-3 margin-top">
			 <table class="table noborder">
				<tr><th colspan="2">Overall</th></tr>	
				<tr><td>Shared</td><td>30</td></tr>	
				<tr><td>Viewed Click</td><td>20000</td></tr>	
				<tr><td>Bought</td><td>MYR 41,000,00</td></tr>	
				<tr><td></td><td>400</td></tr>	
			</table>
			  </div>
			 <div class="col-sm-3 margin-top">
			 <table class="table noborder">
						<tr><th colspan="2">Commision</th></tr>	
						<tr><td>Earned Since</td><td>MYR 20,000,00</td></tr>	
						<tr><td>Earned YTD</td><td>MYR 10,000,00</td></tr>	
						<tr><td>Pending</td><td>MYR 205,00</td></tr>	
						</table>
			  </div>
			<div class="col-sm-4 social-box margin-top">
			
			 <select class="margin-top selectpicker show-menu-arrow form-control" data-style="btn-darkgreen" >
			<option>Great Sales</option></select>
			  <div class="margin-top ">
			  <div class="col-sm-5 btn-facebook">
			<div class="checkbox checkbox-danger checkbox-inline">
			<input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
			<label class=""> Facebook</label>
			</div>
			</div>
			
			<div class="col-sm-5 col-sm-offset-2 btn-twitter">
			<div class="checkbox checkbox-danger checkbox-inline">
			<input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
			<label class="btn-twitter"> Twitter</label>
			</div>
			</div>
			 <div class="clearfix"> </div>
			 </div>
			 
			  <div class="margin-top ">
			  
			<div class="col-sm-5 btn-linkedin">
			<div class="checkbox checkbox-danger checkbox-inline">
			<input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
			<label class=""> Linked In</label>
			</div>
			 
			</div>
			
			<div class="col-sm-5 col-sm-offset-2 btn-gplus">
			<div class="checkbox checkbox-danger checkbox-inline">
			<input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
			<label class=""> Google+</label>
			</div>
			</div>
			 <div class="clearfix"> </div>
			  
			  </div>
			 
			    <div class="margin-top ">
				<div class="col-sm-5 btn-instagram">
			<div class="checkbox checkbox-danger checkbox-inline">
			<input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
			<label class=""> Instagram</label>
			</div>
			</div>
			<div class="col-sm-5 col-sm-offset-2 btn-wechat">
			<div class="checkbox checkbox-danger checkbox-inline">
			<input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
			<label class=""> WeChat</label>
			</div>
			</div>
			 <div class="clearfix"> </div>
			 </div>
			  <div class="margin-top">
			  <div class="col-sm-5 btn-weibo">
			<div class="checkbox checkbox-danger checkbox-inline">
			<input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
			<label class=""> Weibo</label>
			</div>  
			
			  </div>
			  
			 <div class="clearfix"> </div>
			   </div>
			   </div>  
			 
			  <div class="clearfix"> </div>
			  
			  <div class="margin-top">
			  <div class="col-sm-2 thumbnail">
			  <img src="images/item1.png" class="img-responsive">
			  <h5>Massage Chair <strong class="pull-right">RM 5400</strong></h5>
			  </div>
			   <div class="col-sm-3">
			 <table class="table noborder">
				<tr><th colspan="2">Overall</th></tr>	
				<tr><td>Shared</td><td>30</td></tr>	
				<tr><td>Viewed Click</td><td>20000</td></tr>	
				<tr><td>Bought</td><td>MYR 41,000,00</td></tr>	
				<tr><td>Unit</td><td>400</td></tr>	
			</table>
			<a class="btn btn-darkgreen pull-right btn-lg">Send</a>
			  </div>
			  <div class="col-sm-2 col-sm-offset-2 thumbnail">
			  <img src="images/item1.png" class="img-responsive">
			  <h5>Massage Chair <strong class="pull-right">RM 5400</strong></h5>
			  </div>
			   <div class="col-sm-3">
			 <table class="table noborder">
				<tr><th colspan="2">Overall</th></tr>	
				<tr><td>Shared</td><td>30</td></tr>	
				<tr><td>Viewed Click</td><td>20000</td></tr>	
				<tr><td>Bought</td><td>MYR 41,000,00</td></tr>	
				<tr><td>Unit</td><td>400</td></tr>	
			</table>
			<a class="btn btn-darkgreen pull-right btn-lg">Send</a>
			  </div>
			    <div class="clearfix"> </div>
	
			  </div>
			  <div class="margin-top">
			  <div class="col-sm-2 thumbnail">
			  <img src="images/item1.png" class="img-responsive">
			  <h5>Massage Chair <strong class="pull-right">RM 5400</strong></h5>
			  </div>
			   <div class="col-sm-3">
			 <table class="table noborder">
				<tr><th colspan="2">Overall</th></tr>	
				<tr><td>Shared</td><td>30</td></tr>	
				<tr><td>Viewed Click</td><td>20000</td></tr>	
				<tr><td>Bought</td><td>MYR 41,000,00</td></tr>	
				<tr><td>Unit</td><td>400</td></tr>	
			</table>
			<a class="btn btn-darkgreen pull-right btn-lg">Send</a>
			  </div>
			  
			    <div class="clearfix"> </div>
	
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
			 <div id="open-biss" class="row">
			
			<div class="col-xs-12"> 		
				<a class="btn btn-orange col-sm-2" href="#"><i class="fa fa-suitcase"></i> Open Business</a>		 
			 </div>  <div class="clearfix"></div>
			
			
			   <div class="col-sm-5">
			  <div class="form-group">
			 
					<label class="col-sm-12 control-label">&nbsp;</label>
					
				<label class="col-sm-4 control-label">Company Name</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="if using company account" class="form-control">
				</div>
				<label class="col-sm-4 control-label"> Reg No</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="if using company account" class="form-control">
				</div>
				<label class="col-sm-4 control-label">Type</label>
				<div class="col-sm-8">
				
				 <select data-style="btn-orange" class="selectpicker show-menu-arrow form-control">
				  <option>Dealers</option>
				  <option>Merchant Consultant</option>
				  <option>SMM</option>
				  </select>
				  
				  
				</div>
				
			  </div>
			  </div>
			  
			  <div class="col-sm-6 col-sm-offset-1">
				
			 
 <h1>Bank Details</h1>
  <div class="form-group">  
  <label class="col-sm-4 control-label">Account Name </label>
    <div class="col-sm-8">
      <input type="text" class="form-control">
    </div>
   
   <label class="col-sm-4 control-label">Account Number </label>
    <div class="col-sm-8">
      <input type="text" class="form-control">
    </div>
  
  <label class="col-sm-4 control-label">Bank Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control">
    </div>
   
   <label class="col-sm-4 control-label">Bank Code </label>
    <div class="col-sm-8">
      <input type="text" class="form-control">
    </div>
   
   <label class="col-sm-4 control-label">IBAN </label>
    <div class="col-sm-8">
      <input type="text" class="form-control">
    </div>
    
	<label class="col-sm-4 control-label">SWIFT </label>
    <div class="col-sm-8">
      <input type="text" class="form-control">
    </div>
	
    </div>
			  </div>
			  
			  <div class="clearfix"></div>
			 			 
			 </div>
			 <hr>
			 
			 <div id="new" class="row">
			 
			<div class="col-xs-12"> 		
				<a class="btn btn-darkgreen col-sm-3" href="#"><i class="fa fa-gift"></i> New OpenSupermall</a>		 
			 </div>  <div class="clearfix"></div>
			<div class="margin-top"> 
			<div class="col-sm-3"> 
			<img src="images/item1.png" class="img-responsive">
			<h5>Designer Watch <strong class="pull-right strikethrough">RM 700</strong></h5>
			<ul class="list-inline pull-left">
			<li class="btn-darkgreen"><i class="fa fa-plus"></i></li>
			<li class="btn-pink"><i class="fa fa-heart"></i></li>
			<li class="btn-orange"><i class="fa fa-shopping-cart"></i></li>
			</ul>
			<strong class="discounted-price pull-right text-danger">RM 580<br> -20%</strong>
			 <div class="clearfix"> </div>
			</div>
			<div class="col-sm-3"> 
			<img src="images/item1.png" class="img-responsive">
			<h5>Designer Watch <strong class="pull-right">RM 700</strong></h5>
			<ul class="list-inline pull-left">
			<li class="btn-darkgreen"><i class="fa fa-plus"></i></li>
			<li class="btn-pink"><i class="fa fa-heart"></i></li>
			<li class="btn-orange"><i class="fa fa-shopping-cart"></i></li>
			</ul>
			 <div class="clearfix"> </div>
			</div>
			<div class="col-sm-3"> 
			<img src="images/item1.png" class="img-responsive">
			<h5>Designer Watch <strong class="pull-right strikethrough">RM 700</strong></h5>
			<ul class="list-inline pull-left">
			<li class="btn-darkgreen"><i class="fa fa-plus"></i></li>
			<li class="btn-pink"><i class="fa fa-heart"></i></li>
			<li class="btn-orange"><i class="fa fa-shopping-cart"></i></li>
			</ul>
			<strong class="discounted-price pull-right text-danger">RM 580<br> -20%</strong>
			 <div class="clearfix"> </div>
			</div>
			
			<div class="col-sm-3"> 
			<img src="images/item1.png" class="img-responsive">
			<h5>Designer Watch <strong class="pull-right">RM 700</strong></h5>
			<ul class="list-inline pull-left">
			<li class="btn-darkgreen"><i class="fa fa-plus"></i></li>
			<li class="btn-pink"><i class="fa fa-heart"></i></li>
			<li class="btn-orange"><i class="fa fa-shopping-cart"></i></li>
			</ul>
			 <div class="clearfix"> </div>
			</div>
			 <div class="clearfix"></div>
			 			 
			 </div>
		
			
			<div class="margin-top"> 
			<div class="col-sm-3"> 
			<img src="images/item1.png" class="img-responsive">
			<h5>Designer Watch <strong class="pull-right strikethrough">RM 700</strong></h5>
			<ul class="list-inline pull-left">
			<li class="btn-darkgreen"><i class="fa fa-plus"></i></li>
			<li class="btn-pink"><i class="fa fa-heart"></i></li>
			<li class="btn-orange"><i class="fa fa-shopping-cart"></i></li>
			</ul> 
			<strong class="discounted-price pull-right text-danger">RM 580<br> -20%</strong>
			<div class="clearfix"> </div>
			</div>
			<div class="col-sm-3"> 
			<img src="images/item1.png" class="img-responsive">
			<h5>Designer Watch <strong class="pull-right">RM 700</strong></h5>
			<ul class="list-inline pull-left">
			<li class="btn-darkgreen"><i class="fa fa-plus"></i></li>
			<li class="btn-pink"><i class="fa fa-heart"></i></li>
			<li class="btn-orange"><i class="fa fa-shopping-cart"></i></li>
			</ul>
			 <div class="clearfix"> </div>
			</div>
			<div class="col-sm-3"> 
			<img src="images/item1.png" class="img-responsive">
			<h5>Designer Watch <strong class="pull-right strikethrough">RM 700</strong></h5>
			<ul class="list-inline pull-left">
			<li class="btn-darkgreen"><i class="fa fa-plus"></i></li>
			<li class="btn-pink"><i class="fa fa-heart"></i></li>
			<li class="btn-orange"><i class="fa fa-shopping-cart"></i></li>
			</ul>
			<strong class="discounted-price pull-right text-danger">RM 580<br> -20%</strong>
			 <div class="clearfix"> </div>
			 </div>
			
			<div class="col-sm-3"> 
			<img src="images/item1.png" class="img-responsive">
			<h5>Designer Watch <strong class="pull-right">RM 700</strong></h5>
			<ul class="list-inline pull-left">
			<li class="btn-darkgreen"><i class="fa fa-plus"></i></li>
			<li class="btn-pink"><i class="fa fa-heart"></i></li>
			<li class="btn-orange"><i class="fa fa-shopping-cart"></i></li>
			</ul>
			 <div class="clearfix"> </div>
			</div>
			 <div class="clearfix"></div>
			 			 
			 </div>
			 </div>
	 
	 
</form>


			</div>
		</div>		
	</div><!--End main cotainer-->
</section>
@stop