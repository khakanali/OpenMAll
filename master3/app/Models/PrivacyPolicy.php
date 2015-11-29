<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model {

	protected $table = "privacy_policy";
	protected $guarded = ['deleted'];
}
