<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pronostiek;
use Auth;

class PronostiekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pronos = Pronostiek::All();
        $data['pronostieks'] = $pronos;
        return view('pages/pronostieken', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/pronostiek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pronostiek = new Pronostiek();
        $userid = Auth::user()->id;

        $pronostiek::create(
            [
                'firsthalfvic' => $request->input("firsthalfvic"),
                'victorious' => $request->input("victorious"),
                'score1' => $request->input("score1"),
                'score2' => $request->input("score2"),
                'bothteamscore' => (int)$request->input("bothteamscore"),
                'goalguess' => (int)$request->input("goalguess"),
                'firstgoal' => $request->input("firstgoal"),
                'winwithoutextension' => (int)$request->input("winwithoutextension"),
                'cards' => $request->input("cards"),
                'corners' => $request->input("corners"),
                'penalties' => (int)$request->input("penalties"),
                'schiftings' => $request->input("schiftings"),
                'userid' => (int)$userid,
                'matchid' => (int)$request->input("matchid"),
                'score' => 0,
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
        //
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
        //
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
}
