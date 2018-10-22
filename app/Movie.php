<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function actors()
    {
    	return $this->belongsToMany('App\Actor');
    }

    public function genres()
    {
    	return $this->belongsToMany('App\Genre');
    }

    public function producers()
    {
    	return $this->belongsToMany('App\Producer');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}
