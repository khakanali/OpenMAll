{!! Form::open(['action' => 'ProductController@store', 'class'=> 'form-horizontal','files' => true]) !!}
    <div id="pinformation" class="row">
        <div class="col-sm-12 row">
            <h1>Product Information</h1>
        </div>
        <div class="col-sm-4 thumbnail">
            <div class="product-photo">
                <img class="img-responsive"  id="preview-img" src="#" alt="" />
                <div class="inputBtnSection">
                    {!! Form::text('photo',null,['class'=>'disableInputField text-center','id'=>'uploadFile','placeholder'=>'Add Photo','disabled'=>'disabled']) !!}
                    <label class="fileUpload">
                        {!! Form::file('product_photo',['class'=>'upload','id'=>'uploadBtn']) !!}
                        <span class="uploadBtn badge"><i class="fa fa-lg fa-upload"></i> </span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::label('name', 'Name', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::text('name', 'Chuck', array('class' => 'validator form-control'))!!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('brand_id', 'Brand', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    <select name="brand_id" class ="form-control validator">
                        <option value="" selected>Choose Option</option>
                        @foreach($brand as $Brand)
                            <option value="{{ $Brand->id }}">{{ $Brand->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    <select name="category_id" class ="form-control validator" id="Category_id">
                        <option value="" selected>Choose Option</option>
                        @foreach($category as $Category)
                            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('subcat_id', 'Sub Category', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    <select name="subcat_id" class ="form-control validator" id="subcat">
                        <option value="" selected>Choose Option</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('O-Shop', 'O-Shop', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::text('O-Shop', 'O-Shop-value', array('class' => 'validator form-control'))!!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('short_description', 'Short Description', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('short_description', null, array('class' => 'validator form-control', 'rows' => '4'))!!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 margin-top">
                    <table class="table noborder">
                        <tr><th>Amount</th><td>MYR</td><td>450.00</td></tr>
                        <tr><th>Delivery</th><td>MYR</td><td>5.00</td></tr>
                        <tr><td colspan="3"><hr></td></tr>
                        <tr><th>&nbsp</th><td>MYR</td><td>450.00</td></tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <hr>
    <div id="delivery" class="row">
        <div class="col-sm-2">
            <div class="checkbox checkbox-success">
                {!! Form::checkbox('free_delivery', 1, null, ['class' => 'styled','id'=>'checkboxD']) !!}
                {!! Form::label('checkbox1', 'Free Delivery', array('class' => 'control-label')) !!}
            </div>
            <label class="">Delivery Pricing</label>
        </div>
        <div class="col-sm-5 toggleDelivery">
            <div class="form-group">
                {!! Form::label('del_worldwide', 'World Wide', array('class' => 'col-sm-4 control-label')) !!}
                <div class="col-sm-8">
                    {!! Form::text('del_worldwide', '', array('class' => 'validator1 form-control'))!!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('del_west_malaysia', 'West Malaysia', array('class' => 'col-sm-4 control-label')) !!}
                <div class="col-sm-8">
                    {!! Form::text('del_west_malaysia', '', array('class' => 'validator1 form-control'))!!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('del_sabah_labuan', 'Sabah/Labuan', array('class' => 'col-sm-4 control-label')) !!}
                <div class="col-sm-8">
                    {!! Form::text('del_sabah_labuan', '', array('class' => 'validator1 form-control'))!!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('del_sarawak', 'Sarawak', array('class' => 'col-sm-4 control-label')) !!}
                <div class="col-sm-8">
                    {!! Form::text('del_sarawak', '', array('class' => 'validator1 form-control'))!!}
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <h3>Delivery Coverage</h3>
            <div class="form-group">
                {!! Form::label('cov_country_id', 'Country', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::select('cov_country_id', ['select' => 'Choose Option',
                    'val1' => ' Wilayah Persekutuan',
                    'val2' => 'Over 30'],null, ['class' => 'validator selectpicker show-menu-arrow', 'data-style'=>"btn-green"] ) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('cov_state_id', 'State', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::select('cov_state_id', ['select' => 'Choose Option',
                    'val1' => ' Wilayah Persekutuan',
                    'val2' => 'Over 30'],null, ['class' => 'validator selectpicker show-menu-arrow', 'data-style'=>"btn-green"] ) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('cov_city_id', 'City', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::select('cov_city_id', ['select' => 'Choose Option',
                    'val1' => 'Kuala Lumpur',
                    'val2' => 'Over 30'],null, ['class' => 'validator selectpicker show-menu-arrow', 'data-style'=>"btn-green"] ) !!}
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <hr>
    <div id="retail" class="row">
        <div class="col-sm-12">
            <h1>Retail</h1>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                {!! Form::label('retail_price11', 'Retail Price', array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('retail_price', null,(['class' => 'validator retailSave form-control','id'=>'rPrice']))!!}
                </div>
                <div class="col-sm-2 text-danger" >
                    SAVE <span id="resultSave"> 0.0 </span> %
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('original_price', 'Original Price', array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('original_price', null, array('class' => 'validator retailSave form-control','id'=>'oPrice' ))!!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('available', 'Available', array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('available', null, array('class' => 'validator retailSave form-control'))!!}
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>

    <!--warehouse-->
        <div class="col-sm-4">
            <h3>O-Warehouse</h3>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('owarehouse_moq', 'MOQ', array('class' => 'col-sm-2 control-label')) !!}
                <div class="input-group col-sm-2">
                    <a  href="javascript:void(0);"class="input-group-addon" id="wareplusbtn" style="background: rgb(39,169,138);cursor: pointer;"><i class="fa fa-plus" style="color: #ffffff"></i></a>
                    {!! Form::text('owarehouse_moq', 0, array('class' => 'validator form-control numeric','id'=>'moq'))!!}
                    <a href="javascript:void(0);" class="input-group-addon" id="wareminusbtn" style="background: rgb(39,169,138);cursor: pointer;" ><i class="fa fa-minus" style="color: #ffffff"></i></a>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('owarehouse_price', 'O-Warehouse Price', array('class' => 'col-sm-2 control-label')) !!}
                <div class="input-group col-sm-4">
                    {!! Form::text('owarehouse_price', null, array('class' => 'validator form-control myr-price','placeholder'=>'MYR 0.00'))!!}
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--end warehouse-->
    <hr>
    <div id="wholesale"  class="row">
        <div class="col-xs-12"><h1>Business to Business</h1></div>
        <div class="col-sm-4"><h3>Wholesale Price</h3></div>
        <div class="col-sm-2">
            <div class="checkbox checkbox-success">
                {!! Form::checkbox('wholesale_price_display', 1, null, ['class' => 'styled','id'=>'checkboxD']) !!}
                {!! Form::label('display', 'Display') !!}
            </div>
        </div>
        <div class="clearfix"> </div>
        <hr>
        <div class="col-md-8">
            {!! Form::label('dealer', 'Dealer', array('class' => '')) !!}
            <div class="form-group">
                <div class="col-sm-11 col-xs-10">
                    <select name="dealer[]" class ="form-control validator">
                        <option value="" selected>Choose Option</option>
                        @foreach($user as $User)
                            <option value="{{ $User->id }}">{{ $User->first_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-1 row">
                    <a  href="javascript:void(0);" id="addwholesaledealer" class="btn btn-default text-green">
                        <i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--for add more-->
            <div id="wsreseller"></div>
            <div class="clearfix"> </div>
            <div class="table-responsive " >
                <table class="table table-striped noborder" id="wrpTable">
                    <tr><th>Unit</th><th colspan="4">Price</th>
                    </tr>
                    <tr>
                        <td width="80" class="saving">
                            {!! Form::text('wunit[]', null, array('class' => 'validator form-control numeric','size'=>'5'))!!}
                        </td>
                        <td width="250">
                            <div class="input-group">
                                <span class="input-group-addon">MYR</span>
                                {!! Form::text('wprice[]', null, array('class' => 'validator form-control myr-price'))!!}
                            </div>
                        </td>
                        <td>
                            <a  href="javascript:void(0);" id="addrsp" class="form-control text-center text-green">
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </td>
                        <td> <div class="input-group">
                                <span class="input-group-addon">SAVE</span>
                                <div class="average form-control text-center text-danger">0.0</div>
                                <span class="input-group-addon">% from retail</span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Delivery Coverage</h3>
            <div class="form-group">
                {!! Form::label('wholesale_price_country', 'Country', array('class' => 'col-sm-3')) !!}
                <div class="col-sm-9">
                    {!! Form::select('wholesale_price_country', ['select' => 'Choose Option',
                    'val1' => 'Wilayah Persekutuan',
                    'val2' => 'Over 30'],null, ['class' => 'selectpicker show-menu-arrow validator', 'data-style'=>"btn-green"] ) !!}
                </div> <div class="clearfix"></div>
            </div>
            <div class="form-group">
                {!! Form::label('wholesale_price_state', 'State', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::select('wholesale_price_state', ['select' => 'Choose Option',
                    'val1' => 'Wilayah Persekutuan',
                    'val2' => 'Over 30'],null, ['class' => 'selectpicker show-menu-arrow validator', 'data-style'=>"btn-green"] ) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('wholesale_price_city', 'City', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::select('wholesale_price_city', ['select' => 'Choose Option',
                    'val1' => 'Kuala Lumpur',
                    'val2' => 'Over 30'],null, ['class' => 'selectpicker show-menu-arrow validator', 'data-style'=>"btn-green"] ) !!}
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="col-sm-4">
            <h3>Special Price</h3>
        </div>
        <div class="col-sm-2">
            <div class="checkbox checkbox-success">
                {!! Form::checkbox('special_price_display', 1, null, ['class' => 'styled','id'=>'checkboxD']) !!}
                {!! Form::label('display', 'Display') !!}
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"> </div>
        <hr>
        <div class="col-sm-12">
            <div class="table-responsive " >
                <table class="table table-striped noborder" id="sppTable">
                    <tr>
                        <th>Unit</th>
                        <th colspan="2">Price</th>
                        <th colspan="4">Username</th>
                    </tr>
                    <tr>
                        <td width="80" class="saving">
                            {!! Form::text('sunit[]', null, array('class' => 'validator form-control numeric','size'=>'5'))!!}
                        </td>
                        <td width="250">
                            <div class="input-group">
                                <span class="input-group-addon">MYR</span>
                                {!! Form::text('sprice[]', null, array('class' => 'validator form-control myr-price'))!!}
                            </div>
                        </td>
                        <td> <a  href="javascript:void(0);" id="addspp" class="form-control text-center text-green">
                                <i class="fa fa-plus-circle"></i></a>
                        </td>
                        <td class="col-xs-4">
                            {!! Form::text('username', null, array('class' => 'form-control'))!!}</td>
                        <td> <div class="input-group">
                                <span class="input-group-addon">SAVE</span>
                                <div class="average form-control text-center text-danger">0.0</div>
                                <span class="input-group-addon">% from retail</span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <hr>
    <div id="product" class="row">
        <div class="col-xs-12">
            <a class="btn btn-green col-sm-3" href="#"> Product Details</a>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            {!! Form::textarea('product_details', null, array('class' => 'validator form-control','id'=>'info-textarea2'))!!}
        </div>
        <div class="clearfix"> </div>
    </div>
    <hr>
    <div id="pspecification" class="row">
        <div class="col-xs-12">
            <h1>Product Specification</h1>
        </div>
        <div class="col-xs-12 col-sm-offset-1">
            <div class="form-group">
                {!! Form::label('product_specification_SKU', 'SKU', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('product_specification_name', null, array('class' => 'validator form-control'))!!}
                </div>
                <div class="clearfix"></div>
                {!! Form::label('product_specification_1', 'Color', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('product_specification_1', null, array('class' => 'validator form-control'))!!}
                </div>
                <div class="clearfix"></div>
                    {!! Form::label('product_specification_2', 'Model', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('product_specification_2', null, array('class' => 'validator form-control'))!!}
                </div>
                <div class="clearfix"></div>
                    {!! Form::label('product_specification_3', 'Size(L x W x H)', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('product_specification_3', null, array('class' => 'validator form-control'))!!}
                </div>
                <div class="clearfix"></div>
                    {!! Form::label('product_specification_4', 'Weight', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('product_specification_4', null, array('class' => 'validator form-control'))!!}
                </div>
                <div class="clearfix"></div>
                    {!! Form::label('product_specification_5', 'Warranty Period', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('product_specification_5', null, array('class' => 'validator form-control'))!!}
                </div>
                <div class="clearfix"></div>
                    {!! Form::label('product_specification_6', 'Warranty Type++', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('product_specification_6', null, array('class' => 'validator form-control'))!!}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <hr>
    <div id="seller" class="row">
        <div class="col-xs-12">
            <h1>Seller Information</h1>
        </div> <div class="clearfix"></div>
        <div class="col-xs-12 col-sm-offset-1">
            <div class="form-group">
                {!! Form::label('seller_name', 'Seller Name', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-4">
                    {!! Form::text('seller_name', null, array('class' => 'validator form-control'))!!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('SFA', 'Ship form address', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-8" id="SFA">
                    {!! Form::text('SFA1', null, array('class' => 'validator form-control'))!!}
                    {!! Form::text('SFA2', null, array('class' => 'validator form-control'))!!}
                    {!! Form::text('SFA3', null, array('class' => 'validator form-control'))!!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('REA', 'Return/Exchange Address', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-8" id="REA">
                    {!! Form::text('REA1', null, array('class' => 'validator form-control'))!!}
                    {!! Form::text('REA2', null, array('class' => 'validator form-control'))!!}
                    {!! Form::text('REA3', null, array('class' => 'validator form-control'))!!}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="policy" class="row">
        <div class="col-xs-12">
            <h1>Seller Policy</h1>
        </div>
        <div class="col-xs-12">
            <a class="btn btn-green col-sm-3" href="#"> Return / Exchange Policy</a>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-12">
            {!! Form::textarea('return_policy', null, array('class' => 'validator form-control', 'id'=>'info-textarea'))!!}
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div id="return" class="row">
        <div class="col-xs-12">
            <h1>OpenSupermall</h1>
            <h3>Notice on Return</h3>
        </div>
        <div class="col-xs-12">
            <a class="btn btn-green col-sm-3" href="#"> Return / Exchange Policy</a>

        </div>
        <div class="col-xs-12">
            <div class="thumbnail">
                <p>You are only entitled to a refund if you return it within three or four weeks, other wise you can get a repair or replacement. You are only entitled to a refund if you return it within three or four weeks, other wise you can get a repair or replacement. You are only entitled to a refund if you return it within three or four weeks, other wise you can get a repair or replacement</p>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="page-header">Cancellation</h3>
                        <ol>
                            <li>Request for cancellation can be made after payment for the product is completed.</li>
                            <li>Request for cancellation will only be approved if the product has not been shipped by the Merchant and the Buyer shall be entitled to refund</li>
                            <li>Request for cancellation will be rejected in the event that the Merchant has shipped the product.</li>
                        </ol>

                    </div>
                    <div class="col-sm-4">
                        <h3 class="page-header">Return &amp; Exchange</h3>
                        <ol>
                            <li>Request for return of the product purchased can be upon the product is delivered.</li>
                            <li>In the event that the product delivered is flawed, the Buyer shall return the product to the Merchant at the Buyer's own cost.</li>
                            <li>Upon receiving the Merchant's confirmation on the approvalfor the request for return, payment shall than be refunded to the Buyer.</li>
                            <li>In the event that wrong product is delivered, the Buyer may return the wrong product to Merchant at the Buyer's own cost and upon receiving the Merchant's confirmation and approval for the request, a new product shall be re-dilivered to the Buyer.</li>
                        </ol>

                    </div>
                    <div class="col-sm-4">
                        <h3 class="page-header">Terms &amp; Conditions</h3>

                        <ol>
                            <li>Request for return and/or refund shall be made within 7 days from the date of the delivery of the product</li>
                            <li>The Buyer shall not be entitled to refund and/or exchange if:
                                <ol>
                                    <li>The product requested for refund and/or exchange is used, destroyed and/or damaged.</li>
                                    <li>The tag attached to the product is removed and/or tempered with.</li>
                                    <li>The seal and/or package of the product is removed and/or opened.</li>
                                    <li>The material(s) of the package product is lost.</li>
                                    <li>The components of the product including product's accessory and/or free gifts which comes with the products have been  used, destroyed, damaged and/or lost.</li>
                                    <li>The product value is decreased and/or damaged due to, including but not limited to, any reason stated in (a) to (c) stated above and/or due to the delay by the Buyer in returning the product.</li>
                                    <li>The product is custom made and/or is customized product.</li>
                                    <li>The proof of purchase of product is not provided by the Buyer.</li>
                                    <li>The Buyer failed to follow guidelines, manuals, instructions and/or recommendations provided by the products and/or the Vendor Merchant. </li>
                                    <li>The product is of e-voucher type of product which is sent to the Buyers email directly and immidiately. It is the buyer own responsibility to ensure the email address inserted and key is correct and accurate. OR</li>
                                    <li>The product is of credit top-up type of product including but not limited to prepaid mobile air time, prepaid internet services, prepaid online content which is sent to Buyer's account direclty and immidiately. It is Buyer's own responsibility to ensure the account number(such as mobile telephone number, prepaid internet account number) inserted the key in is correct and accurate.</li>
                                </ol>
                            </li>
                            <li>All shipping cost and expenses paid are non-refundable and the Buyer shall bear for all the cost for the return and/or exchange of the product.</li>
                            <li>In the event of any refund and/or return is approved it is subject to deduction of shipping costs, taxes and/or any changes impossed by the online payment gateway and/or financial instructions.</li>
                        </ol>

                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-12 text-right">
            {{--<input type="submit" class="btn btn-green" value="SEND">--}}
            {!! Form::submit('SEND', array('class' => 'btn btn-green','id'=>'send')) !!}
        </div>
    </div>

{!! Form::close() !!}


