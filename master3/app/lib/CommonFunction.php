<?php

namespace App\lib;


use DateTime;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class CommonFunction {


    public function getCurrency()
    {
        $list = DB::table('currency')->lists('code','id');
        return $list;
    }

    public function getLanguage()
    {
        $list = DB::table('language')->lists('description','id');
        return $list;
    }

    public function getCountry()
    {
        $list = DB::table('country')->lists('name','id');
        return $list;
    }

    public function getCity()
    {
        $list = DB::table('city')->lists('name','id');
        return $list;
    }

    public function getState()
    {
        $list = DB::table('state')->lists('name','id');
        return $list;
    }

    public function getBusinessType(){
        $list = Config::get('enumDropDowns.merchant.business_type') ;//DB::table('merchant')->pluck('business_type');//lists('business_type','business_type');
      //  dd($selectListForBusinessType);
        return $list;
    }
    public function getAddressType(){
        $list = Config::get('enumDropDowns.address.type') ;//DB::table('merchant')->pluck('business_type');//lists('business_type','business_type');
      //  dd($selectListForBusinessType);
        return $list;
    }
    public function category(){
        $list = DB::table('category')->lists('description','id');
        return $list;
    }

    function set_active($uri)
    {
        return Request::is($uri) ? 'active' : '';
    }




}