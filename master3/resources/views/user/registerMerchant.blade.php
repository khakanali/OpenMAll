<?php
$cf = new \App\lib\CommonFunction();
$selectListForBusinessType =  $cf->getBusinessType();
        // {!! Form::select('country', $cf->country(), null, ['class' => 'form-control']) !!}
?>

@extends("common.default")


@include('partials._flash',['key'=> Config::get('messages.key.name')])

@section("content")
    <section class="">
        <div class="container"><!--Begin main cotainer-->
            <div class="row">
                <div data-spy="scroll" class="static-tab" style="display: none;">
                    <div class="text-center tab-arrow">
                        <span class="fa fa-sort"></span>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active"><a href="#account">Account</a></li>
                        <li role="presentation"><a href="#company">Company</a></li>
                        <li role="presentation"><a href="#contact">Contact</a></li>
                        <li role="presentation"><a href="#shop">Shop</a></li>
                        <li role="presentation"><a href="#bank">Bank</a></li>
                        <li role="presentation"><a href="#remark">Remarks</a></li>
                    </ul>
                </div>
                <div class="col-sm-11 col-sm-offset-1">
                    <img src="<?php echo url();?>/images/banner.png" title="banner" class="img-responsive">
                    <hr>
                    {!! Form::open(array('url'=> $route , 'files' => 'true', 'method'=>'post', 'id'=>'registe_rForm' , 'class'=> 'form-horizontal')) !!}
{{--                    @foreach($userModel as $user)--}}

                    <div id="account">
                        <h1>Account Information</h1>
                        <div class="form-group">
                            {!! Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-6">
                                {!! Form::email('email',$userModel['user']['email'] , array('placeholder'=>'Email', 'class' => 'form-control',$disabled))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', null, array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-6">
                                {!! Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control',$disabled)) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('confirmPassword', 'Confirm Password', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-6">
                                {!! Form::password('confirmPassword', array('placeholder'=>'Confirm Password', 'class' => 'form-control',$disabled)) !!}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="company">
                        <h1>Company Details</h1>
                        <div class="form-group col-xs-12">
                            {!! Form::label('company_name', 'Company Name') !!}
                            {!! Form::text('company_name',$userModel['merchant'][0]['company_name'], array( "data-bv-trigger" => "keyup" , "required" => "required",
                            'placeholder'=>'Company Name', 'class' => 'form-control',$disabled))!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('domicile', 'Domicile', array('class' => 'col-sm-1 control-label')) !!}
                            <div class="col-sm-3">
                                {!! Form::select('domicile', $cf->getCountry(), $userModel['merchant'][0]['country_id'], [ "data-bv-trigger" => "keyup" , "required" => "required", 'class' => 'form-control',$disabled]) !!}
                                {{--<select name="domicile" class="form-control"><option value="dom">Company</option></select>--}}
                            </div>
                            {!! Form::label('gst_vat', 'GST/VAT', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-5">
                                {!! Form::text('gst', $userModel['merchant'][0]['gst'], array( "data-bv-trigger" => "keyup" , "required" => "required", 'placeholder'=>'Input Your GST/VAT Number', 'class' => 'form-control',$disabled))!!}
                            </div>
                        </div>
                        <div id="dirDetail" >
                            @if(isset($userModel['directors']))
                                @foreach($userModel['directors'] as $director)
                                    <div class="form-group" >
                                        {!! Form::label('directors', 'Directors', array('class' => 'col-sm-1 control-label')) !!}
                                        <div class="col-sm-2">
                                            {!! Form::text('directors[]',$director['name'], array( "data-bv-trigger" => "keyup" , "required" => "required", 'placeholder'=>'Type the Name', 'class' => 'form-control',$disabled))!!}
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('nric[]', $director['nric'], array('placeholder'=>'Type the NRIC or Passport Number', 'class' => 'form-control',$disabled))!!}
                                        </div>
                                        <div class="col-sm-2">
                                            {!! Form::select('dcountry[]', $cf->getCountry(),$director['country_id'], ['class' => 'form-control ','id' => 'dcountry',$disabled]) !!}
                                        </div>
                                        <div class="col-sm-4">
                                           <div class="inputBtnSection">
                                                <input id="uploadFileDD" value="{{ $director['photo_1'] }}" class="disableInputField" placeholder="Upload Passport Photo" {{$disabled}} />
                                                <label class="fileUpload">
                                                    <input id="uploadBtnDD" name="directorImages[]" type="file" class="upload" />
                                                    <span class="uploadBtn">Upload </span>
                                                </label>
                                            </div>
                                            <a  href="javascript:void(0);" id="addDD" class="text-green"><i class="fa fa-plus-circle"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="form-group" >
                                    {!! Form::label('directors', 'Directors', array('class' => 'col-sm-1 control-label')) !!}
                                    <div class="col-sm-2">
                                        {!! Form::text('directors[]', null, array( "data-bv-trigger" => "keyup" , "required" => "required", 'placeholder'=>'Type the Name', 'class' => 'form-control'))!!}
                                    </div>
                                    <div class="col-sm-3">
                                        {!! Form::text('nric[]', null, array('placeholder'=>'Type the NRIC or Passport Number', 'class' => 'form-control'))!!}
                                    </div>
                                    <div class="col-sm-2">
                                        {!! Form::select('dcountry[]', $cf->getCountry(),null, ['class' => 'form-control ','id' => 'dcountry']) !!}
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="inputBtnSection">
                                            <input id="uploadFileDD" class="disableInputField" placeholder="Upload Passport Photo" {{$disabled}} />
                                            <label class="fileUpload">
                                                <input id="uploadBtnDD" name="directorImages[]" type="file" class="upload" />
                                                <span class="uploadBtn">Upload </span>
                                            </label>
                                        </div>
                                        <a  href="javascript:void(0);" id="addDD" class="text-green"><i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <hr>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Business Type: </label>
                            <div class="col-sm-3">
                                {!! Form::select('business_type', $cf->getBusinessType(), $userModel['merchant'][0]['business_type'], ['class' => 'form-control',$disabled]) !!}
                            </div>
                        </div>

                        <hr/>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address Type: </label>
                            <div class="col-sm-3">
                                {!! Form::select('address_type', $cf->getAddressType(), $userModel['address'][0]['type'], ['class' => 'form-control',$disabled]) !!}
                            </div>
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Business Registration Number: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="business_reg_no" value="{{$userModel['merchant'][0]['business_reg_no']}}" placeholder="Type Business Number" {{$disabled}}>
                            </div>
                            <label class="col-sm-2 control-label">Business Registration Form</label>
                            @if(isset($mer_doc))
                                @foreach($doc as $Doc)
                                    @foreach($mer_doc as $mer_Doc)
                                        @if($mer_Doc->merchant_id == $userModel['merchant'][0]['id'])
                                            @if($mer_Doc->document_id == $Doc->id)
                                                <div class="col-sm-4 pull-right">
                                                    <div class="inputBtnSection">
                                                        <input id="uploadFileBR" class="disableInputField" value="{{ $Doc->path }}" placeholder="Upload Document" {{$disabled}} />
                                                        <label class="fileUpload">
                                                            <input id="uploadBtnBR" name="upload_attachment[]"  type="file" class="upload" />
                                                            <span class="uploadBtn">Upload </span>
                                                        </label>
                                                    </div>
                                                    <a  href="javascript:void(0);" id="addBS" class="text-green"><i class="fa fa-plus-circle"></i></a>
                                                </div>
                                                <div style="clear:both;"></div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            @else
                                <div class="col-sm-4">
                                    <div class="inputBtnSection">
                                        <input id="uploadFileBR" class="disableInputField" placeholder="Upload Document" {{$disabled}} />
                                        <label class="fileUpload">
                                            <input id="uploadBtnBR" name="upload_attachment[]"  type="file" class="upload" />
                                            <span class="uploadBtn">Upload </span>
                                        </label>
                                    </div>
                                    <a  href="javascript:void(0);" id="addBS" class="text-green"><i class="fa fa-plus-circle"></i></a>
                                </div>
                            @endif
                        </div>
                        <div id="businessReg" > </div>

                    </div>
                    <hr>
                    <div id="contact">
                        <h1>Contact Details</h1>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Contact Person: </label>
                            <div class="col-sm-4">
                                <input type="text " required="" name="contact" value="{{ $userModel['merchant'][0]['contact_person']}}" class="form-control" {{$disabled}} >
                            </div>
                            <label class="col-sm-1 control-label">Office: </label>
                            <div class="col-sm-2">
                                <input type="text" required="" name="office"  value="{{ $userModel['merchant'][0]['office_no']}}" class="form-control" {{$disabled}}>
                            </div>
                            <label class="col-sm-1 control-label">Mobile: </label>
                            <div class="col-sm-2">
                                <input type="text" required="" name="mobile"  value="{{ $userModel['merchant'][0]['mobile_no']}}" class="form-control" {{$disabled}}>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Website: </label>

                            <div class="col-sm-4 col-xs-10">

                                @if( !is_null($userModel['websites'] ))
                            @foreach($userModel['websites'] as $websites)
                                @if($websites['name'] == "website")
                                    <input type="url" required="" name="website[]" class="form-control" value="{{ $websites['url']}}"  placeholder="http://www.abc.com.my" {{$disabled}}>
                                    <br/>
                                    @elseif(count($userModel['websites']) <= 1 && $websites['name'] == null )
                                        <input type="url" required="" name="website[]" class="form-control" value="{{ $websites['url']}}"  placeholder="http://www.abc.com.my" {{$disabled}}>
                                @endif
                            @endforeach

                                    @endif
                            </div>
                            <div class="col-xs-1">
                                <a  href="javascript:void(0);" id="addWS" class="text-green" ><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div id="website"></div>



                        <div class="form-group">
                            <label class="col-sm-2 control-label">Social Media: </label>
                            <div class="col-sm-4 col-xs-10">
                                @if( !is_null($userModel['websites'] ))
                                @foreach($userModel['websites'] as $websites)
                                    @if($websites['name'] == "social")
                                     <input type="text" required="" name="social[]" class="form-control" value="{{ $websites['url']}}"  placeholder="http://www.facebook.com/my" {{$disabled}}>
                                        <br/>
                                    @elseif(count($userModel['websites']) <= 1 && $websites['name'] == null )
                                        <input type="url" required="" name="social[]" class="form-control" value="{{ $websites['url']}}"  placeholder="http://www.abc.com.my" {{$disabled}}>
                                    @endif
                                @endforeach @endif
                            </div>
                            <div class="col-xs-1">
                                <a  href="javascript:void(0);" id="addSM" class="text-green"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div id="socialMedia">  </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Current eCommerce Site: </label>
                            <div class="col-sm-4 col-xs-10">
                                @if( ! is_null($userModel['websites'] ))
                                @foreach($userModel['websites'] as $websites)
                                    @if($websites['name'] == "ecom_site")
                                        <input type="text" name="ecom_site[]" class="form-control"  value="{{ $websites['url']}}" placeholder="http://www.abc.com" {{$disabled}}>  <br/>
                                    @elseif(count($userModel['websites']) <= 1 && $websites['name'] == null )
                                        <input type="url" required="" name="ecom_site[]" class="form-control" value="{{ $websites['url']}}"  placeholder="http://www.abc.com.my" {{$disabled}}>
                                    @endif
                                @endforeach @endif
                            </div>
                            <div class="col-xs-1">
                                <a  href="javascript:void(0);" id="addEcom" class="text-green"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div id="currEcom"> </div>


                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label>Address</label>
                                <input type="text" name="line1" class="form-control" value="{{ $userModel['address'][0]['line1']}}" {{$disabled}} >
                                </div>
                                <div class="form-group">
                                <input type="text" name="line2" class="form-control" value="{{ $userModel['address'][0]['line2']}}"{{$disabled}} >
                                </div>
                                <div class="form-group">
                                <input type="text" name="line3" class="form-control" value="{{ $userModel['address'][0]['line3']}}"{{$disabled}}>
                                </div>
                                <div class="form-group">
                                <input type="text" name="line4" class="form-control" value="{{ $userModel['address'][0]['line4']}}"{{$disabled}}>
                                </div>
                            </div>


                            <div class="col-sm-5">
                                <label>&nbsp;</label>
                                <div class="form-group">
                                <label class="col-sm-5 control-label">Country: </label>
                                    <div class="col-sm-7">
                                        {!! Form::select('country', $cf->getCountry(), $userModel['address'][0]['city_id'], ['class' => 'form-control','id' => 'country_id' ,$disabled]) !!}
                                    </div>
                                    </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">State: </label>
                                    <div class="col-sm-7">
                                        @if(isset($userModel['address'][0]['city_id']))
                                        {!! Form::select('state', $cf->getState(),$userModel['address'][0]['city_id'], ['class' => 'form-control' ,$disabled]) !!}
                                        @else
                                            <select class="form-control" id="states"></select>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">City: </label>
                                    <div class="col-sm-7">
                                        @if(isset($userModel['address'][0]['city_id']))
                                            {!! Form::select('city', $cf->getCity(), $userModel['address'][0]['city_id'], ['class' => 'form-control' ,$disabled]) !!}
                                        @else
                                            <select class="form-control" id="cities" name="city_name" required></select>
                                        @endif

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label">Postcode /Zip Code</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="zip" class="form-control" value="{{ $userModel['address'][0]['postcode']}}" {{$disabled}}><br>
                                    </div>

                                </div>
                            </div>
                        <div class="clearfix"> </div>
                        <hr>
                    </div>

                    <div id="shop">
                        <h1>Shop Details</h1>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Shop Name: </label>
                            <div class="col-sm-6">
                                <input type="text" name="shop_name" class="form-control" value="{{$userModel['merchant'][0]['oshop_name']}}" placeholder="Input your Shop/Display Name"  {{$disabled}}>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <label class="col-sm-3 control-label">Short Description: </label>
                            <div class="col-sm-6">
                                <p class="text-muted">Provide us with a brief description of your business to help us</p>
                                <textarea id="textarea" maxlength="255" name="description" class="form-control"  {{$disabled}}>{{ $userModel['merchant'][0]['description']}} </textarea>
                                <p class="text-muted">Number of Characters must not exceed <span id="textarea_feedback"></span></p>

                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <label class="col-sm-6 control-label">Do you have a license to sell/ or distribute the products/ services? </label>
                            <div class="col-sm-6">
                                {!! Form::select('have_license', ['' => 'Choose Option',
                                '1' => 'Yes', '0' => 'No'],$userModel['merchant'][0]['license'], ['class' => 'form-control' ,$disabled] ) !!}
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <label class="col-sm-6 control-label">How do you supply Geographically? </label>
                            <div class="col-sm-6">
                                {!! Form::select('supply_method', ['' => 'Choose Option',
                                'klang_valley' => 'Klang Valley', 'peninsula_malaysia' => 'Peninsula Malaysia' , 'east_malaysia'=> 'East Malaysia',
                                'internationally'=>'Internationally'],$userModel['merchant'][0]['coverage'], ['class' => 'form-control',$disabled] ) !!}
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <label class="col-sm-6 control-label">Do you own the brands for the products/services you are selling? </label>
                            <div class="col-sm-6">
                                {!! Form::select('have_brand', ['' => 'Choose Option',
                                '1' => 'Yes', '0' => 'No'],$userModel['merchant'][0]['ownership'], ['class' => 'form-control',$disabled] ) !!}
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <label class="col-sm-6 control-label">What is the category of the products you are selling? </label>
                            <div class="col-sm-6">
                                {!! Form::select('category', $cf->category(), $userModel['merchant'][0]['category_id'], ['class' => 'form-control',$disabled]) !!}
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <label class="col-sm-6 control-label">How many products you plan to sell? </label>
                            <div class="col-sm-6">
                                {!! Form::select('sell_plan', ['' => 'Choose Option',
                                '50' => 'Less than 50', '500' => 'Less than 500'],$userModel['merchant'][0]['planned_sales'], ['class' => 'form-control',$disabled] ) !!}
                            </div>
                            <div class="clearfix">&nbsp;</div>
                        </div>
                        <hr>


                        <h1>Brand Details</h1>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">What brand do you sell? </label>
                            <div class="col-sm-6 col-xs-10">
                                @if($isbrand)
                                    @foreach($userModel['brand'] as $brands)
                                        <input type="text" name="brand_name1[]" class="form-control" value="{{$brands['name']}}" {{$disabled}}>
                                    @endforeach
                                @else
                                    @if(isset($brand_table))
                                        <select name="brand_name[]" class="form-control" id="brandNames">
                                            @foreach($brand_table as $brand)
                                                <option value="{{$brand['id']}}">{{$brand['name']}}</option>
                                            @endforeach

                                        </select>
                                    @endif
                                @endif
                            </div>
                            <div class="col-xs-1">
                                <a  href="javascript:void(0);" id="addBD" class="text-green"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div id="brandDetail"> </div>
                    </div>

                    <hr>

                    <div class="bankdetail" id="bank">
                        <h1>Bank Details</h1>
                        <div class="form-group">
                            {!! Form::label('account_name', 'Account Name', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-4">
                                {!! Form::text('account_name',$userModel['bank'][0]['account_name1'], array('class' => 'form-control',$disabled))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('account_number', 'Account Number', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-4">
                                {!! Form::text('account_number', $userModel['bank'][0]['account_number1'], array('class' => 'form-control',$disabled))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('bank', 'Bank', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-4">
                                {!! Form::text('bank', $userModel['bank'][0]['name'], array('class' => 'form-control',$disabled))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('bank_code', 'Bank Code', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-4">
                                {!! Form::text('bank_code', $userModel['bank'][0]['code'], array('class' => 'form-control',$disabled))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('ibn', 'IBAN', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-4">
                                {!! Form::text('ibn', $userModel['bank'][0]['iban'], array('class' => 'form-control',$disabled))!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('swift', 'SWIFT', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-4">
                                {!! Form::text('swift', $userModel['bank'][0]['swift'], array('class' => 'form-control',$disabled))!!}
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Return Policy</h1>
                            <textarea class="form-control" id="info-textarea2" name="return_policy"   {{$disabled}}>{{$userModel['merchant'][0]['return_policy']}}</textarea>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <hr>
                    <div id="remark">
                        <h1>Remarks</h1>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="form-group">
                                    {!! Form::label('remarks', 'Remarks', array('class' => 'col-sm-2 control-label')) !!}

                                    <div class="col-sm-10">
                                        {!! Form::textarea('remarks', $userModel['merchant'][0]['remarks'], array('class' => 'form-control',$disabled))!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="remarks" class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Attachment </label>
                                <div class="col-sm-9 col-xs-12">
                                    <div class="inputBtnSection">
                                        <input id="uploadFileRem" class="disableInputField" placeholder="Add New Attachment" {{$disabled}} />
                                        <label class="fileUpload">
                                            <input id="uploadBtnRem" name="upload_attachment[]" type="file" class="upload" />
                                            <span class="uploadBtn">Upload </span>
                                        </label>
                                    </div>
                                    <a  href="javascript:void(0);" id="addRem" class="text-success"><i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="pull-right">

                        {!! Form::hidden('indication', $indication, array( 'class' => 'form-control'))!!}
                        {!! Form::submit('Submit', array('class' => 'btn btn-green')) !!}

                        {{--  <input type="submit" class="btn btn-success" value="Save">
                          <input type="submit" class="btn btn-success" value="Submit Registration Form">--}}
                    </div>

                    {{--@endforeach--}}

                    {!! Form::close() !!}

                    <img src="<?php echo url();?>/images/banner.png" title="banner" class="img-responsive">

                </div>
            </div>
        </div><!--End main cotainer-->
    </section>
@stop
