<?php
$cf = new \App\lib\CommonFunction();
?>

<header>

    <!--Begin Logo Section -->
    <div class="top-header">
        <!--Begin Top Navigation-->
        <nav class="navbar navbar-inverse megamenu  navbar-static-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Welcome User!</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="top-menu">


                    <ul class="nav navbar-nav navbar-right">

                        <li class="hide dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language: English <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($cf->getLanguage() as $lkey=>$lval)
                                    <li><a href="{{$lkey}}">{{$lval}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="hide dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Currency: MYR <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($cf->getCurrency() as $ckey=>$cval)
                                    <li><a href="{{$ckey}}">{{$cval}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/buyerinformation">My Page</a></li>
                        <li><a href="/create_new_user">SignUp</a></li>
                        <li class="nopadding">
                            @if(Auth::check())
                                <a href="#">Logout</a>
                            @else
                                <a href="#"  data-toggle="modal" data-target="#loginModal">Login</a>
                            @endif
                                <a href="#"  data-toggle="modal" data-target="#forgotModal">Forgot Password</a>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group selectLang">
                            <label>Language: </label>
                            <select name="language" class="form-control">
                                @foreach($cf->getLanguage() as $lkey=>$lval)
                                    <option value="{{$lkey}}">{{$lval}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group selectCurr">
                            <label>Currency: </label>
                            <select name="language" class="form-control">
                                @foreach($cf->getCurrency() as $ckey=>$cval)
                                    <option value="{{$ckey}}">{{$cval}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!--End Top Navigation-->

    </div>
    <div class="logo-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-6 logo-holder">
                    <a href="/"><img src="images/logo.png" class="img-responsive" alt="Logo"></a>
                </div>
                <div class="col-md-2 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-6 cart-holder">
                    <div class="cart">
                        <a href="/payment"> Cart is Empty  </a>
                        <i class="fa fa-shopping-cart"></i> <span class="badge"> 0 </span>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Begin Top Navigation-->
    <nav class="navbar navbar-inverse megamenu  navbar-static-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            {{--<form role="search" class="navbar-form navbar-right">--}}
                {{--<div class="input-group input-group-sm">--}}
                    {{--<input type="text" placeholder="Search" class="form-control">--}}
				  {{--<span class="input-group-btn">--}}
					{{--<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>--}}
				  {{--</span>--}}
                {{--</div><!-- /input-group -->--}}
            {{--</form>--}}


            {!! Form::open(array('route' => 'search', 'class'=>'navbar-form navbar-right')) !!}
            <div class="input-group input-group-sm">
                {!! Form::text('search_key_word', null,array('required', 'class'=>'form-control','placeholder'=>'Search')) !!}
                  <span class="input-group-btn">
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				  </span>
            </div><!-- /input-group -->
            {!! Form::close() !!}


            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav">
                    <li class="{{ $cf->set_active('/') }}"><a href="/">Home</a></li>
                    <li class="{{ $cf->set_active('category') }}"><a href="/category">Category</a></li>
                    <li class="{{ $cf->set_active('brand') }}"><a href="/brand">Brand</a></li>
                    <li class="{{ $cf->set_active('oshoplist') }}"><a href="/oshoplist">O Shop</a></li>
                    <li class="{{ $cf->set_active('SMM') }}"><a href="/SMM">SMM</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Merchant<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ $cf->set_active('buyerinformation') }}">
                                <a href="{{route('edit-merchant')}}">Merchant Information</a>
                            </li>
                            <li class="{{ $cf->set_active('create_new_product') }}"><a href="/create_new_product">Product Registration</a></li>
                            <li class="{{ $cf->set_active('album') }}"><a href="/album">Album</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="{{ $cf->set_active('profilesetting') }}"><a href="/profilesetting">Profile Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="{{ $cf->set_active('merchantdashboard') }}"><a href="/merchantdashboard">Merchant Dashboard</a></li>
                        </ul>
                    </li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!--End Top Navigation-->

    <!--Begin BreadCrumb-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {!! Breadcrumbs::render() !!}
            </div>
        </div>
    </div>


    <!--End BreadCrumb-->

</header>