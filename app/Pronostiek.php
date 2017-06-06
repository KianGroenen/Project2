<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pronostiek extends Model
{
    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function match() {
    	return $this->belongsTo('App\Match');
    }

    protected $fillable = [
        'firsthalfvic', 'victorious', 'score1', 'score2', 'bothteamscore', 'goalguess', 'firstgoal', 'winwithoutextension', 'cards', 'corners', 'penalties', 'schiftings', 'userid', 'matchid', 'score'
    ];
}