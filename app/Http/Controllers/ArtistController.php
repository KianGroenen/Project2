<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArtistController extends Controller
{
    public function index() {
    	// /artists/index
    	$artists = \App\Artist::all();
    	$data['artists'] = $artists;

    	return view('artists/index', $data);
    }

    public function show($id) {
    	$artist = \App\Artist::with('songs')->findOrFail($id);
    	$data['artist'] = $artist;

    	return view('artists/show', $data);
    }
}
