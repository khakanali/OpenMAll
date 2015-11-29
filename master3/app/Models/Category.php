<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function brand()
    {
        return $this->hasMany('App\Models\Brand');
    }

    public function subCatLevel1()
    {
        return $this->hasMany('App\Models\SubCatLevel1');
    }

    public function subCatLevel2()
    {
        return $this->hasMany('App\Models\SubCatLevel2');
    }

    public function subCatLevel3()
    {
        return $this->hasMany('App\Models\SubCatLevel3');
    }

    public function merchant()
    {
        return $this->belongsToMany('App\Models\Merchant');
    }

}
