<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List_expert extends Model
{
    public static function incomplete(){
        return static::where('permanent', 0)->get();
    }
    public static function complete(){
        return static::where('permanent', 1)->get();
    }
}
