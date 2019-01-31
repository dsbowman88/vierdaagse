<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = ['schoolname', 'groupsize','tour_id', 'contact', 'email', 'phonenumber'];

}
