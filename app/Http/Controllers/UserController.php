<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::All();
        $data['users'] = $users;
        return view('pages/users', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $supporter = '';
        $id = User::orderBy('id', 'desc')->first()->id;
        $id++;

        if (!empty($request->input("supporter"))) {
            $supporter = 1;
        } else {
            $supporter = 0;
        }
        if(!empty($request->input("username")) && !empty($request->input("email")) && !empty($request->input("password"))) {
            if(filter_var($request->input("email"), FILTER_VALIDATE_EMAIL)) {
                // valid address
                $user::create(
                //$request->all()
                    [
                        'username' => $request->input("username"),
                        //'usercode' => bcrypt($request->input("username")),
                        'usercode' => substr(md5($id),0,8),
                        'email' => $request->input("email"),
                        'password' => bcrypt($request->input("password")),
                        'supporter' => $supporter,
                        'currency' => 0,
                        'admin' => 0,
                        'dailycode' => 1,
                    ]
                );
                return var_dump("Success");
            }
            else {
                // invalid address
                return var_dump("Invalid Adress");
            }

        } else {
            return var_dump("Error");
        }
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
        $user = User::find($id);
        $data['user'] = $user;
        return view('users/edit', $data);
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
        if(!empty($request->input("username")) && !empty($request->input("email"))) {
            if(filter_var($request->input("email"), FILTER_VALIDATE_EMAIL)) {
                $user = User::find($id);
                $user->username = $request->input("username");
                $user->usercode = bcrypt($request->input("username"));
                if (!empty($request->input("password"))) {
                    $user->password = bcrypt($request->input("password"));
                }
                $user->email = $request->input("email");
                $user->admin = (int)$request->input("admin");
                $user->save();
                return var_dump("Success");
            }
            else {
                // invalid address
                return var_dump("Invalid adress");
            }

        } else {
            return var_dump("error");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return var_dump("Success");
    }
}
