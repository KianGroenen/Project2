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
                <form enctype="multipart/form-data" action="/match/store" method="POST">
                    <h1>Create Match</h1>
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
                        <label class="col-md-4 control-label" for="date">Datum</label>
                        <input type="date" name="date" id="date" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="team1">Team 1</label>
                        <input type="text" name="team1" id="team1" value="KV Mechelen" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="team2">Team 2</label>
                        <input type="text" name="team2" id="team2" class="form-control input-md col-md-4">
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>

        </div>
    </div>
@endsection