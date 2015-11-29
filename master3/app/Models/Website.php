<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Website extends Model
{
    protected $table = 'website';
    protected $guarded = [ 'id'];

    public function merchant()
    {
        return $this->belongsToMany('App\Models\Merchant','merchantwebsite','website_id','merchant_id');
    }
    public function getMeta()
    {
        return
            $websites =["id" =>null,
                "name" => null,
                "description" => null,
                "url" => null,
                "created_at" => null,
                "updated_at" => null];
    }
    public function collectWebsiteData($name,$description,$url)
    {
        return  $bank_data = [
            'name'=>$name,
            'description'=>$description,
            'url'=>$url
        ];
    }

    public function store(Request $request){

        $website = new Website();
        $webRecords[] = ['name'=>null,'description'=>null,'url'=>null];//all website records
        $website_model[] =null;
        //loop on website
        $length = count($request->get('website'));

        //lets create a record
        foreach($request->get('website') as $url)
        {
            $webRecords[] = $this->collectWebsiteData('website','',$url); // every key has an arr except merchant_id
        }

        //loop on social
        $length = count($request->get('social'));//

        foreach($request->get('social') as $url)
        {
            $webRecords[] = $this->collectWebsiteData('social','',$url); // every key has an arr except merchant_id
        }

        //loop on ecommerce
        $length = count($request->get('ecom_site'));//

        foreach($request->get('ecom_site') as $url)
        {
            $webRecords[] = $this->collectWebsiteData('ecom_site','',$url); // every key has an arr except merchant_id
        }

        unset($webRecords[0]);

        foreach($webRecords as $websiteSingleRecord)
        {
            $website_model[] = $website->create($websiteSingleRecord);
        }

        unset($website_model[0]);

        return $website_model;
    }
}
