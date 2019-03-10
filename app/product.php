<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    public function parent(){
        return $this->belongsTo('App\product' , 'parent_id');
    }

    public function children(){
        return $this->hasMany('App\product','parent_id');
    }
}
