<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DownloadApp extends Model {
	protected $table = "download_apps";
	protected $guarded = ['deleted'];
	protected $hidden = ['password', 'remember_token'];
}
