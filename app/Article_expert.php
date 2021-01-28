<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_expert extends Model
{
    public function expert(){
        return $this -> belongsTo('App\Expert');
    }
    public function categories() {
        return $this->hasToMany('App\Category');
    }
}
