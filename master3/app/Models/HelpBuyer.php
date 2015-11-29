<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class HelpBuyer extends Model {
	protected $table = 'buyer_help';
	protected $fillable = ['name', 'phone', 'order_id', 'email', 'remarks'];
}
