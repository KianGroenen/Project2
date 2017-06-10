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
                <form enctype="multipart/form-data" action="/user/store" method="POST">
                    <h1>Create user</h1>
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
                        <label class="col-md-4 control-label" for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control input-md col-md-4">
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control input-md col-md-4">
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control input-md col-md-4">
                    </div>

                    <div class="form-group col-md-12">
                        <label class="control-label">Supporter</label><br>
                        <input type="checkbox" name="supporter" id="supporter" value="1"><label for="supporter">Supporter</label>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>

        </div>
    </div>
@endsection