<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\User;
use App\Pronostiek;
use Auth;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Carbon::now();
        $dtEnd = Carbon::now()->addWeeks(5);
        $currentdate = $dt->formatLocalized('%Y-%m-%d');
        $weeksfromnow = $dtEnd->formatLocalized('%Y-%m-%d');

        $match = Match::whereBetween('date', array($currentdate, $weeksfromnow))->first();
        $p = DB::table('pronostieks')
                ->leftJoin('matches', 'pronostieks.matchid', '=', 'matches.id')
                ->where('userid', Auth::user()
                ->id)->distinct()->get();
        // if no upcomming matches --> empty --> error
        $firstMatch = DB::table('matches')->where('date', '>', Carbon::now())->orderBy('date', 'desc')->first();
        $fmdate = new Carbon($firstMatch->date);
        $countdownInS = $fmdate->diffInSeconds($dt);
        $countdown = gmdate('H:i:s', $countdownInS);

        return view('home')
        ->with('match', $match)
        ->with('pronostieken', $p)
        ->with('countdown', $countdown);
    }
}