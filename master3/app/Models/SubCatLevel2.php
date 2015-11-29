<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCatLevel2 extends Model
{
     protected $table='subcat_level_2';
   public function category()
	{
		return $this->belongsTo('App\Models\Category','category_id');
	}
         public function subCatLevel1()
	{
		return $this->belongsTo('App\Models\SubCatLevel1','subcat_level_1_id');
	}
}
