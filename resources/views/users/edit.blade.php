@extends('layouts.baselayout')

@section('content')
    @if (!empty($successMessage))
        <div class="successMessage" style="background-color:forestgreen"> {{ $successMessage }} </div>
    @endif

    @if (!empty($errorMessage))
        <div class="errorMessage" style="background-color:red; color:white"> {{ $errorMessage }} </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form enctype="multipart/form-data" action="/user/{{$user->id}}/update" method="POST">
                    <h1>Edit user</h1>
                    @if( Session::has('msgUserSuccess') )
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('msgUserSuccess') }}
                        </div>
                    @elseif( Session::has('msgUserError'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('msgUserError') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" id="username" value="{{$user->username}}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="password" id="password" value="">
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>

        </div>
    </div>
@endsection