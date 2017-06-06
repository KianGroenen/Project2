<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Match;
use App\Pronostiek;
use App\User;
use DB;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::All();
        $data['matches'] = $matches;
        return view('match/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('match/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $match = new Match();

        $match::create(
            [
                'date' => $request->input("date"),
                'team1' => $request->input("team1"),
                'team2' => $request->input("team2"),
                'firsthalfvic' => "",
                'victorious' => "",
                'score1' => 0,
                'score2' => 0,
                'bothteamscore' => 0,
                'goalguess' => 0,
                'firstgoal' => "",
                'winwithoutextension' => 0,
                'cards' => 0,
                'corners' => 0,
                'penalties' => 0,
                'schiftings' => "",
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $match = Match::find($id);
        $data['match'] = $match;
        return view('match/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $match = Match::find($id);
        $match->date = $request->input("date");
        $match->team1 = $request->input("team1");
        $match->team2 = $request->input("team2");
        $match->firsthalfvic = $request->input("firsthalfvic");
        $match->victorious = $request->input("victorious");
        $match->score1 = $request->input("score1");
        $match->score2 = $request->input("score2");
        $match->bothteamscore = (int)$request->input("bothteamscore");
        $match->goalguess = (int)$request->input("goalguess");
        $match->firstgoal = $request->input("firstgoal");
        $match->winwithoutextension = (int)$request->input("winwithoutextension");
        $match->cards = $request->input("cards");
        $match->corners = $request->input("corners");
        $match->penalties = (int)$request->input("penalties");
        $match->schiftings = $request->input("schiftings");
        $match->save();
        $this->setScore($id);
        return var_dump("Success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function setScore($id) 
    {
        $matches = DB::table('matches')->where('id', $id)->get();
        $pronostieken = DB::table('pronostieks')->where('matchid', $id)->get();
        $score = 0;
        foreach ($matches as $match) {
            foreach ($pronostieken as $pronostiek) {
                // Begin Score Berekening
                // Winnend team voor de rust
                if ($match->firsthalfvic == $pronostiek->firsthalfvic) {
                    $score += 1;
                }
                // Winnend team
                if ($match->victorious == $pronostiek->victorious) {
                    $score += 1;
                }
                // Score team thuis
                if ($match->score1 == $pronostiek->score1) {
                    $score += 1;
                }
                // Score team op verplaatsing
                if ($match->score2 == $pronostiek->score2) {
                    $score += 1;
                }
                // Scoren beide teams
                if ($match->bothteamscore == $pronostiek->bothteamscore) {
                    $score += 1;   
                }
                // Meer Goals dan 3.5
                if ($match->goalguess == $pronostiek->goalguess) {
                    $score += 1;
                }
                // Eerste Goal
                if ($match->firstgoal == $pronostiek->firstgoal) {
                    $score += 1;
                }
                // Winst zonder overtime
                if ($match->winwithoutextension == $pronostiek->winwithoutextension) {
                    $score += 1;
                }
                // Aantal kaarten
                if ($match->cards == $pronostiek->cards) {
                    $score += 1;
                }
                // Corners
                if ($match->corners == $pronostiek->corners) {
                    $score += 1;
                }
                // Penalties
                if ($match->penalties == $pronostiek->penalties) {
                    $score += 1;
                }
                // Aantal spelers in het stadion
                if ($match->schiftings == $pronostiek->schiftings) {
                    $score += 1;
                }
                // Einde Score Berekening
                // Punten toekennen
                $userid = $pronostiek->userid;
                $user = User::find($userid);
                $user->score += $score;
                $user->save();

                $prono = Pronostiek::find($pronostiek->id);
                $prono->score = $score;
                $prono->save();
                $score = 0;
            }
        }
        var_dump($score);
    }
}
