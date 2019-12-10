<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ac_Video extends Model
{
    //
    protected $table="ac_videos";

    public function user_videos()
    {
        return $this->belongsTo('App\User');
    }

    public function scripts()
    {
        return hasMany('App\Comment', 'vid_id');
    }
}
