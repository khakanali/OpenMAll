<div class="header-area top-menu-bar">
    <div class="container">
        <div class="row">
            <!-- right start -->
            <div class="col-lg-12">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">
                                <span class="key">Currency : </span><span class="value">MYR </span><b class="caret"></b>
                            </a>
                             <ul class="dropdown-menu">
                                <li><a>MYR</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">
                                <span class="key">Language : </span><span class="value">English </span><b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a>English</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">
                                <span class="key">Country : </span><span class="value">MY </span><b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a>MY</a></li>
                            </ul>
                        </li>
                            <li><a href="#loginModal" data-toggle="modal"><i class="fa fa-user"></i> Login</a></li>
                    </ul>
                </div>
            </div>
            <!-- right end -->
        </div>
    </div>
</div>
		
		
		<script>
		$(function(){
    $('#header_nav').data('size','big');
});

$(window).scroll(function(){
    if($(document).scrollTop() > 0)
    {
        if($('#header_nav').data('size') == 'big')
        {
            $('#header_nav').data('size','small');
            $('#header_nav').stop().animate({
                height:'113px'
            },600);
        }
    }
    else
    {
        if($('#header_nav').data('size') == 'small')
        {
            $('#header_nav').data('size','big');
            $('#header_nav').stop().animate({
                height:'150px'
            },600);
        }  
    }
});
		
		</script>
		
		
		
		
		
		<div id="header_nav">
		
		<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="#"><img alt="OpenSupermall" width="300px" src="images/logo-black.png" /></a></h1>
                </div>
            </div>                
            <!-- shopping cart start -->
            <div class="col-sm-6">
                
<div class="shopping-item" id="shoppingCart">
    <a href="#" class="dropdown-toggle cart-icon" data-toggle="dropdown">
        <span class="cart-amount">
                Cart is Empty
        </span><i class="fa fa-shopping-cart"></i>
        <span class="product-count">0 </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-right no-padding">
        <li>
            <div class="shopping-cart panel panel-default">
                <div class="cart-heading panel-heading text-center">
                    <strong>Your cart</strong>
                </div>
                <ul class="cart-body list-group">
                        <li class="list-group-item text-center">
                            <p class="list-group-item-text">Your cart is empty!</p>
                        </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
            </div>
            <!-- shopping cart end -->
        </div>
    </div>
</div>

</div>




		<div class="mainmenu-area" >
    <div class="container" >
        <div class="row">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <div class="navbar-collapse collapse" style="margin-left:-100px">
                <ul class="nav navbar-nav custom-navbar">
                    <li><a href="/"><label style="font-family:Arial, Helvetica, sans-serif">Home</label></a></li>
                    <li><a><label style="font-family:Arial, Helvetica, sans-serif">Category</label></a></li>
                    <li><a><label style="font-family:Arial, Helvetica, sans-serif">Brand </label></a></li>
                    <li><a><label style="font-family:Arial, Helvetica, sans-serif">O-Shop</label></a></li>
                    <li><a><label style="font-family:Arial, Helvetica, sans-serif">SMM</label></a></li>
                </ul>
                <div class="pull-right" style="margin-right:-30px">
                    <form class="navbar-form col-xs-7 col-sm-7" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <span class="input-group-btn">
                                <a class="btn btn-default" href="{{ URL::to('search') }}" role="button"><i class="glyphicon glyphicon-search"></i></a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>