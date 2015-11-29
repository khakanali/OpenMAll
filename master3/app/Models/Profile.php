<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo Album
     */
    public function album()
    {
        return $this->belongsTo('App\Models\Album');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo Signboard
     */
    public function signboard()
    {
        return $this->belongsTo('App\Models\Signboard');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo VBanner
     */
    public function vbanner()
    {
        return $this->belongsTo('App\Models\VBanner');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo Theme
     */
    public function theme()
    {
        return $this->belongsTo('App\Models\Theme');
    }
}
