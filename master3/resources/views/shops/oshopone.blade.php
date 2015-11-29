@extends("common.default")

@section("content")


    <section class="categorylist">

        <img width="100%" class="width-100 img-responsive" src="{{ asset('images/signboard/'.$merchant->id .'/' .$profile->signboard->path) }}" alt="the-leather-house" />

            <div class="container">
                <div class="row" style=" margin-top: 10px; margin-bottom: 10px;">
                    <div  class="navbar-collapse collapse ">
                        {{-- <ul  class="nav navbar-nav custom-navbar">
                            <li class="pull-left" ><a style="color:white; font-size:25px;" href="/" class="active">About</a></li>
                            <li><a style="color:white; font-size:25px;">Certificate</a></li>
                            <li><a style="color:white; font-size:25px;">Supplier</a>&nbsp; &nbsp; &nbsp;</li>
                        </ul> --}}
                        <ul class="nav navbar-nav">
                            <li><a style="color: #000; font-size:25px;" href="/" class="active">About</a></li>
                            <li><a style="color: #000; font-size:25px;" href="#">Certificate</a></li>
                            <li><a style="color: #000; font-size:25px;" href="#">Dealer</a></li>
                            <li><a style="color: #000; font-size:25px;" href="#">Group</a></li>
                            <li><a style="color: #000; font-size:25px;" href="#">OEM</a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li ><button style="background:rgb(0,99,98);border:none; padding: 10px;" class=""><a style="color:white; text-decoration:none" href=""><strong><i class="fa fa-link fa-lg"></i></strong>&nbsp;&nbsp;&nbsp;Auto Link&nbsp;&nbsp;&nbsp;&nbsp;</a></button></li>
                            <li><a style="color:#000; font-size: 23px;" herf="">OFFICIAL SHOP</a></li>
                            <li  style="color:white"><img style="width:30px; height:20px" src="{{ asset('images/malaysia.png') }}">&nbsp;<p style="background:black">Malaysia</p></li>
                            <li  style="background:rgb(224,40,120); color:white">&nbsp;&nbsp; &nbsp;Like &nbsp; &nbsp;&nbsp; &nbsp;</li>
                        </ul>
                    </div>
                </div>

                <div class="row" style="margin-top:10px; margin-bottom: 10px">
                    <div  class="col-md-12">
                        <img class="width-100 img-responsive" src="{{ asset('images/ads/'.$merchant->id.'/ads.jpg') }}" alt="the-leather-house" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
                        <div style="color:white; margin-right:0px; margin-top:20px;" class="pull-right">
                            3 results &nbsp; &nbsp; Sort By:&nbsp; &nbsp;
                            <select style="width:150px;color:black">
                                <option>Price:low to high</option>
                                <option>Price: High to low</option>
                            </select><span class="caret"></span>
                        </div>
                    </div>
                </div>
                <div class="row">

                        {{--<ul class="navGreenBar">--}}
                            {{--<li><a href=""><i class="fa fa-sort"></i></a></li>--}}
                            {{--<li class=""><a href="">Lubricant Oil</a></li>--}}
                            {{--<li class=""><a href="">Belts</a></li>--}}
                            {{--<li class=""><a href="">Lights</a></li>--}}
                            {{--<li class=""><a href="">Exhaust Pipe</a></li>--}}
                            {{--<li class=""><a href="">Inner Spare Parts</a></li>--}}
                        {{--</ul>--}}

                    <div data-spy="scroll" class="static-tab" style="display: none;">

                        <ul class="nav nav-pills nav-stacked">
                            <li><a href=""><i class="fa fa-sort"></i></a></li>
                            @foreach($merchant->categories as $category)
                                <li class=""><a href="">{{ $category->description }}</a></li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="col-md-2">
                        <img width="100%" class="img-responsive" src="{{ asset('images/bunting/'.$merchant->id . '/' .$profile->bunting->path) }}" alt="the-leather-house" />
                    </div>

                    <div class="col-sm-10">

                        <div class="row cat-items">

                            @foreach($merchant->categories as $category)

                                <div class="col-md-12 floor-board nopadding">
                                    <div class="col-xs-12 col-md-4">
                                        <h3>{{ $category->description }}</h3>
                                    </div>
                                </div>   

                                @foreach($category->products as $product)
                                    <div class="p-box col-md-4 col-sm-4" style="padding-right: 2px;">
                                        <div class="cat-img">
                                            <img class="img-responsive"
                                                 src="{{ asset('images/products/'.$merchant->id. '/'.$product->photo_1) }}">
                                        </div>
                                        <h5 class="pull-left" style="width:160px">{{$product->name}}</h5>
                                        @if ($product->retail_price == 0)
                                            <strong class="pull-right margin-top">
                                                RM{{$product->original_price/100}}</strong>
                                        @else
                                            <strike style="color:red" class="pull-right margin-top">
                                                <strong style="color:black" class="margin-top">
                                                    RM{{$product->original_price/100}}</strong>
                                            </strike>
                                            <strong style="color:red;font-size:130%;
                                            position:absolute;margin-top:25px;right:15px"
                                                                    class="pull-right;">
                                                                RM{{$product->retail_price/100}}</strong>
                                                            <strong style="color:red;font-size:130%;
                                            position:absolute;margin-top:45px;right:15px"
                                                    class="pull-right;">
                                                -{{number_format((($product->original_price - $product->retail_price)/$product->original_price)*100)}}%</strong>

                                        @endif
                                        <div class="clearfix"> </div>
                                        <ul class="pull-left list-inline">
                                            <li class="btn-green"><i class="fa fa-plus"></i></li>
                                            <li class="btn-pink"><i class="fa fa-heart"></i></li>
                                            <li class="btn-darkgreen"><i class="fa fa-shopping-cart"></i></li>
                                        </ul>

                                        <div class="clearfix"> </div>
                                    </div>
                                @endforeach
                                @endforeach 
                            <img style=" width:100%;height:450px;"
                                  src="{{ asset('images/vbanner/'.$merchant->id . '/'. $profile->vbanner->path) }}">
                            <br/>
                            <br/>
                        </div>

                    </div>

            </div>



        </div><!-- End Container -->

    </section>


@stop
