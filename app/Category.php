<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function article_expert(){
        return $this -> hasMany('App\Article_expert', 'category_id');
    }
}
