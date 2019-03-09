<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function parent(){
        return $this->belongsTo('App\category' , 'parent_id');
    }

    public function children(){
        return $this->hasMany('App\category','parent_id');
    }
}
