<?php

namespace App\Http\Controllers;

use App;
use App\Models\Address;
use App\Models\Bank;
use App\Models\Brand;
use App\Models\Buyer;
use App\Models\Director;
use App\lib\Date;
use App\Models\Merchant;
use App\Models\User;
use App\Models\Website;
use App\Models\Document;
use App\Models\MerchantDocument;
use Collection;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class UserController extends BaseController
{

    var $indication = null; // is indication for merchant or buyer
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function buyerInformation()
    {
        $userModel = null;
        if(Auth::check()) {
        $u = Auth::user();
        $dateObj = new Date();
        $userObj = new User();
        $userModel = $userObj->with('merchant','occupation','merchant.address','merchant.address.city')->where('id','=',$u->id)->get()->first();
        $userModel->age =  $dateObj->age(new DateTime($u->birthdate),null,true);
//dd($userModel);
        }
        return view('buyerinformation',compact(['userModel']));
    }
    public function merchantInformation()
    {
        $userModel = null;

        if(Auth::check()) {
            $u = Auth::user();
            $dateObj = new Date();
            $userObj = new User();
            $userModel = $userObj->with('merchant', 'occupation', 'merchant.address', 'merchant.address.city')->where('id', '=', $u->id)->get()->first();
            $userModel->age = $dateObj->age(new DateTime($u->birthdate), null, true);

        }
        return view('merchantInformation', compact(['userModel']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indication = "buyer";
        $disabled =  'null';

        return view('user/registerMerchant',compact(['indication','disabled']));
    }

    public function createMerchant()
    {
        $merchantObj = new Merchant();

        $indication = "merchant";
        $disabled = 'null';
        $userModel = $merchantObj->getMerchantRelationsFullMeta();
       // dd($userModel);
        $route = route('create-new-user-p');
        $brand_table = Brand::all();
        $isbrand = false;
        return view('user/registerMerchant',compact(['indication','route','disabled','userModel','brand_table','isbrand']));
    }

    public function getEditMerchant()
    {
        $indication = "merchant";
        $disabled = 'disabled';
        $route = route('edit-merchant');
        // User,Bank,Address,Merchant,Brand,Website, and Director
        $userObj = new User();
        if(!Auth::check()) {
            $userModel = $userObj->with(['merchant', 'merchant.bank', 'merchant.address', 'merchant.brand', 'merchant.websites', 'merchant.directors'])->where('id', '=', '1')->get()->first();
            $userModel = $this->reShapeMerchantModel($userModel);
            //return $userModel;
        }
        else
        {
            $merchantObj = new Merchant();
            $userModel = $merchantObj->getMerchantRelationsFullMeta();
        }
        $mer_doc = merchantdocument::all();
        $doc = Document::all();
        $isbrand = true;
        return view('user/registerMerchant',compact(['indication','route','disabled','userModel','mer_doc','doc','isbrand']));
    }

    public function reShapeMerchantModel($merchantModel)
{
    $merchantObj = new Merchant();
    $userModel = $merchantObj->getMerchantRelationsFullMeta();

    $merchant =  isset($merchantModel['merchant'] ) ?  $merchantModel['merchant'] : null;
    $bank =  count($merchantModel['merchant']) > 0 ? (isset($merchantModel['merchant'][0]['bank'] ) ?  [$merchantModel['merchant'][0]['bank']] : null ):null ;//dd($merchantModel);
    $address =  count($merchantModel['merchant']) > 0 ? (isset($merchantModel['merchant'][0]['address'] ) ?  [$merchantModel['merchant'][0]['address']] : null):null;
    $brand =  count($merchantModel['merchant']) > 0 ? (isset($merchantModel['merchant'][0]['brand'] ) ?  $merchantModel['merchant'][0]['brand'] : null):null;
    $websites =  count($merchantModel['merchant']) > 0 ? (isset($merchantModel['merchant'][0]['websites'] ) ?  $merchantModel['merchant'][0]['websites'] : null):null;
    $directors =  count($merchantModel['merchant']) > 0 ? (isset($merchantModel['merchant'][0]['directors'] ) ?  $merchantModel['merchant'][0]['directors'] : null):null;

    $merchantArr = null;
    $bankArr = null;
    $addressArr = null;
    $brandArr = null;
    $websitesArr = null;
    $directorsArr = null;

    if(!is_null( $merchant))
    foreach($merchant as $data)
    {
		$merchantArr[]=[
			"id" => isset($data->id) ?  $data->id: null,
			"user_id" => isset($data->user_id) ?  $data->user_id: null,
			"company_name" =>
				isset($data->company_name) ?$data->company_name  : null,
            "gst" => isset($data->gst) ? $data->gst : null,
			"business_reg_no" =>
				isset($data->business_reg_no) ? $data->business_reg_no : null,
            "country_id" => isset($data->country_id) ? $data->country_id : null,
			"business_type" =>
				isset($data->business_type) ? $data->business_type : null,
			"address_id" =>
				isset($data->address_id) ?  $data->address_id: null,
			"contact_person" =>
				isset($data->contact_person) ?  $data->contact_person: null,
            "office_no" => isset($data->office_no) ?  $data->office_no: null,
            "mobile_no" => isset($data->mobile_no) ?  $data->mobile_no: null,
            "oshop_name" => isset($data->oshop_name) ? $data->oshop_name : null,
			"oshop_logo_1" =>
				isset($data->oshop_logo_1) ? $data->oshop_logo_1 : null,
			"oshop_logo_2" =>
				isset($data->oshop_logo_2) ?  $data->oshop_logo_2: null,
			"oshop_logo_3" =>
				isset($data->oshop_logo_3) ?  $data->oshop_logo_3: null,
			"oshop_logo_4" =>
				isset($data->oshop_logo_4) ? $data->oshop_logo_4 : null,
			"oshop_logo_5" =>
				isset($data->oshop_logo_5) ?  $data->oshop_logo_5: null,
			"oshop_adimage_1" =>
				isset($data->oshop_adimage_1) ? $data->oshop_adimage_1: null,
			"oshop_adimage_2" =>
				isset($data->oshop_adimage_2) ? $data->oshop_adimage_2: null,
			"oshop_adimage_3" =>
				isset($data->oshop_adimage_3) ?  $data->oshop_adimage_3: null,
			"oshop_adimage_4" =>
				isset($data->oshop_adimage_4) ? $data->oshop_adimage_4 : null,
			"oshop_adimage_5" =>
				isset($data->oshop_adimage_5) ? $data->oshop_adimage_5 : null,
			"description" =>
				isset($data->description) ? $data->description : null,
            "history" => isset($data->history) ?  $data->history: null,
            "license" => isset($data->license) ?  $data->license: null,
            "coverage" => isset($data->coverage) ? $data->coverage : null,
            "ownership" => isset($data->ownership) ? $data->ownership : null,
			"category_id" =>
				isset($data->category_id) ? $data->category_id : null,
			"planned_sales" =>
				isset($data->planned_sales) ? $data->planned_sales : null,
            "bank_id" => isset($data->bank_id) ? $data->bank_id : null,
			"return_policy" =>
				isset($data->return_policy) ? $data->return_policy : null,
            "remarks" => isset($data->remarks) ? $data->remarks : null,
            "deleted" => isset($data->deleted) ? $data->deleted : null,
            "created_at" => isset($data->created_at) ?  $data->created_at: null,
			"updated_at" => isset($data->updated_at) ?  $data->updated_at: null
		];
    }

    if(!is_null($bank))
    foreach($bank  as $data)
    {
        $bankArr[] = [
            "id" => isset($data->id) ?$data->id: null,
            "name" => isset($data->name) ?$data->name: null,
            "code" => isset($data->code) ?$data->code: null,
            "account_name1" => isset($data->account_name1) ?$data->account_name1: null,
            "account_number1" => isset($data->account_number1) ?$data->account_number1: null,
            "account_name2" => isset($data->account_name2) ?$data->account_name2: null,
            "account_number2" => isset($data->account_number2) ?$data->account_number2: null,
            "iban" => isset($data->iban) ?$data->iban: null,
            "swift" => isset($data->swift) ?$data->swift: null,
            "url" => isset($data->url) ?$data->url: null,
            "description" => isset($data->description) ?$data->description: null,
            "deleted" => isset($data->deleted) ?$data->deleted: null,
            "created_at" => isset($data->created_at) ?$data->created_at: null,
            "updated_at" => isset($data->updated_at) ?$data->updated_at: null
        ];
    }

    if(!is_null($address))
    foreach($address  as $data)
    {
        $addressArr[] = [
            "id" => isset($data->id) ?$data->id: null,
            "city_id" => isset($data->city_id) ?$data->city_id: null,
            "postcode" => isset($data->postcode) ?$data->postcode: null,
            "line1" => isset($data->line1) ?$data->line1: null,
            "line2" => isset($data->line2) ?$data->line2: null,
            "line3" =>isset($data->line3) ?$data->line3: null,
            "line4" => isset($data->line4) ?$data->line4: null,
            "type" => isset($data->type) ?$data->type: null,
            "deleted" => isset($data->deleted) ?$data->deleted: null,
            "created_at" => isset($data->created_at) ?$data->created_at: null,
            "updated_at" => isset($data->updated_at) ?$data->updated_at: null
        ];
    }

     if(!is_null($brand))
    foreach($brand  as $data)
    {
        $brandArr[] = [
            "id" => isset($data->id) ?$data->id: null,
            "name" => isset($data->name) ?$data->name: null,
            "description" => isset($data->description) ?$data->description: null,
            "logo" => isset($data->logo) ?$data->logo: null,
            "deleted" => isset($data->deleted) ?$data->deleted: null,
            "created_at" => isset($data->created_at) ?$data->created_at: null,
            "updated_at" => isset($data->updated_at) ?$data->updated_at: null
        ];
    }

    if(!is_null($websites))
    foreach($websites  as $data)
    {
        $websitesArr[] = [
            "id" => isset($data->id) ?$data->id: null,
            "name" => isset($data->name) ?$data->name: null,
            "description" => isset($data->description) ?$data->description: null,
            "url" => isset($data->url) ?$data->url: null,
            "deleted" => isset($data->deleted) ?$data->deleted: null,
            "created_at" => isset($data->created_at) ?$data->created_at: null,
            "updated_at" => isset($data->updated_at) ?$data->updated_at: null
        ];
    }

    if(!is_null($directors))
    foreach($directors  as $data)
    {
        $directorsArr[] = [
            "id" => isset($data->id) ?$data->id: null,
            "merchant_id" => isset($data->merchant_id) ?$data->merchant_id: null,
            "country_id" => isset($data->country_id) ?$data->country_id: null,
            "name" => isset($data->name) ?$data->name: null,
            "nric" => isset($data->nric) ?$data->nric: null,
            "photo_1" => isset($data->photo_1) ?$data->photo_1: null,
            "photo_2" => isset($data->photo_2) ?$data->photo_2: null,
            "deleted" => isset($data->deleted) ?$data->deleted: null,
            "created_at" => isset($data->created_at) ?$data->created_at: null,
            "updated_at" => isset($data->updated_at) ?$data->updated_at: null
        ];
    }

    $userModel = [
      "user" =>[
        "id" => isset($merchantModel['id']) ? $merchantModel['id'] : null ,
        "occupation_id" => isset($merchantModel['occupation_id']) ? $merchantModel['occupation_id'] : null ,
        "first_name" => isset($merchantModel['first_name']) ? $merchantModel['first_name'] : null ,
        "last_name" =>  isset($merchantModel['last_name']) ? $merchantModel['last_name'] : null,
        "birthdate" => isset($merchantModel['birthdate']) ? $merchantModel['birthdate'] : null ,
        "mobile_no" => isset($merchantModel['mobile_no']) ? $merchantModel['mobile_no'] : null ,
        "email" =>  isset($merchantModel['email']) ? $merchantModel['email'] : null,
        "password" => isset($merchantModel['password']) ? $merchantModel['password'] : null ,
        "gender" =>  isset($merchantModel['gender']) ?  $merchantModel['gender']: null,
        "annual_income" => isset($merchantModel['annual_income']) ?$merchantModel['annual_income']  : null,
        "salutation" =>  isset($merchantModel['salutation']) ? $merchantModel['salutation'] : null,
        "type" =>  isset($merchantModel['type']) ? $merchantModel['type'] : null,
        "deleted" =>  isset($merchantModel['deleted']) ?  $merchantModel['deleted']: null,
        "created_at" => isset($merchantModel['created_at']) ? $merchantModel['created_at'] : null,
        "updated_at" => isset($merchantModel['updated_at']) ?  $merchantModel['updated_at']: null
        ],
      "merchant" => $merchantArr,
      "bank" => $bankArr,
      "address" =>$addressArr,
      "brand" =>$brandArr,
      "websites" =>$websitesArr ,
      "directors" => $directorsArr
    ];

    return $userModel;
}
    private function convertMerchantObjectToProperArray()
    {
       // 'merchant','merchant.bank','merchant.address','merchant.brand','merchant.websites','merchant.directors'

//        $array = [
//            'merchant' => isset($userModel['merchant'])?:null,
//        ]
        //if(isset($userModel['merchant']))
    }
    public function postEditMerchant(Request $request)
    {
        dd('not implemented yet');
        $indication = "merchant";
        return view('user/registerMerchant',compact(['indication']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		/*
        $brand_name_array = $request->get('brand_name');
        Models used fo registering a merchant
        User, Bank, Buyer, Address, Merchant, Brand, Website and Director
		*/
        $user = new User();
        $user_model = $user->store($request);//return new user record in db

        $bank = new Bank();
        $bank_model = $bank->store($request);

        if($request['indication']=='buyer') {
            return "no functionality implemented";
            $buyer = new Buyer();
            $buyer_model = $buyer->store($request, $user_model);
        }

        if($request['indication']=='merchant') {

            //TODO: for adding address first create address then add address id to merchant table
            //country_id   => working
            $address = new Address();
            $address_model = $address->store($request);

            // user_id, country_id, address_id, bank_id => working
            $user_as_merchant = new Merchant();
            $user_as_merchant_model = $user_as_merchant->store($request, $user_model, $bank_model,$address_model);

            /*
             * Document table
             */
            $documents = new Document();
            $documents_model = $documents->store($request,$user_as_merchant_model);

            //todo: add brand
            //1)create merchant and get model
            //2)create all brand and get all models
            //3)sync merchant model with brand models in merchantbrand table

            $brand = new Brand();
            $brand_models = $brand->store($request,$user_as_merchant_model,$address_model);
            //now syncing
            $user_as_merchant_model->attachBrands($user_as_merchant_model,$brand_models);

            //http://laravel.com/docs/5.1/eloquent-relationships#inserting-many-to-many-relationships
            //for storing web sites in "merchantwebsite" table
            //first create merchant and get id
            //then create websites and get website model array like director
            //then attach merchant with each website id

            $website = new Website();
            $website_models = $website->store($request);

            //attachment with merchant in "merchantwebsite" table

            $user_as_merchant->attachWebsites($website_models,$user_as_merchant_model);

            $director = new Director();
            $director_model = $director->store($request, $user_as_merchant_model);

            /*save all FKs of directors & merchants to merchantdirectos tables */
            $user_as_merchant_model->attachDirectors($director_model,$user_as_merchant_model);
            \Session::flash( Config::get('messages.key.name'),$this->messageHandler->success('merchantRegistered',null,null,true,true,true));
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
