<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = ['schoolname', 'group_size','tour_id', 'contact', 'email', 'phonenumber', 'user_id'];

}
