<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $table='occupation';

    /*occupation has only one user 1:1*/
    public function user()
    {
        return $this->hasOne('App\User','occupation_id','id');
    }
}
