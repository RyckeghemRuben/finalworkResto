<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Drank extends Model
{
    protected $fillable = ['drankNaam','drankPrijs'];

    public function soorts(){
        return $this->belongsToMany('App\Soort',
            'drank_soort','drank_id',
            'soort_id')->withTimestamps();
    }

}
