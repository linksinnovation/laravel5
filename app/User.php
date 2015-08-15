<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $table = 'users';

    public function phone()
    {
    	return $this->hasOne('App\Phone');
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
