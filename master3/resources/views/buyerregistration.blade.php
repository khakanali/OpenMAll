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
				<li role="presentation" class="active floor-navigation"><a href="#confirm">Confirm</a></li>
				<li role="presentation" class="floor-navigation"><a href="#open-wish">Open Wish</a></li>
				<li role="presentation" class="floor-navigation"><a href="#buyer-detail">Buyer Detail</a></li>
				<li role="presentation" class="floor-navigation"><a href="#open-biss">Open Biss</a></li>
				<li role="presentation" class="floor-navigation"><a href="#smm">SMM</a></li>
			</ul>
			</div>
			<div class="col-sm-11 col-sm-offset-1">
			<img src="images/Buyerregistration.png" title="banner" class="img-responsive banner">
			<hr>
			
			<form class="form-horizontal">
			<div id="confirm">
			 <p class="text-pink"><em>for buyer</em></p>
			 
			<p>Confirm your identity</p>
			  <div class="col-sm-5">
			  <div class="form-group">
				<label class="col-sm-2 control-label">User</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" placeholder="Email">
				</div>
				<div class="clearfix"></div>
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" placeholder="Password" class="form-control">
				</div>
			  </div>
			  </div>
			  <div class="col-sm-1 text-center"><strong>or</strong></div>
			  <div class="col-sm-5">
				<div class="col-sm-6 text-center"><strong>by using</strong></div>
				<div class="clearfix"></div>
				<div class="col-sm-6">
				  <a href="#" class="btn btn-facebook col-sm-12">Facebook</a>
				</div>
			  </div><div class="clearfix"></div>
			  </div>
  <hr>
			  <div id="open-wish">
			 
			 <div class="col-xs-12"> 
				<p class="text-pink"><em>for buyer with OpenWish function</em></p>			
				<a href="#" class="btn btn-pink col-sm-2"><i class="fa fa-heart"></i> OpenWish</a>			 
			 </div>
			 <div class="col-xs-12">
				<br><p class="text-center "><strong>to establish OpenWish you need to link the following Social Media</strong></p><br>
				<label>I wish to:</label>				
			  </div>
			  <div class="link-facebook">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-facebook col-sm-12" href="#">Facebook</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-linkedin">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-linkedin col-sm-12" href="#">Linked In</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-instagram">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-instagram col-sm-12" href="#"><em>Instagram</em></a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-wechat">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-wechat col-sm-12" href="#">WeChat</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-weibo">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-weibo col-sm-12" href="#">Weibo</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-twitter">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-twitter col-sm-12" href="#">Twitter</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-gplus">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-gplus col-sm-12" href="#">Google+</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			
			   </div>
   <hr> 
	<div id="buyer-detail">
			
			<h1>Buyer Detail</h1>
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" placeholder="*Compulsory">
				</div>
				<label class="col-sm-2 control-label">Solution</label>
				<div class="col-sm-10">
				  <div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Mr</label>
                    </div>
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1"> Ms</label>
                    </div>
				  <div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Mrs</label>
                    </div>
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1"> Other</label>
                    </div>
				<div class="radio radio-green radio-inline">
						<input type="text" class="form-control">
                    </div>
				</div>
			  </div>
			   <div class="col-sm-5">
			  <div class="form-group">
			  <label class="col-sm-12 control-label">&nbsp;</label>
				<label class="col-sm-4 control-label">Gender</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="" class="form-control">
				</div>
				<label class="col-sm-4 control-label">Language</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" placeholder="">
				</div>
				<label class="col-sm-4 control-label">Mobile Number</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="*Compulsory" class="form-control">
				</div>
				<label class="col-sm-4 control-label">Occupation</label>
				<div class="col-sm-8">
				  <select class="selectpicker show-menu-arrow form-control" data-style="btn-green" ><option></option></select>
				</div>
					<label class="col-sm-12 control-label">&nbsp;</label>
					
				<label class="col-sm-4 control-label">Username</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="" class="form-control">
				</div>
				<label class="col-sm-4 control-label">Password</label>
				<div class="col-sm-8">
				  <input type="password" placeholder="" class="form-control">
				</div>
				<label class="col-sm-4 control-label">Reconfirm</label>
				<div class="col-sm-8">
				  <input type="password" placeholder="" class="form-control">
				</div>
			  </div>
			  </div>
			  
			  <div class="col-sm-5 col-sm-offset-2">
				<div class="form-group">	
				<label class="col-sm-12 control-label">&nbsp;</label>				
				<label class="col-sm-3 control-label">Dob:</label>
				<div class="col-sm-9">
				   <input type="text" placeholder="dd/mm/year" class="form-control">
				</div>				
				<label class="col-sm-3 control-label">Annual:</label>
				<div class="col-sm-9">
				  <select class="selectpicker show-menu-arrow form-control" data-style="btn-green" >
				  <option> < 30,000</option>
				  <option>30,000 - 49,999</option>
				  <option>50,000 - 59,999</option>
				  <option>60,000 - 74,999</option>
				  <option>75,000 - 99,999</option>
				  <option>100,000 - 119,999</option>
				  <option>120,000 - 149,999</option>
				  <option>150,000 - 299,999</option>
				  <option>> 300,000</option>
				  </select>
				</div>
				</div>
			  </div>
			  
			  <div class="clearfix"></div>
			  <div class="form-group">
			  <label class="col-sm-12 control-label">Interest</label>
				<div class="col-sm-2">
				  <div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Electronics</label>
                    </div>
                    </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1"> Travel</label>
                    </div>
					 </div><div class="col-sm-2">
				  <div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Industrial</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1"> Food & Bewerage</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Books & Stationery</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Fashion</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Sports & Outdoor</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1"> Home Decoration</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Present</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Weddings</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Furniture</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Health & Beauty</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Automotive</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Construction</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Souvenirs</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Restaurant & Cafe</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-green radio-inline">
                        <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                        <label for="inlineRadio1">Pets</label>
                    </div>
				</div>
			  <div class="clearfix"></div>
			  </div>
			  </div>
 	  <hr> 
	<div id="payment-method">
			
			<h1>Payment Method</h1>
			
			   <div class="col-sm-5">
			  <div class="form-group">
			  <label class="col-sm-12 control-label">&nbsp;</label>
				<label class="col-sm-4 control-label">Billing Address</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="" class="form-control">
				  <input type="text" placeholder="" class="form-control">
				  <input type="text" placeholder="" class="form-control">
				</div>
				 <label class="col-sm-12 control-label">&nbsp;</label>
				<label class="col-sm-4 control-label">Delivery Address</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="" class="form-control">
				  <input type="text" placeholder="" class="form-control">
				  <input type="text" placeholder="" class="form-control">
				</div>				
			  </div>
			  </div>
			  
			  <div class="col-sm-5 col-sm-offset-2">
				<div class="form-group">	
				<label class="col-sm-12 control-label">&nbsp;</label>				
				<label class="col-sm-4 control-label">Billing Address</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="" class="form-control">
				  <input type="text" placeholder="" class="form-control">
				  <input type="text" placeholder="" class="form-control">
				</div>
				</div>
			  </div>
			  
			  <div class="clearfix"></div>
			  </div>
   <hr> 
	<div id="shipping-detail">
			
			<h1>Shipping Detail</h1>
			
			<div class="col-sm-10">
				  <div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Visa/Master</label>
                    </div>
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> OlineBanking</label>
                    </div>
				  <div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Paypal</label>
                    </div>
				</div>
				
			  
			  <div class="col-sm-5">
				<div class="form-group">	
				<label class="col-sm-12 control-label">&nbsp;</label>				
				<label class="col-sm-12 control-label">Card Number</label>
				<div class="col-sm-12">
				  <input type="text" placeholder="" class="form-control">
				</div>
				</div>
				<div class="form-group">					
				<label class="col-sm-12 control-label">Name on Card Number</label>
				<div class="col-sm-12">
				  <input type="text" placeholder="" class="form-control">
				</div>
				</div>
				<div class="form-group">			
				<label class="col-sm-12 control-label">Exppiry Date</label>
				<div class="col-sm-12">
				  <input type="text" placeholder="" class="form-control">
				</div>
				</div>
				<div class="form-group">		
				<label class="col-sm-12 control-label">&nbsp;</label>	
				<div class="col-sm-6">
				  <input type="text" placeholder="" class="form-control">
				</div>		
				<label class="col-sm-6 control-label">cvv/cvv</label>
				</div>
			  </div>
			  
			  <div class="clearfix"></div>
			  </div>  
			  
		 <hr>
		 <div id="open-biss">
			
			<div class="col-xs-12"> 		
				<a href="#" class="btn btn-orange col-sm-2"><i class="fa fa-suitcase"></i> Open Business</a>		 
			 </div>  <div class="clearfix"></div>
			<div class="form-group">
			<label class="col-sm-12 control-label">&nbsp;</label>	
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
				  <input type="text" placeholder="*Compulsory" class="form-control">
				</div>
				<label class="col-sm-2 control-label">Solution</label>
				<div class="col-sm-10">
				  <div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Mr</label>
                    </div>
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> Ms</label>
                    </div>
				  <div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Mrs</label>
                    </div>
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> Other</label>
                    </div>
				<div class="radio radio-warning radio-inline">
						<input type="text" class="form-control">
                    </div>
				</div>
			  </div>
			   <div class="col-sm-5">
			  <div class="form-group">
			  <label class="col-sm-12 control-label">&nbsp;</label>
				<label class="col-sm-4 control-label">Gender</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" placeholder="">
				</div>
				<label class="col-sm-4 control-label">Language</label>
				<div class="col-sm-8">
				  <input type="text" placeholder="" class="form-control">
				</div>
				<label class="col-sm-4 control-label">Mobile Number</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" placeholder="*Compulsory">
				</div>
				<label class="col-sm-4 control-label">Occupation</label>
				<div class="col-sm-8">
				    <select class="selectpicker show-menu-arrow form-control" data-style="btn-orange" >
					<option></option></select>
				</div>
				
					<label class="col-sm-12 control-label">&nbsp;</label>
					
				<label class="col-sm-4 control-label">Company Name</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" placeholder="if using company account">
				</div>
				<label class="col-sm-4 control-label"> Reg No</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" placeholder="if using company account">
				</div>
				<label class="col-sm-4 control-label">Type</label>
				<div class="col-sm-8">
				
				 <select class="selectpicker show-menu-arrow form-control" data-style="btn-orange" >
				  <option>Dealers</option>
				  <option>Merchant Consultant</option>
				  <option>SMM</option>
				  </select>
				</div>
				
					<label class="col-sm-12 control-label">&nbsp;</label>
					
				<label class="col-sm-4 control-label">Username</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" placeholder="">
				</div>
				<label class="col-sm-4 control-label">Password</label>
				<div class="col-sm-8">
				  <input type="password" class="form-control" placeholder="">
				</div>
				<label class="col-sm-4 control-label">Reconfirm</label>
				<div class="col-sm-8">
				  <input type="password" class="form-control" placeholder="">
				</div>
			  </div>
			  </div>
			  
			  <div class="col-sm-5 col-sm-offset-2">
				<div class="form-group">	
				<label class="col-sm-12 control-label">&nbsp;</label>				
				<label class="col-sm-3 control-label">Dob:</label>
				<div class="col-sm-9">
				   <input type="text" class="form-control" placeholder="dd/mm/year">
				</div>				
				<label class="col-sm-3 control-label">Annual:</label>
				<div class="col-sm-9">
				  <select class="selectpicker show-menu-arrow form-control" data-style="btn-orange" >
				  <option> < 30,000</option>
				  <option>30,000 - 49,999</option>
				  <option>50,000 - 59,999</option>
				  <option>60,000 - 74,999</option>
				  <option>75,000 - 99,999</option>
				  <option>100,000 - 119,999</option>
				  <option>120,000 - 149,999</option>
				  <option>150,000 - 299,999</option>
				  <option>> 300,000</option>
				  </select>
				</div>
				</div>
			  </div>
			  
			  <div class="clearfix"></div>
			  <div class="form-group">
			  <label class="col-sm-12 control-label">Interest</label>
				<div class="col-sm-2">
				  <div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Electronics</label>
                    </div>
                    </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> Travel</label>
                    </div>
					 </div><div class="col-sm-2">
				  <div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Industrial</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> Food &amp; Bewerage</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Books &amp; Stationery</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Fashion</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Sports &amp; Outdoor</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> Home Decoration</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Present</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Weddings</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Furniture</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Health &amp; Beauty</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Automotive</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Construction</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Souvenirs</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Restaurant &amp; Cafe</label>
                    </div>
					 </div><div class="col-sm-2">
				<div class="radio radio-warning radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1">Pets</label>
                    </div>
				</div>
			  <div class="clearfix"></div>
			  </div>
			 
			 
			  <div class="clearfix"></div>
 <h1>Bank Details</h1>
  <div class="form-group">  
  <label class="col-sm-2 control-label">Account Name </label>
    <div class="col-sm-4">
      <input type="text" class="form-control">
    </div>
    </div>
	<div class="form-group">
    <label class="col-sm-2 control-label">Account Number </label>
    <div class="col-sm-4">
      <input type="text" class="form-control">
    </div>
    </div>
	<div class="form-group">
    <label class="col-sm-2 control-label">Bank </label>
    <div class="col-sm-4">
      <input type="text" class="form-control">
    </div>
    </div>
	<div class="form-group">
    <label class="col-sm-2 control-label">Bank Code </label>
    <div class="col-sm-4">
      <input type="text" class="form-control">
    </div>
    </div>
	<div class="form-group">
    <label class="col-sm-2 control-label">IBAN </label>
    <div class="col-sm-4">
      <input type="text" class="form-control">
    </div>
    </div>
	<div class="form-group">
    <label class="col-sm-2 control-label">SWIFT </label>
    <div class="col-sm-4">
      <input type="text" class="form-control">
    </div>
	
    </div>
			 </div>


			  <hr>
			  <div id="smm">
			 
			 <div class="col-xs-12"> 		
				<a class="btn btn-blue col-sm-3" href="#"><i class="glyphicon glyphicon-tower"></i> Social Media Marketeer</a>		 
			 </div>
			 <div class="col-xs-12">
				<br><p class="text-center "><strong>to establish OpenWish you need to link the following Social Media</strong></p><br>
				<label>I wish to:</label>				
			  </div>
			  <div class="link-facebook">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-facebook col-sm-12" href="#">Facebook</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-linkedin">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-linkedin col-sm-12" href="#">Linked In</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-instagram">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-instagram col-sm-12" href="#"><em>Instagram</em></a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-wechat">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-wechat col-sm-12" href="#">WeChat</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-weibo">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-weibo col-sm-12" href="#">Weibo</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-twitter">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-twitter col-sm-12" href="#">Twitter</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			  <div class="link-gplus">
				<label class="col-sm-2 control-label">Link with</label>
			  <div class="col-sm-2 text-center">
				<div class="col-sm-12  btn btn-gray"><strong>by using</strong></div>				
				  <a class="btn btn-gplus col-sm-12" href="#">Google+</a>			
			  </div>			  
			  <div class="col-sm-1 text-center"><strong>or</strong></div>			  
			  <div class="col-sm-4">
			  <div class="form-group">
				<div class="col-sm-10">
				  <input type="email" placeholder="username" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="Password">
				</div>
			  </div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			
			   </div>
  <p><em>*anyone who register as social media marketeer will automatically register for OpenWish</em></p>

    <div class="clearfix"> </div>
	  <div class="pull-right"> 
	  <input type="submit" class="btn btn-green btn-lg" value="Send">  
	  </div>
</form>


			</div>
		</div>		
	</div><!--End main cotainer-->
</section>
@stop