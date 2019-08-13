<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soort extends Model
{
    protected $fillable = ['name'];

    public function dranks(){
        return $this->belongsToMany('App\Drank',
            'drank_soort','soort_id',
            'drank_id')->withTimestamps();
    }
}
