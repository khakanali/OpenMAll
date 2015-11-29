<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantProduct extends Model
{
    //
	public function merchants() {
		return $this->hasMany('App\Models\Merchants', 'merchant_id',
	}
}
