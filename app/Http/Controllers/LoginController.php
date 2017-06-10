<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function logout() {
    	Auth::logout();
    	return Redirect::to('home');
    }
}
