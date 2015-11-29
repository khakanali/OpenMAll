<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Merchant extends Model
{
    protected $table = 'merchant';
    protected $fillable = [ "user_id",'company_name','gst','business_reg_no',  'country_id',   'business_type',
       'contact_person', 'office_no',  'mobile_no',   'oshop_name','bank_id','address_id',
       'description',   'license',  'coverage', 'category_id','return_policy', 'remarks'];
  //  protected $guarded = [ 'id'];

/*relations*/

    /* The merchant that belong to the website. */
    public function websites()
    {
        return $this->belongsToMany('App\Models\Website','merchantwebsite','merchant_id','website_id');
    }

    /* Merchant belongs to merchantdirector table m:n */
    public function directors()
    {
        return $this->belongsToMany('App\Models\Director','merchantdirector','merchant_id','director_id');
    }

    public function brand()
    {
        return $this->belongsToMany('App\Models\Brand','merchantbrand','merchant_id','brand_id');
    }

    /* merchant belongs to only one user */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }


    /* merchant belongs to only one address 1:1 */
    public function address()
    {
        return $this->belongsTo('App\Models\Address','address_id','id');
    }

    /*merchant belongs to only one bank 1:1*/
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank','bank_id','id');
    }

/*relations ends*/

    public function collectMerchantFormData(Request $request, $user_model, $bank_model,$address_model)
    {
        return  $user_data = [
          //  'id'=>$request->get(),
            'user_id'=>$user_model['id'],
            'company_name'=>$request->get('company_name'),
            'gst'=>$request->get('gst'),
            'business_reg_no'=>$request->get('business_reg_no'),
            'country_id'=>$request->get('country'),
            'business_type'=>$request->get('business_type'),
            'address_id'=>$address_model['id'],
            'contact_person'=>$request->get('contact'),
            'office_no'=>$request->get('office'),
            'mobile_no'=>$request->get('mobile'),
            'oshop'=>$request->get('shop_name'),
            'oshop_logo'=>$request->get(''),
            'description'=>$request->get('description'),
            'license'=>$request->get('have_license'),
            'coverage'=>$request->get('supply_method'),
            'ownership'=>$request->get('have_brand'),
            'category_id'=>$request->get('category'),
            'bank_id'=>$bank_model['id'],
            'return_policy'=>$request->get('return_policy'),
            'remarks'=>$request->get('remarks')
        ];
    }

    public function getMeta()
    {
        $merchant = [
            "id" => null,
            "user_id" => null,
            "company_name" => null,
            "gst" => null,
            "business_reg_no" =>null,
            "country_id" => null,
            "business_type" =>null,
            "address_id" => null,
            "contact_person" => null,
            "office_no" =>null,
            "mobile_no" => null,
            "oshop_name" => null,
            "oshop_logo_1" =>null,
            "oshop_logo_2" =>null ,
            "oshop_logo_3" =>null ,
            "oshop_logo_4" => null,
            "oshop_logo_5" => null,
            "oshop_adimage_1" =>null,
            "oshop_adimage_2" =>null ,
            "oshop_adimage_3" =>null,
            "oshop_adimage_4" =>null,
            "oshop_adimage_5" =>null,
            "description" => null,
            "history" => null,
            "license" =>null,
            "coverage" =>null,
            "ownership" =>null,
            "category_id" =>null,
            "planned_sales" =>null,
            "bank_id" =>null,
            "return_policy" =>null,
            "remarks" =>null,
            "deleted" =>null,
            "created_at" =>null,
            "updated_at" =>null
        ];

        return $merchant;
    }

    public function getMerchantRelationsFullMeta()
    {
        $user = new User();
        $website = new Website();
        $director = new Director();
        $address = new \App\Models\Address();
        $bank = new Bank();
        $brand = new Brand();

        $merchantFullMeta = [
			'user' =>$user->getMeta(),
			'merchant' =>[$this->getMeta()],
			'bank' =>[$bank->getMeta()],
			'address' =>[$address->getMeta()],
			'brand' =>[$brand->getMeta()],
			'websites' =>[$website->getMeta()],
			'directors' =>[$director->getMeta()],
		];
        return $merchantFullMeta;
    }


    public function store(Request $request , $user_model, $bank_model,$address_model){

		$user_data = $this->collectMerchantFormData(
			$request, $user_model, $bank_model,$address_model);
		//dd($user_data);

        $user = new Merchant();

        $user_mer_model = $user->create($user_data);
    //  dd($user_mer_model);
        return $user_mer_model;
    }


    public function attachWebsites($website_models,$user_as_merchant_model)
    {
        foreach($website_models as $website_model)
        {
            $user_as_merchant_model->websites()->attach($website_model->id);
        }

    }

    public function attachBrands($user_as_merchant_model,$brand_models)
    {
        foreach($brand_models as $brand_model)
        {
            $user_as_merchant_model->brand()->attach($brand_model->id);
        }

    }

    public function attachDirectors($director_models,$user_as_merchant_model)
    {
        foreach($director_models as $director_model)
        {
            $user_as_merchant_model->directors()->attach($director_model->id);
        }

    }
}
