<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlbumsController extends Controller
{
    public function show($id){

    	$album = \App\Album::with('songs')->findOrFail($id);
    	return view('albums/show')->with('album', $album);
    }
}
