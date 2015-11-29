@extends('common.default')
		
		@section('content')
<script>
$(document).ready(function(){
    $('.static-tab ul li a').on('click', function(){
        $('html,body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 1200);
    });
});
$(window).scroll(function() {
	 var scroll = $(window).scrollTop();
	if(scroll > 100){
		$('#ahr').show(1000);
	}if(scroll <= 100){
		$('#ahr').hide(1000);
	}

});
    </script>
<div class="maincontent-area">


 <div class="container">
        <div class="row">
            <div data-spy="scroll" class="static-tab" style="display: none;">
                <div class="text-center tab-arrow"><span class="fa fa-sort"></span></div>
                <div class="floor-directory">
                <ul class="nav nav-pills nav-stacked">
                    @foreach($category_data as $categories)
                        <li class="floor-navigation"><a href="#{{$categories['name']}}"><span class="btn-elevator">{{$categories['floor']}}F</span><span class="back">{{$categories['desc']}}</span></a></li>
                    @endforeach
                </ul>
                </div>
            </div>
            <div class="col-sm-11 col-sm-offset-1">
                @foreach($adSlot_data as $products)

                    @if($products['placement'] =="1")
                            <div class="boxrow1">
                        @foreach($products['Products'] as $product)
                                <div class="col-sm-9 nopadding">
                                    <img class="img-responsive" src="images/product/{{$product['id']}}/{{$product['photo_1']}}" alt="{{$product['adslot_id']}}" />
                                </div>
                        @endforeach
                    @endif
                    @if($products['placement'] =="2")
                         @foreach($products['Products'] as $product)
                            <div class="col-sm-3 nopadding">
                                <img class="img-responsive" src="images/product/{{$product['id']}}/{{$product['photo_1']}}" alt="{{$product['photo_1']}}" />
                            </div>
                         @endforeach
                        <div class="clearfix"></div>
                            </div>
                    @endif
                    @if($products['placement'] =="3")
                        <div class="boxrow2">
                        @foreach($products['Products'] as $product)
                            <div class="col-sm-3 nopadding" style="border:solid 1px lightgrey">
                                <img  src="images/product/{{$product['id']}}/{{$product['photo_1']}}" alt="{{$product['photo_1']}}" class="img-responsive" />
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                        </div>
                    @endif
                    @if($products['placement'] =="4")
                    <div class="boxrow3">
                        @foreach($products['Products'] as $product)
                            <div class="col-sm-2 nopadding" style="border:solid 1px lightgrey;margin-bottom: 10px;">
                                <img  src="images/product/{{$product['id']}}/{{$product['photo_1']}}" alt="{{$product['photo_1']}}" class="img-responsive" />
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    @endif
                @endforeach
            <div class="col-xs-12" id = "ahr" style="margin-bottom: 50px; display:none">
                <div id="all-floors">
                    @foreach($category_data as $categories)

                        <div class="col-xs-12 nopadding floor" >
                            <article id="{{$categories['name']}}" class="floor-content">
                                <div class="row floor-board" style="background-color: {{$categories['color']}};">
                                    <div class="floor-numbering" style="background-color:{{$categories['color']}};">
                                        <div class="floor-number-wrapper">{{$categories['floor']}}F</div></div>
                                    <div class="floor-level" style="background-color: {{$categories['color']}};">
                                        <div class="col-sm-1"> <span class="fa fa-tablet hide"></span>
                                           <img src="images/category/logo/{{$categories['logo']}}" alt="{{$categories['logo']}}" class="img-responsive" style="height:auto; padding-top:2px;"></div>
                                        <div class="col-sm-4"> {{$categories['desc']}} </div>
                                        <div class="col-sm-7 text-right">   <a href="/buildings" class="view-more">View More</a></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel">
                                        <div class="panel-body no-padding-top no-padding-bottom shadow-e5">
                                            <div class="row">
                                                <div class="boxrow4-l col-sm-4 no-padding floor-border" >
                                                    <a href="{{ URL::to('12') }}">
                                                        <img src="images/product/{{$categories['latest_photo_id']}}/{{$categories['latest_photo']}}" alt="Missing" class="img-responsive"/>
                                                    </a>
                                                </div>
                                                <div class="col-sm-8 no-padding floor-border">
                                                    <div class="boxrow4">
                                                        @foreach($categories['random_photos'] as $random_photos)
                                                            <div class="col-sm-4 no-padding">
                                                                <span class="badge">RM {{$random_photos['retail_price']}}</span>
                                                                <span class="badge-cutoff"><strong>

        {{--*/ $res = number_format((($random_photos['original_price'] - $random_photos['retail_price']) / $random_photos['original_price']) * 100);
                                                                                      if($res < 0) $res = 0; /*--}}
                                                                <span >{{$res}}</span>%</strong> off</span>

                                                                <img src="images/product/{{$random_photos['id']}}/{{$random_photos['photo_1']}}" alt="Missing" class="img-responsive"/>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-md-12 brandlogo nopadding">
                                                    @foreach($categories['brands'] as $brands)
                                                        <div class="col-sm-2 nopadding"><img src="images/brandslogo/{{$brands['brand']['logo']}}" alt="Missing" class="img-responsive"/></div>
                                                    @endforeach
                                                   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @foreach($adSlot_data as $products)
                                @foreach($products['Products'] as $product)
                                    @if($categories['floor']== 3 and $products['placement'] =="5")
                                    <div class="row">
                                        <div class="col-xs-12 nopadding">
                                            <img src="images/product/{{$product['id']}}/{{$product['photo_1']}}" alt="{{$product['adslot_id']}}" class="img-thumbnail">
                                        </div>
                                    </div>
                                    @endif
                                    @if($categories['floor']== 6 and $products['placement'] =="6")
                                    <div class="row">
                                        <div class="col-xs-12 nopadding">
                                            <img src="images/product/{{$product['id']}}/{{$product['photo_1']}}" alt="{{$product['adslot_id']}}" class="img-thumbnail">
                                        </div>
                                    </div>
                                    @endif
                                    @if($categories['floor']== 10 and $products['placement'] =="7")
                                    <div class="row">
                                        <div class="col-xs-12 nopadding">
                                            <img src="images/product/{{$product['id']}}/{{$product['photo_1']}}" alt="{{$product['adslot_id']}}" class="img-thumbnail">
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@stop

