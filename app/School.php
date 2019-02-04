<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = ['schoolname', 'group_size','tour_id', 'contact', 'email', 'phonenumber', 'user_id'];

    static function fgroupTotal($inputgroup) {
         $totalgroups = DB::table('schools')
         ->selectRaw('SUM(group_size) as tot')
         ->value('tot');
        $total=$totalgroups + $inputgroup;
         $total = $total + Participant::all()->count();
        // dd($total);
        return $total;

    }

}
