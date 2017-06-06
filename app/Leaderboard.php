<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
	public function user() {
        return $this->hasMany('App\User');
    }
    public function user() {
    	return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'name', 'userid',
    ];
}
