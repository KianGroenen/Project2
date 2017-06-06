<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function pronostiek() {
        return $this->hasMany('App\Pronostiek');
    }

    protected $fillable = [
        'date', 'team1', 'team2', 'firsthalfvic', 'victorious', 'score1', 'score2', 'bothteamscore', 'goalguess', 'firstgoal', 'winwithoutextension', 'cards', 'corners', 'penalties', 'schiftings',
    ];
}