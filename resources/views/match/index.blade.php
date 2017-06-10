@extends('layouts.baselayout')

@section('content')
    <h1>Overzicht Matches</h1>
    @if (!empty($successMessage))
        <div class="successMessage" style="background-color:forestgreen"> {{ $successMessage }} </div>
    @endif

    @if (!empty($errorMessage))
        <div class="errorMessage" style="background-color:red; color:white"> {{ $errorMessage }} </div>
    @endif
    <a href="match/create" class="btn btn-primary createUser">Nieuwe match aanmaken</a>

    <div class="panel panel-default">
    @if( Session::has('msgUserSuccess') )
        <div class="alert alert-success" role="alert">
            {{ Session::get('msgUserSuccess') }}
        </div>
    @elseif( Session::has('msgUserError'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('msgUserError') }}
        </div>
    @endif
        <!-- List group -->
        <ul class="list-group">
            @foreach ($matches as $match)
            <li class="list-group-item oneUser">
                <div class="team2">{{$match->team2}}</div>
                <a href="/pronostiek/{{$match->id}}/create" class="btn btn-primary">Pronostiek Maken</a>
                <a href="/match/{{$match->id}}" class="btn btn-primary">Match Updaten</a>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
