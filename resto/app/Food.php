<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['naam','prijs'];

    public function foodsoorts(){
        return $this->belongsToMany('App\Foodsoort',
            'food_soort','food_id',
            'foodsoort_id')->withTimestamps();
    }
}
