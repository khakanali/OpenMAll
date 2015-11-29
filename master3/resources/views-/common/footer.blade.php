<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><img alt="OpenSupermall" src="images/logo-white.png" /></div>
        </div>
        <div class="row row-col-5">
        	<div class="col-md-2 col-sm-6">
    <div class="footer-menu">
        <h2 class="footer-wid-title">About OpenSupermall</h2>
		<ul>
			<li><a>Company Profile</a></li>
			<li><a>Jobs</a></li>
			<li><a>Advertise with us</a></li>
			<li><a>Terms & Conditions</a></li>
			<li><a>Privacy Policy</a></li>
		</ul>
    </div>
</div>
            <div class="col-md-2 col-sm-6">
    <div class="footer-menu">
        <h2 class="footer-wid-title">Buyer</h2>
        <ul>
            <li><a>Buyer Registration</a></li>
            <li><a>How To Buy</a></li>
            <li><a>How To Return</a></li>
        </ul>                     
    </div>
</div>
            <div class="col-md-2 col-sm-6">
    <div class="footer-menu">
        <h2 class="footer-wid-title">Merchant</h2>
        <ul>
            <li><a href="{{ URL::to('sign_up') }}">Merchant Registration</a></li>
            <li><a>How To Sell</a></li>
        </ul>                    
    </div>
</div>
            <div class="col-md-2 col-sm-6">
    <div class="footer-menu">
        <h2 class="footer-wid-title">Subscription</h2>
        <ul>
            <li><a class="disabled-menu-item">News</a></li>
            <li><a class="disabled-menu-item">Download Apps</a></li>
            <li><a>OpenWish</a></li>
            <li><a>Social Media Marketeer</a></li>
        </ul>
    </div>
</div>
            <div class="col-md-2 col-sm-6">
    <div class="footer-menu">
        <h2 class="footer-wid-title">Help Centre</h2>
        <ul>
            <li><a>Directory</a></li>
            <li><a>Help The Buyer</a></li>
            <li><a>Help The Seller</a></li>
            <li><a>Your Opinion</a></li>
            <li><a>Contact Us</a></li>
        </ul>
    </div>
</div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-4">
                <div class="footer-social">
                    <a href="https://www.facebook.com/OpenSupermall?fref=ts"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/OpenSupermall"><i class="fa fa-twitter"></i></a>
                    <a href="https://my.linkedin.com/in/opensupermall"><i class="fa fa-linkedin"></i></a>
                    <a href="http://weibo.com/OpenSupermall"><i class="fa fa-weibo"></i></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="copyright pull-right">
                    <p>&#169; moixzz.</p>
                </div>
            </div>
        </div>
    </div>
</div>

	<!-- render modal partials at the bottom to prevent unwanted styling issues -->
	<div class="modal fade" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content col-lg-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <h4 class="modal-title">OpenSupermall</h4>
            </div>
            <div class="modal-body col-lg-12">
                <ul class="nav nav-tabs nav-justified"  id="order_form">
                    <li class="active"><a href="#signin" data-toggle="tab">Sign in</a></li>
                    <li><a href="#signup" data-toggle="tab">Sign up</a></li>
                </ul>
                <div class="tab-content no-margin col-lg-12">
                    <div class="tab-pane fade active in col-lg-12" id="signin">
                        <div id="signinSubmissionResponse" class="collapse col-lg-12"></div>
                        <div class="col-lg-12"><br>
                            <!-- add html: { onsubmit: "performSignIn(this); return false;" } to enable AJAX sign in -->
                            <form role="form" class="new_user" id="new_user" action="http://www.opensupermall.com/users/sign_in" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="6ONT/5lI99ARVM6IRDvDr9msEle+JpWjC2OIM5Hye8hBr7w+ZWhm3SKGtHa/GqUbncXw8R6CZkz+/V3JpS6dSA==" />
                                <div class="form-group has-feedback"><input autofocus="autofocus" placeholder="Input your email address" required="required" class="form-control" type="email" value="" name="user[email]" id="user_email" /><span class="glyphicon glyphicon-user form-control-feedback"></span></div>
                                <div class="form-group has-feedback"><input autocomplete="off" placeholder="Input your password" required="required" class="form-control" type="password" name="user[password]" id="user_password" /><span class="glyphicon glyphicon-lock form-control-feedback"></span></div>
                                <div class="checkbox checkbox-info checkbox-circle text-center">
                                    <div class="form-group no-margin">
                                        <input name="user[remember_me]" type="checkbox" value="1" id="user_remember_me">
                                        <label for="user_remember_me" class="padding-left-1">Keep me signed in</label>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <a class="btn btn-default btn-xs" href="{{ URL::to('new') }}">Forgot your password?</a>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="commit" value="Sign in" class="btn btn-default" />
                                </div>
</form>                        </div>
                    </div>
                    <div class="tab-pane fade col-lg-12" id="signup">
                        <div id="signupSubmissionResponse" class="collapse col-lg-12"></div>
                        <div class="col-lg-12"><br>
                            <form id="signupForm" role="form" class="form-horizontal" action="/users" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="yHRt1MefAy1MNduIOyAGOu0ZEfOd53bi+JDkzzHzlAVhOIIVO7+SIH/noXbAAWCOqXDzVT1DhQ0NDjE1BS9yhQ==" />
                                <div class="form-group has-feedback"><div class="col-lg-12 col-sm-offset-0"><input placeholder="Input your name" required="required" class="form-control" type="text" name="user[name]" id="user_name" /><span class="glyphicon glyphicon-user form-control-feedback"></span></div></div>
                                <div class="form-group has-feedback"><div class="col-lg-12 col-sm-offset-0"><input placeholder="Input your email address" required="required" class="form-control" type="email" value="" name="user[email]" id="user_email" /><span class="glyphicon glyphicon-envelope form-control-feedback"></span></div></div>
                                <div class="form-group has-feedback"><div class="col-lg-12 col-sm-offset-0"><input autocomplete="off" placeholder="Input your password" required="required" class="form-control" type="password" name="user[password]" id="user_password" /><span class="glyphicon glyphicon-lock form-control-feedback"></span></div></div>
                                <div class="form-group no-margin-bottom has-feedback"><div class="col-lg-12 col-sm-offset-0"><input autocomplete="off" placeholder="Input your password again" required="required" class="form-control" type="password" name="user[password_confirmation]" id="user_password_confirmation" /><span class="glyphicon glyphicon-lock form-control-feedback"></span></div></div>
                                <div class="checkbox checkbox-info checkbox-circle col-lg-12 margin-bottom-10">
                                    <div class="col-lg-offset-2 col-lg-8 no-padding">
                                        <input name="agree_to_tnc" type="checkbox" value="true" id="agree_to_tnc" required>
                                        <label for="agree_to_tnc">I agree to the terms and conditions of usage.</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="commit" value="Sign up" class="btn btn-default" />
                                </div>
</form>                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer col-lg-12">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div style="background-color:black">
<br/>
<p style="color:white"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp We accept: </p>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src= "images/Tiny/paypal.png" /> &nbsp <img src= "images/Tiny/American-Express.png" /> &nbsp <img src= "images/Tiny/Cirrus.png" /> &nbsp <img src= "images/Tiny/Cash.png" /> &nbsp <img src= "images/Tiny/Delta.png" /> &nbsp <img src= "images/Tiny/Diners-Club.png" /> &nbsp <img src= "images/Tiny/Discover.png" /> &nbsp <img src= "images/Tiny/Discover-Network.png" /> &nbsp <img src= "images/Tiny/Dollar.png" /> &nbsp <img src= "images/Tiny/eCheck.png" /> &nbsp <img src= "images/Tiny/Euro.png" /> &nbsp <img src= "images/Tiny/Gift-Card.png" /> &nbsp <img src= "images/Tiny/JCB.png" />
<br/>
<br/>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src= "images/Tiny/Maestro.png" /> &nbsp <img src= "images/Tiny/Mastercard.png" /> &nbsp <img src= "images/Tiny/Pound.png" /> &nbsp <img src= "images/Tiny/Solo.png" /> &nbsp <img src= "images/Tiny/Switch.png" /> &nbsp <img src= "images/Tiny/Visa.png" /> &nbsp <img src= "images/Tiny/Wirecard.png" />
<br/>

</div>