<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    public function categories()
    {
        return $this->belongsToMany('\App\Ac_category', 'ac_user_category',  'user_id','ac_category_id');
    }

    public function videos(){
        return $this->belongsToMany('\App\Ac_Video', 'user_videos', 'vid_id', 'user_id');

    }

    public function hasCategory($categoryID){
        foreach ($this->categories as $category) {
            if($category->id == $categoryID)
                return true;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'gender', 'birth_date', 'phone', 'address', 'job_title', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
