<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodsoort extends Model
{
    protected $fillable = ['name'];

    public function foods(){
        return $this->belongsToMany('App\Food',
            'food_soort','foodsoort_id',
            'food_id')->withTimestamps();
    }
}
