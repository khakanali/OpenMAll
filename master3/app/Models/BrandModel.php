<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model {
	protected $table = 'brand';
	protected $fillable = ['name', 'description'];
}
