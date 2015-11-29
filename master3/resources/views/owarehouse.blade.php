@extends("common.default")
@section("content")
<script>
    $(document).ready(function () {
        $('.static-tab ul li a').on('click', function () {
            $('html,body').animate({scrollTop: $($(this).attr('href')).offset().top}, 1200);
        });
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $('#ahr').show(1000);
        }
        if (scroll <= 100) {
            $('#ahr').hide(1000);
        }

    });
</script>
<section class="">
    <div class="container"><!--Begin main cotainer-->
        <div class="row">
            <div class="col-sm-12 text-right margin-top box-green">
                <label class="margin-top">Sort By: &nbsp;</label>
                <select data-live-search="true" data-style="btn-green" class="selectpicker pull-right bs-select-hidden">
                    <option> Price Low to High</option>
                    <option> Price High to Low</option>
                    <option> Relevance</option>
                    <option> Discount</option>
                </select>
            </div>
            <div style="display: block;" class="static-tab" data-spy="scroll">
                <div class="text-center tab-arrow">
                    <span class="fa fa-sort"></span>
                </div>
                <ul class="nav nav-pills nav-stacked">

                    <li class="active" role="presentation"><a href="#Electronics">Electronics</a></li>
                    <li role="presentation" class=""><a href="#bueaty">Beauty,Health<br/> and Cosmetic</a></li>
                    <li role="presentation" class=""><a href="#Furniture">Home and<br/> Furniture</a></li>
                </ul>
            </div>

            <div class="col-sm-11 col-sm-offset-1 text-center">
                <img class="img-responsive" src="/images/brands.png">
            </div>
            <div class="col-sm-11 col-sm-offset-1">
                <p>&nbsp;</p>
                <div id="Electronics">  
                    <div class="brandlist">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1>O-Warehouse <small class="pull-right">10 results</small></h1>
                            </div>
                        </div>
                        <h3>Electronics</h3>
                        <div class="row">
                                <div class="panel-body no-padding-top no-padding-bottom shadow-e5">
                                    <div class="col-sm-6 border-box">
                                        <div class="row no-margin1">
                                            <div class="boxrow4-l col-sm-5 no-padding floor-border">
                                                <a href="/12">
                                                    <img class="img-responsive boxrow2-l" alt="Missing" src="images/img12.jpg">
                                                </a>                                            
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="user_icon glyphicon glyphicon-user"></span>
                                                <br/><i class="item_number user_icon">1</i>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <div class="col-sm-5 no-padding boxrow4-l">
                                                <p>Lusso Power Bank(1 box with <b>RM 600</b>) <br>10 pieces</p>
                                                <p class="dicsount">SAVE 40%</p>
                                                <h2>Original Price <span class=" pull-right">RM 12</span></h2>
                                            </div>
                                            <div class="col-sm-6 moq_left">
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp4&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <h4>Due Date &nbsp;&nbsp;&nbsp;&nbsp;20 November 2015</h4>
                                            <h4>Time Left &nbsp;&nbsp;&nbsp;&nbsp;10 days 10 hours and 20 minutes</h4>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <div id="bueaty">  
                    <div class="brandlist">
                        <h3>Beauty, Health and Cosmetic</h3>
                        <div class="row">
                                <div class="panel-body no-padding-top no-padding-bottom shadow-e5">
                                    <div class="col-sm-6 border-box">
                                        <div class="row no-margin1">
                                            <div class="boxrow4-l col-sm-5 no-padding floor-border">
                                                <a href="/12">
                                                    <img class="img-responsive boxrow2-l" alt="Missing" src="images/img12.jpg">
                                                </a>                                            
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="user_icon glyphicon glyphicon-user"></span>
                                                <br/><i class="item_number user_icon">1</i>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <div class="col-sm-5 no-padding boxrow4-l">
                                                <p>Lusso Power Bank(1 box with <b>RM 600</b>) <br>10 pieces</p>
                                                <p class="dicsount">SAVE 40%</p>
                                                <h2>Original Price <span class=" pull-right">RM 12</span></h2>
                                            </div>
                                            <div class="col-sm-6 moq_left">
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp4&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <h4>Due Date &nbsp;&nbsp;&nbsp;&nbsp;20 November 2015</h4>
                                            <h4>Time Left &nbsp;&nbsp;&nbsp;&nbsp;10 days 10 hours and 20 minutes</h4>
                                        </div>
                                    </div>  
                                    <div class="col-sm-6 border-box">
                                        <div class="row no-margin1">
                                            <div class="boxrow4-l col-sm-5 no-padding floor-border">
                                                <a href="/12">
                                                    <img class="img-responsive boxrow2-l" alt="Missing" src="images/img12.jpg">
                                                </a>                                            
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="user_icon glyphicon glyphicon-user"></span>
                                                <br/><i class="item_number user_icon">1</i>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <div class="col-sm-5 no-padding boxrow4-l">
                                                <p>Lusso Power Bank(1 box with <b>RM 600</b>) <br>10 pieces</p>
                                                <p class="dicsount">SAVE 40%</p>
                                                <h2>Original Price <span class=" pull-right">RM 12</span></h2>
                                            </div>
                                            <div class="col-sm-6 moq_left">
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp4&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <h4>Due Date &nbsp;&nbsp;&nbsp;&nbsp;20 November 2015</h4>
                                            <h4>Time Left &nbsp;&nbsp;&nbsp;&nbsp;10 days 10 hours and 20 minutes</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div id="Furniture">  
                    <div class="brandlist">
                        <h3>Home and Furniture</h3>
                        <div class="row">
                                <div class="panel-body no-padding-top no-padding-bottom shadow-e5">
                                    <div class="col-sm-6 border-box">
                                        <div class="row no-margin1">
                                            <div class="boxrow4-l col-sm-5 no-padding floor-border">
                                                <a href="/12">
                                                    <img class="img-responsive boxrow2-l" alt="Missing" src="images/img12.jpg">
                                                </a>                                            
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="user_icon glyphicon glyphicon-user"></span>
                                                <br/><i class="item_number user_icon">1</i>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <div class="col-sm-5 no-padding boxrow4-l">
                                                <p>Lusso Power Bank(1 box with <b>RM 600</b>) <br>10 pieces</p>
                                                <p class="dicsount">SAVE 40%</p>
                                                <h2>Original Price <span class=" pull-right">RM 12</span></h2>
                                            </div>
                                            <div class="col-sm-6 moq_left">
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp4&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <h4>Due Date &nbsp;&nbsp;&nbsp;&nbsp;20 November 2015</h4>
                                            <h4>Time Left &nbsp;&nbsp;&nbsp;&nbsp;10 days 10 hours and 20 minutes</h4>
                                        </div>
                                         <div class="row no-margin1">
                                            <div class="col-sm-8">
                                                <p>Place Order</p>
                                            </div>
                                            <div class="col-sm-4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 border-box">
                                        <div class="row no-margin1">
                                            <div class="boxrow4-l col-sm-5 no-padding floor-border">
                                                <a href="/12">
                                                    <img class="img-responsive boxrow2-l" alt="Missing" src="images/img12.jpg">
                                                </a>                                            
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="user_icon glyphicon glyphicon-user"></span>
                                                <br/><i class="item_number user_icon">1</i>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <div class="col-sm-5 no-padding boxrow4-l">
                                                <p>Lusso Power Bank(1 box with <b>RM 600</b>) <br>10 pieces</p>
                                                <p class="dicsount">SAVE 40%</p>
                                                <h2>Original Price <span class=" pull-right">RM 12</span></h2>
                                            </div>
                                            <div class="col-sm-6 moq_left">
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp4&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                                <h4>MOQ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp<b>4</b>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp RM 600</h2>
                                            </div>
                                        </div>
                                        <div class="row no-margin1">
                                            <h4>Due Date &nbsp;&nbsp;&nbsp;&nbsp;20 November 2015</h4>
                                            <h4>Time Left &nbsp;&nbsp;&nbsp;&nbsp;10 days 10 hours and 20 minutes</h4>
                                        </div>                                       
                                    </div>                                      
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="custom-border"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@stop
