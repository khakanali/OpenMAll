<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCatLevel1 extends Model
{
    
     protected $table='subcat_level_1';
     public function category()
	{
		return $this->belongsTo('App\Models\Category','category_id');
	}
}
