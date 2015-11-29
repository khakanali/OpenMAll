@extends("common.default")

@section("content")

   <section class="categorylist">

        <img width="100%" class="width-100 img-responsive" src="{{ asset('images/signboard/'.$profile->signboard->id .'/' .$profile->signboard->path) }}" alt="the-leather-house" />

            <div class="container">
                <div class="row" style=" margin-top: 10px; margin-bottom: 10px;">
                    <div  class="navbar-collapse collapse ">
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
                        <img class="img-responsive" src="{{ asset('images/ads/26/ads1.jpg') }}" alt="the-leather-house" />
                </div>
        </div><!-- End Container -->

        <div class="oshop-aboutus-content" style="margin-top:30px;"><!--Begin main cotainer-->
        <div class="container padding-20">
            <div class="row">

                <div class="page-header">
                    <h3>About Us</h3>
                </div>
            </div>
            <br/>
            <div class="row nomargin">
                <div class="col-md-12 padding-inner">
                    <p>
                        <span class="paragraph-header">Our History</span><br/>
                    </p>
                    <br/>
                    
                    {!! $merchant->history !!}

                </div>
            </div>
            <div class="row nopadding">
                <hr />
            </div>

            <div class="row nomargin">
                <div class="col-md-12 padding-inner">
                    <p>
                        <span class="paragraph-header">Description</span>
                    </p>
                    <br/>
                    {!! $merchant->description !!}
                </div>
            </div>

            <br>
            <div class="row">
            <img src="{{ asset('images/vbanner/'.$profile->vbanner->id. '/'.$profile->vbanner->path) }}" width="100%">
            </div>

            <div class="row nopadding">
                <hr />
            </div>
            <div class="row nopadding padding-inner">
                <div class="col-md-12">
                    <p><span class="paragraph-header">Our Team</span></p>
                </div>

                @foreach ($merchant->teams as $team)
                    <div class="col-md-2">
                        <img src="{{ asset('images/'.$team->photo) }}" alt="Mr Muhamet Ibrahim" width="100%"/>
                    </div>

                    <div class="col-md-10 nopadding">
                        <h4>{{ $team->full_name }}</h4><br/>
                        <span class="fontStyle">{{ $team->post }}</span>
                        <p class="padding-top-10">
                            "{{ $team->description }}"
                        </p>
                    </div>
                    <div class="clearfix"></div>
                @endforeach
                <br>
            </div>
        </div>

    </div><!--End main cotainer-->
    <br/><br/>

    </section>


@stop