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
                        <li role="presentation" class="floor-navigation"><a href="#categories">Categories</a></li>
                        <li role="presentation" class="active floor-navigation"><a href="#information">Information</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#signboards">Signboard</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#buntings">Bunting</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#merchandise">Merchandise</a></li>
                        <li role="presentation" class="floor-navigation"><a href="#video-banners">Banners</a></li>
                    </ul>
                </div>
                <div class="col-sm-11 col-sm-offset-1">
                    <img src="images/banner.png" title="banner" class="img-responsive banner">


                    <form class="form-horizontal">

                        <h1>Album</h1> <hr>

                        <div id="categories" class="">
                            <h3>Add CATEGORIES </h3>
                            <div class="margin-top">
                            <div class="row col-sm-3">
                                <select class="form-control" id="mainCat">

                                    <option value="">Choose Option</option>
                                    <option value="Electronics" disabled>Electronics</option>
                                    <option value="Beauty">Beauty</option>
                                    <option value="Food &amp; Beverage">Food &amp; Beverage</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Home &amp; Furniture">Home &amp; Furniture</option>
                                    <option value="Souvenirs">Souvenirs</option>
                                    <option value="Automotive">Automotive</option>
                                    <option value="General Services">General Services</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Industrial">Industrial</option>


                                </select>
                            </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="clearfix"></div>
                            <div id="append-subCate" class="row">
                                <div class="listgroupsbox col-sm-3" id="listgroups" data-listgroup="Electronics">
                                    <ul class="list-group list-unstyled">
                                        <li class="btn list-group-item active">Electronics </li>
                                        <li>
                                            <ul class="list-unstyled inner-lvl">
                                                <li class="list-group-item" item-count="9">Home Appliance (9)</li>
                                                <li class="list-group-item" item-count="1">Coffee Machines (1)</li>
                                                <li class="list-group-item" item-count="7">Bread Maker (7)</li>
                                                <li class="list-group-item" item-count="3">Electric Kettles (3)</li>
                                                <li class="list-group-item" item-count="4">Blenders & Grinders (4)</li>
                                                <li class="list-group-item" item-count="9">Juicers &amp; Fruit Extractors (9)</li>
                                                <li class="list-group-item" item-count="2">Refrigerators (2)</li>
                                                <li class="list-group-item" item-count="1">Washers &amp; Dryers (1)</li>
                                                <li class="list-group-item" item-count="1">Freezers (1)</li>
                                                <li class="list-group-item" item-count="1">Skins (1)</li>
                                                <li class="list-group-item" item-count="2">Microwaves &amp; Ovens (1)</li>
                                                <li class="list-group-item" item-count="3">Vacuum Cleaners (3)</li>
                                                <li class="list-group-item" item-count="1">Floor Care (1)</li>
                                                <li class="list-group-item" item-count="0">Garment Steamers (0)</li>
                                                <li class="list-group-item" item-count="5">Irons (5)</li>
                                                <li class="list-group-item" item-count="1">Fans (1)</li>
                                                <li class="list-group-item" item-count="10">Air Conditioners (10)</li>
                                                <li class="list-group-item" item-count="6">Air Purifiers (6)</li>
                                            </ul></li>
                                        <li class="list-group-item"><a class="btn btn-primary form-control" href="/create_new_product"> <i class="fa fa-plus-circle"></i>
                                            Create New Products</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                        <div id="information" class="border-bottom-dotted">
                        <div  class=" row">

                            <div class="table-responsive col-sm-12 " >
                                <table class="table table-bordered text-muted " id="p-detailT">
                                    <tr class="bg-black">
                                        <th colspan="10">Product Details</th>
                                    </tr>
                                    <tr class="bg-black">
                                        <th>No</th>
                                        <th>SKU</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>SubCategory</th>
                                        <th>Short Description</th>
                                        <th>Quantity</th>
                                    </tr>
                                </table>

                            </div>
                            <div class="table-responsive col-sm-11 ">
                                <table class="table table-bordered text-muted " id="p-pricingT">
                                    <tr class="bg-gray">
                                        <th colspan="10">Pricing</th>
                                    </tr>
                                    <tr class="bg-gray">
                                        <th>No</th>
                                        <th>SKU</th>
                                        <th>Retail Price</th>
                                        <th>Original Price</th>
                                        <th>Wholesale Price</th>
                                        <th>Unit</th>
                                        <th>Special Price</th>
                                        <th>Unit</th>
                                        <th>Username</th>
                                        <th>Shipping Cost</th>
                                    </tr>

                                </table>

                            </div>

                            <div class="table-responsive col-sm-11 ">
                                <table class="table table-bordered text-muted " id="p-specsT">
                                    <tr class="bg-lightgray">
                                        <th colspan="10">Product Specifications</th>
                                    </tr>
                                    <tr class="bg-lightgray">
                                        <th>No</th>
                                        <th>SKU</th>
                                        <th>Color</th>
                                        <th>Original Price</th>
                                        <th>Model</th>
                                        <th>Size (LxWxH)</th>
                                        <th>Weight</th>
                                        <th>Warranty Period</th>
                                        <th>Warranty Type</th>
                                    </tr>

                                </table>

                            </div>

                        </div>
                        </div>


                        <div id="signboards" class="border-bottom-dotted">
                            <h3>SIGNBOARD <small><span id="signboar-counter">1</span> results</small>
                                <a class="text-green pull-right" id="upldsb"><i class="fa fa-lg fa-plus-circle"></i></a>
                            </h3>
                            <div id="append-sb-img" class="col-sm-offset-0">
                                <div class="col-sm-11 upld-signboard">
                                    <img alt="" src="images/album/advertisement 5.jpg" id="preview-img-sb" class="img-responsive">
                                    <div class="inputBtnSection">

                                        <label class="fileUpload">
                                            <input type="file" class="upload" id="signboarduploadBtn" data-imgid="1">
                                            <span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div id="buntings" class="border-bottom-dotted">
                            <h3>BUNTING   <small><span id="bunting-counter">1</span> results</small>
                                <a class="text-green pull-right" id="upldbb"> <i class="fa fa-lg fa-plus-circle"></i></a>
                            </h3>
                            <div id="append-bb-img" class="col-sm-offset-0">
                                <div class="col-sm-2 upld-bunting">
                                    <img alt="" src="images/album/epure-side-bunting.jpg" id="preview-img-bnt" class="img-responsive">
                                    <div class="inputBtnSection">
                                        <input disabled="disabled" class="disableInputField">
                                        <label class="fileUpload">
                                            <input type="file" class="upload" id="bntuploadBtn" data-imgid="2">
                                            <span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div id="merchandise" class="border-bottom-dotted">
                            <h3>PRODUCTS     <small><span id="pro-counter">1</span> results</small>
                                    <a class="text-green pull-right" id="upldpro"> <i class="fa fa-lg fa-plus-circle"></i></a>
                                </h3>
                            <div id="append-pro" >
                                <div class="p-box  col-sm-3 col-xs-12" id="pbox">
                                    <div id="1" class="p-img">
                                        <img class="img-responsive" src="images/album/Recovery Conditioner  i11.png" id="timgID">
                                        <a aria-controls="imgThumbs1" aria-expanded="false" data-target="#imgThumbs"
                                           data-toggle="collapse" id="uploadImg" class="badge badge-upload ">
                                            <i class="fa fa-lg fa-upload"></i></a>
                                        <div id="imgThumbs" class="collapse imgThumbs">
                                            <ul>
                                                <li><img src="images/p1.png" alt="item" class="simgID"></li>
                                                <li><img src="images/p2.png" alt="item" class="simgID"></li>
                                                <li><img src="images/p3.png" alt="item" class="simgID"></li>
                                                <li><img src="images/p4.png" alt="item" class="simgID"></li>
                                                <li><img src="images/p5.png" alt="item" class="simgID"></li>
                                                <li><img src="images/p6.png" alt="item" class="simgID"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <table class="table table-bordered p-specs">
                                        <tbody>
                                        <tr>
                                            <td id="pname" colspan="2">&nbsp;</td>
                                            <td id="pval1">&nbsp;</td>
                                        </tr>
                                        <tr> <td id="padd" class="text-danger">&nbsp;</td>
                                            <td id="pqty">&nbsp;</td>
                                            <td id="pval2" class="text-danger">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="clearfix"> </div>
                                    <div class=" col-xs-8">
                                        <ul class="list-inline">
                                            <li class="btn-green"><i class="fa fa-plus"></i></li>
                                            <li class="btn-pink"><i class="fa fa-heart"></i></li>
                                            <li class="btn-darkgreen"><i class="fa fa-shopping-cart"></i></li>
                                        </ul>
                                    </div>
                                    <div class=" col-xs-4 text-right">
                                        <strong id="discountval" class="text-muted">0%</strong>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="video-banners" class="border-bottom-dotted">
                            <h3>VIDEOS / BANNERS  <small><span id="video-counter">1</span> results</small>
                                <a class="text-green pull-right" id="upld-v-or-b"> <i class="fa fa-lg fa-plus-circle"></i></a>
                            </h3>
                            <div id="append-v-or-b" class="col-sm-offset-0">
                                <div class="col-sm-11 upld-bvideo">
                                    <img alt="" src="images/album/Excelent-bottom.jpg" id="preview-img-vbnr" class="img-responsive">
                                    <div class="inputBtnSection">
                                        <label class="fileUpload">
                                            <input type="file" class="upload" id="vbnruploadBtn">
                                            <span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>


                </div>
            </div>
        </div><!--End main cotainer-->
    </section>
@stop