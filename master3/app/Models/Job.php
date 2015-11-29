<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
	protected $table = "job";
	protected $guarded = ['deleted'];
}
