<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{

    protected $fillable = ['name'];

    public function movies()
    {
    	return $this->belongsToMany('App\Movie');
    }

    public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}
}