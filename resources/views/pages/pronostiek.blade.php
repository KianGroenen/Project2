@extends('layouts.baselayout')

@section('content')
<?php 
    $url = $_SERVER['REQUEST_URI'];
    $id = substr($url,12,1);
?>
    @if (!empty($successMessage))
        <div class="successMessage" style="background-color:forestgreen"> {{ $successMessage }} </div>
    @endif

    @if (!empty($errorMessage))
        <div class="errorMessage" style="background-color:red; color:white"> {{ $errorMessage }} </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form enctype="multipart/form-data" action="/pronostiek/store" method="POST">
                    <h1>Create Pronostiek</h1>
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
                        <label class="col-md-4 control-label" for="victorious">Winnend team?</label>
                        <input type="text" name="victorious" id="victorious" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="firsthalfvic">Winnend team voor de rust?</label>
                        <input type="text" name="firsthalfvic" id="firsthalfvic" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="score1">Score team thuis</label>
                        <input type="text" name="score1" id="score1" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="score2">Score team op verplaatsing</label>
                        <input type="text" name="score2" id="score2" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label" for="bothteamscore">Scoren beide teams?</label>
                        <input type="checkbox" name="bothteamscore" id="bothteamscore">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label" for="goalguess">Meer dan 3.5 goals?</label>
                        <input type="checkbox" name="goalguess" id="goalguess">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="firstgoal">Eerste Goal?</label>
                        <input type="text" name="firstgoal" id="firstgoal" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label" for="winwithoutextension">Winst bij reguliere tijd?</label>
                        <input type="checkbox" name="winwithoutextension" id="winwithoutextension">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cards">Aantal Kaarten?</label>
                        <input type="text" name="cards" id="cards" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="corners">Corners</label>
                        <input type="text" name="corners" id="corners" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label" for="penalties">Penalties?</label>
                        <input type="checkbox" name="penalties" id="penalties">
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="schiftings">Aantal spelers in het stadion?</label>
                        <input type="text" name="schiftings" id="schiftings" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="matchid" id="matchid" value="{{$id}}" class="form-control input-md col-md-4">
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>

        </div>
    </div>
@endsection