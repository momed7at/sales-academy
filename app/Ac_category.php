<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ac_category extends Model
{
    protected $table="ac_categories";
    //
    public function users(){
        return $this->belongsToMany('\App\Ac_category', 'ac_user_category', 'ac_category_id', 'user_id');
    }
}
