<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Address extends Model
{
    protected $table = 'address';
    protected $guarded = [ 'id'];

    /*starts relations*/

    /*Address has only one merchant 1:1*/
    public function merchant()
    {
        return $this->hasOne('App\Models\Merchant','address_id','id');
    }

    /*Address belongs to only one city 1:1*/
    public function city()
    {
        return $this->belongsTo('App\Models\City','city_id','id');
    }
    /*end relations*/

    public function getMeta()
    {
        return  [ "id" => null,
            "city_id" =>null,
            "postcode" => null,
            "line1" => null,
            "line2" => null,
            "line3" => null,
            "line4" => null,
            "type" => null,
            "deleted" => null,
            "created_at" => null,
            "updated_at" => null,
        ];
    }

    public function collectAddressFormData(Request $request )
    {
        return  $bank_data = [
            'city_id'=>$request->get('city_name'),
            'postcode'=>$request->get('zip'),
            'line1'=>$request->get('line1'),
            'line2'=>$request->get('line2'),
            'line3'=>$request->get('line3'),
            'line4'=>$request->get('line4'),
            'type'=>$request->get('address_type'),
            'deleted'=>'null',
        ];
    }

    public function store(Request $request)
    {
        $address_data = $this->collectAddressFormData($request);

        $address = new Address();
        $address_model = $address->create($address_data);

        return $address_model;
    }
}
