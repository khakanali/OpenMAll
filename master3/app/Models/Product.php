<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table = 'product';

    public function adSlots()
    {
        return $this->belongsToMany('App\Models\AdSlot','adslotproduct','product_id','adslot_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
}
