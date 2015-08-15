<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    //protected $fillable = array('name', 'status');
    //protected $guarded = array('name');
    protected $guarded = ['test'];
    //protected $fillable = ['name', 'email', 'password'];
}
