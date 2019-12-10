<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_video extends Model
{
    //
    protected $table = "user_videos";

    public function users()
    {

        return $this->belongsToMany('\App\Ac_Video', 'user_videos', 'user_id', 'vid_id');
    }


}
