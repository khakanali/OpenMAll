<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TermsCondition extends Model {
	protected $table = "terms_conditions";
	protected $guarded = ['deleted'];
}
