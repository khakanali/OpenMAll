@extends("common.default")

@section("content")
<style>
.brandlist ul {
	list-style:none;
}
.brandlist ul li {
	float:left;
}

.brandlist ul li a{
	color:#000;
}
.brandlist .custom-border {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
    
    border-top: 1px solid #eeeeee !important;
	clear:both;
}
</style>
<section class="">
        <div class="container"><!--Begin main cotainer-->
            <div class="row">
            
			<div data-spy="scroll" class="static-tab" style="display: none;">
                        <div class="text-center tab-arrow">
                            <span class="fa fa-sort"></span>
                        </div>
                        <ul class="nav nav-pills nav-stacked">
                           
                            <li role="presentation" class="active"><a href="#AD">A-D</a></li>
							<li role="presentation"><a href="#EH">E-H</a></li>
							<li role="presentation"><a href="#IL">I-L</a></li>
							<li role="presentation"><a href="#MP">M-P</a></li>
							<li role="presentation"><a href="#QT">Q-T</a></li>
							<li role="presentation"><a href="#UX">U-X</a></li>
							<li role="presentation"><a href="#YZ">Y-Z</a></li>
                        </ul>
                </div>
                
			<div class="col-sm-11 col-sm-offset-1 text-center">
				<img src="<?php echo url();?>/images/brands.png" class="img-responsive">
			</div>
            <div class="col-sm-11 col-sm-offset-1">
                
							<p>&nbsp;</p>
            <div id="all-floors">  
				<div class="brandlist">
					<h1>Brands</h1>
                                      
							<div id="AD" class="col-md-12">
								<h3>A</h3>
								<ul>
									@foreach($allABrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                       
							<div class="col-md-12">
								<h3>B</h3>
								<ul>
									@foreach($allBBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="col-md-12">
								<h3>C</h3>
								<ul>
									@foreach($allCBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="col-md-12">
								<h3>D</h3>
								<ul>
									@foreach($allDBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="custom-border"></div>
							<div id="EH" class="col-md-12">
								<h3>E</h3>
								<ul>
									@foreach($allEBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="col-md-12">
								<h3>F</h3>
								<ul>
									@foreach($allFBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="col-md-12">
								<h3>G</h3>
								<ul>
									@foreach($allGBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="col-md-12">
								<h3>H</h3>
								<ul>
									@foreach($allHBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="custom-border"></div>
							<div id="IL" class="col-md-12">
								<h3>I</h3>
								<ul>
									@foreach($allIBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="col-md-12">
								<h3>J</h3>
								<ul>
									@foreach($allJBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="col-md-12">
								<h3>K</h3>
								<ul>
									@foreach($allKBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
							<div class="col-md-12">
								<h3>L</h3>
								<ul>
									@foreach($allLBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="custom-border"></div>
                                                        <div class="col-md-12">
								<h3>M</h3>
								<ul>
									@foreach($allMBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="col-md-12">
								<h3>N</h3>
								<ul>
									@foreach($allNBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="col-md-12">
								<h3>O</h3>
								<ul>
									@foreach($allOBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="col-md-12">
								<h3>P</h3>
								<ul>
									@foreach($allPBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="custom-border"></div>
							<div class="col-md-12">
								<h3>Q</h3>
								<ul>
									@foreach($allQBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="col-md-12">
								<h3>R</h3>
								<ul>
									@foreach($allRBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="col-md-12">
								<h3>S</h3>
								<ul>
									@foreach($allSBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="col-md-12">
								<h3>T</h3>
								<ul>
									@foreach($allTBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="custom-border"></div>
                                                        <div class="col-md-12">
								<h3>U</h3>
								<ul>
									@foreach($allUBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <p>&nbsp;</p>
							<div class="col-md-12">
								<h3>V</h3>
								<ul>
									@foreach($allVBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                         <div class="col-md-12">
								<h3>W</h3>
								<ul>
									@foreach($allWBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="col-md-12">
								<h3>X</h3>
								<ul>
									@foreach($allXBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="custom-border"></div>
                                                        <div class="col-md-12">
								<h3>Y</h3>
								<ul>
									@foreach($allYBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
							</div>
							<p>&nbsp;</p>
                                                        <div class="col-md-12">
								<h3>Z</h3>
								<ul>
									@foreach($allZBrands as $brand)
									<li class="col-md-2"><a href="{{URL::to('brand-details/'.$brand->id)}}">{{$brand->name}}</a></li>
                                                                         @endforeach()
								</ul>
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