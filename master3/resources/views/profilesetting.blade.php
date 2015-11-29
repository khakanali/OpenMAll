@extends("common.default")

@section("content")
    <section class="profilesetting">
        <div class="container"><!--Begin main cotainer-->
            <div class="row">
                <div data-spy="scroll" style="display: none;" class="static-tab">
                    <div class="text-center tab-arrow">
                        <span class="fa fa-sort"></span>
                    </div>
                    <ul class="nav nav-pills nav-stacked" id="elevator-btn">
                        <li role="presentation" class="active floor-navigation"><a href="#themes">Themes</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#services">Services</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#video">Video</a></li>
                    </ul>
                </div>
                <div class="col-sm-11 col-sm-offset-1">


                    <form class="form-horizontal">

                        <div id="themes" class="row">
                            <a href="{{$log}}" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                            <div class="col-sm-12"><h1>THEMES</h1></div>
                            <div class="col-sm-3 col-xs-6">
                                <img src="images/theme1.png" class="img-responsive" align="theme">
                                <a class="btn btn-lg btn-green text-center col-sm-12  col-xs-12">Theme A</a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <img src="images/theme2.png" class="img-responsive" align="theme">
                                <a class="btn btn-lg btn-default text-center col-sm-12  col-xs-12">Theme B</a>
                            </div>
                        </div>
                        <div class="row">
                            <div id="services" class="margin-top">
                            <p>BUYER'S PAGE APPEARANCE</p>
                            <div class="col-xs-12 margin-top ">
                                <div class="signboard">
                                    <p class="signboard-text">SignBoard</p>
                                    <a class="badge badge-upload"
                                       data-toggle="collapse" data-target="#signboard" aria-expanded="false" aria-controls="signboard">
                                        <i class="fa fa-lg fa-upload"></i></a>
                                    <div class="collapse" id="signboard">
                                        <ul>
                                            <li> <img src="images/Buyerregistration.png" alt="item" class="sbimgID"></li>
                                            <li>  <img src="images/favo1.png" alt="item" class="sbimgID"></li>
                                            <li> <img src="images/favo3.png" alt="item" class="sbimgID"></li>
                                            <li> <img src="images/banner.png" alt="item" class="sbimgID"></li>
                                            <li><img src="images/favo5.png" alt="item" class="sbimgID"></li>
                                            <li> <img src="images/ProfileSettingAboutUs.png" alt="item" class="sbimgID"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>



                            <div class="margin-top">@include('profilesettingnavigation')</div>

                            <div class="col-xs-12 margin-top">
                                <img class="img-responsive" title="banner" src="images/Buyerregistration.png">
                             </div>
                            </div>
                            <div class="margin-top">
                                <div class="col-sm-3">
                                    <a class="btn btn-green btn-lg hidden" id="addBunting">Add Bunting</a>
                                </div>
                                <div class="col-sm-9 text-right margin-top box-green">
                                    <label>3 results &nbsp;&nbsp;&nbsp; &nbsp;</label>
                                    <label>Sort By: &nbsp;</label>
                                    <select class="selectpicker pull-right"  data-style="btn-green" data-live-search="true">
                                        <option > Price Low to High</option>
                                        <option > Price High to Low</option>
                                        <option > Relevance</option>
                                        <option > Discount</option>
                                    </select>
                                </div>
                            </div>

                            <div class="margin-top">

                              <div id="display-bunting" class="col-sm-3">
                                  <div class="bunting">
                                      <a class="badge badge-close" id="remBunting">X</a>
                                      <p style="padding-top:55%; text-align: center;">Bunting</p>
                                      <a class="badge badge-upload" data-toggle="collapse" data-target="#buntingImg" aria-expanded="false" aria-controls="buntingImg"><i class="fa fa-lg fa-upload"></i></a>
                                      <div class="collapse" id="buntingImg">
                                          <ul>
                                              <li> <img src="images/bg.png" alt="item" class="bimgID"></li>
                                              <li>  <img src="images/item1.png" alt="item" class="bimgID"></li>
                                              <li> <img src="images/item2.png" alt="item" class="bimgID"></li>
                                              <li> <img src="images/item3.png" alt="item" class="bimgID"></li>
                                              <li><img src="images/item4.png" alt="item" class="bimgID"></li>
                                              <li> <img src="images/logo.png" alt="item" class="bimgID"></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="color-box">
                                      <label>Background Color</label>
                                      <input type="text" class="form-control margin-top colorPicker" id="colorPicker" >
                                  </div>
                              </div>
                              <div class="col-sm-9 p-product">
                                  <div id="display-product-section"></div>
                              </div>
                              <div class="clearfix"></div>
                                <div class="col-sm-3 col-sm-offset-9 text-right">
                                    <a class="btn btn-green btn-round text-green" id="addPsec" href="javascript:void(0);">Add Section</a>
                                </div>
                                <div  id="video" class="col-xs-12 margin-top video-banner">
                                    <div class="placeholder">
                                        <a class="badge badge-close" id="remVBcontent">X</a>
                                        <iframe id="tvideoID" width='100%' height='350' src='http://www.youtube.com/embed/1I6l6OYx8Jg' frameborder='0' allowfullscreen></iframe>
                                        <p class="placeholdertext hidden" style="position: absolute; top: 40%; left: 45%;">VideoBanner</p>
                                        <a class="badge badge-upload" data-toggle="collapse" data-target="#vthumbs" aria-expanded="false" aria-controls="vthumbs">
                                            <i class="fa fa-lg fa-upload"></i></a>
                                        <div  class="collapse" id="vthumbs">
                                            <ul id="extractThumb" >
                                                <li>
                                                    <img data-src="http://www.youtube.com/embed/1sIWez9HAbA" alt="Youtube video" src="" />
                                                </li>
                                                <li>
                                                    <img data-src="http://www.youtube.com/embed/82ZEDGPCkT8" alt="Youtube video" src="" />
                                                </li>
                                                <li>
                                                    <img data-src="http://www.youtube.com/embed/1I6l6OYx8Jg" alt="Youtube video" src="" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </form>


                </div>
            </div>
        </div><!--End main cotainer-->
    </section>


@stop

