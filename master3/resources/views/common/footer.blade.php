<!--Begin Footer-->
<footer>
    <div class="logo-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <img class="img-responsive" alt="Logo" src="images/footer-logo.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container footer_top">
        <div class="row">

            <div class="col-sm-3">
                <h3>About Opensupermall</h3>
                <ul>
                    <li>
                        {!! link_to('/about_us','About Us') !!}
                    </li>
                    <li>
                        {!! link_to_route('job.index','Job') !!}
                    </li>
                    <li>
                        {!! link_to_route('advertise.index','Advertise with us') !!}
                    </li>
                    <li>
                        {!! link_to_route('terms_cond.index','Term & Conditions') !!}
                    </li>
                    <li>
                        {!! link_to_route('privacy.index','Privacy Policy') !!}
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h3>Buy</h3>
                <ul>
                    <li><a>Buyer's Registration</a></li>
                    <li>
                        {!! link_to('howtobuy','How to Buy') !!}
                    </li>
                    <li><a>How to Return</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h3>Sell</h3>
                <ul>
                    <li>
                        {{--helping link
                        http://laravel-recipes.com/recipes/191/generating-a-html-link-to-a-controller-action--}}
                        {!! Html::linkAction('UserController@createMerchant', 'Seller\'s Registration') !!}

                    </li>
                    <li>
                        {!! link_to('howtosell','How to Sell') !!}
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h3>Subscriptions</h3>
                <ul>
                    <li>
                        {!! link_to_route('newsletter.index',"News") !!}
                        <a></a>
                    </li>
                    <li>
                        {!! link_to_route('downloads.index',"Download Apps") !!}
                    </li>
                    <li><a>OpenWish</a></li>
                    <li><a>Social Media Marketeer</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-sm-offset-1">
                <h3>Help Center</h3>
                <ul>
                    <li>
                        {!! link_to_route('directory.index',"Directory") !!}
                    </li>
                    <li>
                        {!! link_to_route('buyerhelp.index',"Help the Buyer") !!}
                    </li>
                    <li>
                        {!! link_to_route('sellerhelp.index',"Help the Seller") !!}
                    </li>
                    <li>
                        {!! link_to_route('feedback.index',"Feedback") !!}
                    </li>
                    <li>
                        {!! link_to_route('contactus.index',"Contact Us") !!}
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>


            <div class="col-sm-4 social-links">
                <ul class="list-inline">
                    <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://www.weixin.com/" target="_blank"><i class="fa fa-weixin"></i></a></li>
                    <li><a href="http://www.weibo.com/" target="_blank"><i class="fa fa-weibo"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-8 copyright text-right"><p>&copy; Intermedius OpenSupermall Sdn Bhd <small>(1144993-D)</small> All Rights Reserved 2015.</p></div>
        </div>
    </div>
    <div class="footer_lower">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><em>We Accept:</em></p>
                    <div class="icons-footer">
                        <a href="#">
                            {!! Html::image("images/tiny/American-Express.png", "Icon") !!}
                            {!! Html::image("images/tiny/Cash.png", "Icon") !!}
                            {!! Html::image("images/tiny/Cirrus.png", "Icon") !!}
                            {!! Html::image("images/tiny/Delta.png", "Icon") !!}
                            {!! Html::image("images/tiny/Diners-Club.png", "Icon") !!}
                            {!! Html::image("images/tiny/Discover-Network.png", "Icon") !!}
                            {!! Html::image("images/tiny/Discover.png", "Icon") !!}
                            {!! Html::image("images/tiny/Dollar.png", "Icon") !!}
                            {!! Html::image("images/tiny/Euro.png", "Icon") !!}
                            {!! Html::image("images/tiny/Gift-Card.png", "Icon") !!}
                            {!! Html::image("images/tiny/JCB.png", "Icon") !!}
                            {!! Html::image("images/tiny/Maestro.png", "Icon") !!}
                            {!! Html::image("images/tiny/Mastercard.png", "Icon") !!}
                            {!! Html::image("images/tiny/PayPal.png", "Icon") !!}
                            {!! Html::image("images/tiny/Pound.png", "Icon") !!}
                            {!! Html::image("images/tiny/Solo.png", "Icon") !!}
                            {!! Html::image("images/tiny/Switch.png", "Icon") !!}
                            {!! Html::image("images/tiny/Visa.png", "Icon") !!}
                            {!! Html::image("images/tiny/Wirecard.png", "Icon") !!}
                            {!! Html::image("images/tiny/eCheck.png", "Icon") !!}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<span id="top-link-block" class="hidden thumbnail">
    <a href="#top" class=" btn btn-lg btn-green"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="fa fa-angle-double-up fa-lg"></i>
    </a>
</span><!-- /top-link-block -->


@include('common.login')