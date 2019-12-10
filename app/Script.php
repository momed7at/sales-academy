<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    //
    protected $table ="ac_scripts";

    public function videos_script()
{
    return $this->belongsTo('App\Script', 'vid_id');
}
}
