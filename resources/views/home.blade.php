@extends('layouts.baselayout')
@inject('Matchcontroller', '\App\Http\Controllers\MatchController')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                @if (Auth::User())
                    <div class="user">
                        <p>{{Auth::User()->username}}</p>
                        <!-- IMG HIER TOEVOEGEN -->
                    </div>
                @endif
                <div class="countdown">
                    <p>Tijd tot volgende match: {{$countdown}}</p>
                </div>
                <div class="match">
                        <div class="match{{$match->id}}">
                            <p>{{$match->date}}</p>
                            <p>{{$match->team1}}</p>
                            <p>{{$match->team2}}</p>
                            <a href="/match/{{$match->id}}" class="btn btn-primary">Match Updaten</a>
                        </div>
                </div>
                <a href="#">Bekijk pronostiek geschiedenis</a>
                <div class="pronostiekGeschiedenis">
                        @foreach($pronostieken as $pronostiek)
                            <h1>{{$pronostiek->team1}} - {{$pronostiek->team2}}</h1>
                            <p>{{$pronostiek->firsthalfvic}}</p>
                            <p>{{$pronostiek->victorious}}</p>
                            <p>{{$pronostiek->score1}}</p>
                            <p>{{$pronostiek->score2}}</p>
                            <p>{{$pronostiek->bothteamscore}}</p>
                            <p>{{$pronostiek->goalguess}}</p>
                            <p>{{$pronostiek->firstgoal}}</p>
                            <p>{{$pronostiek->winwithoutextension}}</p>
                            <p>{{$pronostiek->cards}}</p>
                            <p>{{$pronostiek->corners}}</p>
                            <p>{{$pronostiek->penalties}}</p>
                            <p>{{$pronostiek->schiftings}}</p>
                        @endforeach
                </div>
                <a href="/pronostiek/{{$match->id}}/create" class="btn btn-primary">Pronostiek Maken</a>
            </div>
        </div>
    </div>
</div>
@endsection
