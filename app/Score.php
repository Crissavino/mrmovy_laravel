<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['user_id', 'genre_id','genre_score', 'tag_id', 'tag_score'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

     public function genre()
    {
    	return $this->belongsTo('App\Genre', 'genre_id');
    }
    
}
