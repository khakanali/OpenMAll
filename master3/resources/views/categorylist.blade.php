@extends("common.default")
@section("content")
<section class="categorylist">
        <div class="container"><!--Begin main cotainer-->
            <div class="row">
                <div data-spy="scroll" style="display: none;" class="static-tab">
                    <div class="text-center tab-arrow">
                        <span class="fa fa-sort"></span>
                    </div>
                    <div class="floor-directory">
                        <ul class="nav nav-pills nav-stacked">
                            @foreach($allCategories as $cat)
                                <li class="floor-navigation" role="presentation"><a href="#{{$cat->name}}">
                                <span class="btn-elevator">
                                    <img src="{{asset("images/category/logo-green/".$cat->logo)}}" alt="">
                                </span>
                                        <span class="back">{{$cat->description}}</span>
                                        <br>
                                    </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="catlist col-sm-11 col-sm-offset-1">
                    <img src="{{asset('images/Buyerregistration.png')}}" title="banner" class="img-responsive banner">
                    <hr>
                    <h1>Category</h1>
                    @foreach($allCategories as $cat)
                        <div id="{{$cat->name}}">
                            <h2><img src="{{asset("images/category/logo-green/".$cat->logo)}}" width="50" height="50">&nbsp;&nbsp;&nbsp;{{$cat->description}}</h2>
                            <div class="col-xs-offset-1">
                                <ul class="list-unstyled" style="font-size:130%">
                                    @foreach($cat->subCatLevel1 as $subCat)
                                        <li><a href="{{URL::to('sub-cat-details',array($cat->id, $subCat->id,false))}}">{{$subCat->description}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div><!--End main cotainer-->
    </section>
@stop