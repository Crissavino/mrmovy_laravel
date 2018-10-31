<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

    public function movies()
    {
    	return $this->belongsToMany('App\Movie');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
