<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    public function list_expert(){
        return $this -> belongsTo('App\List_expert');
    }
    public function article_expert(){
        return $this -> hasMany('App\Article_expert', 'expert_id');
    }
}
