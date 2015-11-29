<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model {
	protected $table = "newsletter";
	protected $guarded = ['deleted'];
	protected $hidden = ['password', 'remember_token'];
}
