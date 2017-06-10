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
            <div class="col-md-10 col-md-offset-1 pronostiekform">
                <form enctype="multipart/form-data" action="/pronostiek/store" method="POST">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group1">
                        <label class="col-md-4 control-label" for="victorious">Winnend team?</label>
                        <input type="text" name="victorious" id="victorious" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group1">
                        <label class="col-md-4 control-label" for="firsthalfvic">Winnend team voor<br/> de rust?</label>
                        <input type="text" name="firsthalfvic" id="firsthalfvic" class="form-control input-md col-md-4">
                    </div>

                    <div class="form-group1 col-md-12">
                        <label class="control-label" for="bothteamscore">Scoren beide teams?</label>
                        <div class="ja"><input type="checkbox" name="bothteamscore" id="bothteamscore">Nee</div>
                        <div class="nee"><input type="checkbox" name="bothteamscore2" id="bothteamscore">Ja</div>
                    </div>
                    <div class="form-group1 col-md-12">
                        <label class="control-label" for="goalguess">Meer dan 3.5 goals?</label>
                        <div class="ja"><input type="checkbox" name="goalguess" id="goalguess">Nee</div>
                        <div class="nee"><input type="checkbox" name="goalguess" id="goalguess2">Ja</div>

                    </div>
                    <div class="form-group1">
                        <label class="col-md-4 control-label" for="firstgoal">Eerste Doelpunt?</label>
                        <input type="text" name="firstgoal" id="firstgoal" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group1 col-md-12">
                        <label class="control-label" for="winwithoutextension">Winst binnen reguliere tijd?</label>
 
                        <div class="floatleft"><input type="checkbox" name="winwithoutextension" id="winwithoutextension">Nee</div>
                        <div class="floatleft"><input type="checkbox" name="winwithoutextension" id="winwithoutextension2">Ja</div>
                      
                    </div>
                    <div class="form-group1">
                        <label class="col-md-4 control-label" for="cards">Meer dan 3 kaarten?</label>
                        <input type="text" name="cards" id="cards" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group1">
                        <label class="col-md-4 control-label" for="corners">Meeste hoekschoppen?</label>
                        <input type="text" name="corners" id="corners" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group1 col-md-12">
                        <label class="control-label" for="penalties">Vallen er<br/>strafschoppen?</label>
                        <input type="checkbox" name="penalties" id="penalties">
                    </div>
                    <div class="form-group1">
                        <label class="col-md-4 control-label" for="schiftings">Aantal supporters in het stadion?</label>
                        <input type="text" name="schiftings" id="schiftings" class="form-control input-md col-md-4">
                    </div>
                    <div class="form-group1">
                        <input type="hidden" name="matchid" id="matchid" value="{{$id}}" class="form-control input-md col-md-4">
                    </div>
                    {{ csrf_field() }}
                    <input value="Pronostiek Bevestigen" type="submit" class="submitbtn">
                </form>
            </div>

        </div>
    </div>
@endsection