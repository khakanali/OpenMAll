<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model {
	protected $table = 'advertisement';
	protected $fillable = ['name', 'phone', 'email'];
}
